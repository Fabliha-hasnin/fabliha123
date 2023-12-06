<?php

    $ID = $_REQUEST['ID'];
    $password = $_REQUEST['Password'];
    $confirmPassword = $_REQUEST['ConfirmPassword'];
    $name = $_REQUEST['Name'];
    $ut = $_REQUEST['ut'];

    if($id == '' || $password == ''|| $confirmPassword == ''|| $name == '' || $ut == ''){

        echo "null value! <br> please provide all the value";
    }
    else{
        $user = ['ID' => $id, 'Password' => $password, 'Confirm Password' => $confirmpassword, 'Name' => $name, 'ut' => $ut];
        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
    }



?>