<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 9/6/2018
 * Time: 11:09 AM
 */
        require_once '../../../arch/dbman/User.php';
        require_once '../dao/CustomerDAO.php';



        if(isset($_POST['btnsave'])) {
                $customerDAO = new CustomerDAO();
                $customerDAO->addCustomer();
        }
        else
            echo 'from else part';