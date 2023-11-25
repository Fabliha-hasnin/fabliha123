<?php
    session_start();
    require_once ("../model/operationmodel.php");

    $name = $_REQUEST['employerName'];
    $company = $_REQUEST['companyName'];
    $contact = $_REQUEST['contactNo'];
    $username= $_REQUEST['username'];
    $password= $_REQUEST['password'];

    if($name==''||$company==''||$contact==''||$username==''||$password=='')
    {
        echo "null value";
    }
    else{

        $updateemp = updateemp($name,$company,$contact,$username,$password);

        if ($updateemp)
        {
            echo "update successful";
        }
        else 
        {
           return false;
        }
    }


?>