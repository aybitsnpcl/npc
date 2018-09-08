<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/6/2018
 * Time: 11:16 PM
 */
require_once '../../../arch/dbman/DBConnection.php';
class AppCommonDAO
{
    private $result = array();
    private $myQuery = "";
    private $numResults = "";
    private $dbConnection = "";
    /**
     * AppCommonDAO constructor.
     */
    public function __construct()
    {
        $this->dbConnection = new DBConnection();
    }

    public function get($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){

        $selectQuery = 'SELECT '.$rows.' FROM '.$table;
        if($join != null){
            $selectQuery .= ' JOIN '.$join;
        }
        if($where != null){
            $selectQuery .= ' WHERE '.$where;
        }
        if($order != null){
            $selectQuery .= ' ORDER BY '.$order;
        }
        if($limit != null){
            $selectQuery .= ' LIMIT '.$limit;
        }

        $this->myQuery = $selectQuery;

        if($this->checkTable($table)){
            $query = @mysqli_query($selectQuery);
            if($query){
                $this->numResults = mysqli_num_rows($query);
                for($row = 0; $row < $this->numResults; $row++){
                    $result = mysqli_fetch_array($query);
                    $keys = array_keys($result);
                    for($key = 0; $key < count($keys); $key++){
                        if(!is_int($keys[$key])){
                            if(mysqli_num_rows($query) >= 1){
                                $this->result[$row][$keys[$key]] = $result[$keys[$key]];
                            }else{
                                $this->result = null;
                            }
                        }
                    }
                }
                return true;
            }else{
                array_push($this->result,mysqli_error());
                return false;
            }
        }else{
            return false;
        }
    }

    private function checkTable($table){

        $tableExist = mysqli_query($this->dbConnection->conn, 'SHOW TABLES FROM '.$this->dbConnection->db_name.' LIKE "'.$table.'"');
        echo'hi crossed'.$table."val".$tableExist;
        if($tableExist){
            echo'hi crossed';
            if(mysqli_num_rows($tableExist)==1){
                echo "table exists";
                return true;
            }else{
                echo "does not bro exists";
                array_push($this->result,$table." does not exist in this database");
                return false;
            }
        }
    }
    public function getResult(){
        $value = $this->result;
        $this->result = array();
        return $value;
    }
}