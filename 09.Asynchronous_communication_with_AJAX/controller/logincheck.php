<?php 
    require_once('../model/personmodel.php');

    session_start();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($email == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($email, $password);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            header('location: ../view/home.php');
        }else{
            header('location: ../view/registration.php');
        }
    }
?>