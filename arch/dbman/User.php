<?php
include_once "DBConnection.php";
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/5/2018
 * Time: 4:46 PM
 */
class USER
{

    private $conn;

    /**
     * USER constructor.
     */
    public function __construct()
    {
        $database = new DBConnection();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }

    public function register($fullName, $email, $mobile, $address, $country, $uname, $upass, $code)
    {
        try
        {
            $password = md5($upass);
            $stmt = $this->conn->prepare("INSERT INTO tbl_users(fullName, userEmail, userMobile, userAddress, userCountry, userName, userPassword, tokenCode) 
			                                             VALUES(:full_name,  :user_mail, :user_mobile,  :user_address,  :user_country, :user_name, :user_pass, :active_code)");
            $stmt->bindparam(":full_name",$fullName);
            $stmt->bindparam(":user_mail",$email);
            $stmt->bindparam(":user_mobile",$mobile);
            $stmt->bindparam(":user_address",$address);
            $stmt->bindparam(":user_country",$country);
            $stmt->bindparam(":user_name",$uname);
            $stmt->bindparam(":user_pass",$password);
            $stmt->bindparam(":active_code",$code);
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }

    public function login($email,$upass)
    {
        try
        {
            $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=:email_id");
            $stmt->execute(array(":email_id"=>$email));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1)
            {
                if($userRow['userStatus']=="Y")
                {
                    if($userRow['userPassword']==md5($upass))
                    {
                        $_SESSION['userSession'] = $userRow['userID'];
                        return true;
                    }
                    else
                    {
                        header("Location: login.php?error");
                        exit;
                    }
                }
                else
                {
                    header("Location: login.php?inactive");
                    exit;
                }
            }
            else
            {
                header("Location: login.php?error");
                exit;
            }
        }
        catch(PDOException $ex)
        {
            echo $ex->getMessage();
        }
    }


    public function is_logged_in()
    {
        if(isset($_SESSION['userSession']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        $_SESSION['userSession'] = false;
    }

    function send_mail($email,$message,$subject)
    {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;
        $mail->AddAddress($email);
        $mail->Username="javatiddler@gmail.com";
        $mail->Password="Tiddler@aybits";
        $mail->SetFrom('javatiddler@gmail.com','AYBITS');
        $mail->AddReplyTo("javatiddler@gmail.com","AYBITS");
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->Send();
    }
}