<?php
    require_once('../model/usermodel.php');
    $name = $_REQUEST['employerName'];
    $contact = $_REQUEST['contactNo'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
 
    if ($name == '' || $contact == '' || $username == '' || $password == '' || $confirmPassword == '' ) {
        echo "Null value! Fill all the fields";
    } 


?>