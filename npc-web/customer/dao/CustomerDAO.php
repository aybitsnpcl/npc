<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/5/2018
 * Time: 4:49 PM
 */
require_once("../beans/Customer.php");
require_once '../../../arch/dbman/User.php';

class CustomerDAO
{
    private $conn;
    /**
     * CustomerDAO constructor.
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
    public function addCustomer() {

            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $primaryEmail = $_POST['primaryEmail'];
            $primaryMobileNumber = $_POST['primaryMobileNumber'];
            $customerType = $_POST['customerType'];
            $addressLine1 = $_POST['addressLine1'];
            $addressLine2 = $_POST['addressLine2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $pincode = $_POST['pincode'];
            $country = $_POST['country'];

//            $imgFile = $_FILES['image']['name'];
//            $tmp_dir = $_FILES['image']['tmp_name'];
//            $imgSize = $_FILES['image']['size'];


            if(empty($firstName)){
                $errMSG = "Please Enter first name.";
            }
//            else if(empty($imgFile)){
//                $errMSG = "Please Select Image File.";
//            }
//            else
//            {
//                $upload_dir = 'images/'; // upload directory
//
//                $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
//
//                // valid image extensions
//                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
//
//                // rename uploading image
//                $movie_image = rand(1000,1000000).".".$imgExt;
//
//                // allow valid image file formats
//                if(in_array($imgExt, $valid_extensions)){
//                    // Check file size '5MB'
//                    if($imgSize < 5000000)				{
//                        move_uploaded_file($tmp_dir,$upload_dir.$movie_image);
//                    }
//                    else{
//                        $errMSG = "Sorry, your file is too large.";
//                    }
//                }
//                else{
//                    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//                }
//            }


            // if no error occured, continue ....
            if(!isset($errMSG))
            {
                try
                {
                    $password = md5('demo');
                    $stmt = $this->conn->prepare("INSERT INTO tbl_customers(fullName, primaryEmail, primaryMobile, customerType, customerAddress, username, password, customerStatus) 
	  	                                             VALUES(:full_name,  :primary_email, :primary_mobile,  :customer_type, :customer_address, :user_name, :user_pass, :customer_status)");
                    $fullName = $firstName.','.$lastName;
                    $stmt->bindparam(":full_name",$fullName);
                    $stmt->bindparam(":primary_email",$primaryEmail);
                    $stmt->bindparam(":primary_mobile",$primaryMobileNumber);
                    $stmt->bindparam(":customer_type",$customerType);
                    $address = $addressLine1.','.$addressLine2.','.$city.','.$state.','.$pincode.','.$country;
                    $stmt->bindparam(":customer_address",$address);
                    $stmt->bindparam(":user_name",$primaryEmail);
                    $stmt->bindparam(":user_pass",$password);
                    $status = "N";
                    $stmt->bindparam(":customer_status",$status);
                    $stmt->execute();
                    if($stmt) {
                        $msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Customer has been created successfully</strong> 
			  		</div>
					";

                        header("refresh:1;../ui/customers.php");
                    }
                }
                catch(PDOException $ex)
                {
                    echo $ex->getMessage();
                }
            }

    }

    public function getCustomers() {
        $stmt = $this->conn->prepare("SELECT * FROM tbl_customers");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}