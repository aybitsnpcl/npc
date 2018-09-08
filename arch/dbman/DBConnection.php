<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/5/2018
 * Time: 5:08 PM
 */
//sibbu
class DBConnection
{
    private $host = "localhost";
    public $db_name = "db_npc";
//    private $username = "root";
//    private $password = "";
    private $username = "user_basith";
    private $password = "=!AfqBz=7Lc3";
    public $conn;

    public function dbConnection()
    {

        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
    }
}