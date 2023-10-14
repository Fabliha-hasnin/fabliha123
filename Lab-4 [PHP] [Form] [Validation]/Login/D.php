<?php
session_start();

$password = $_REQUEST['password'];

if($password == ""){
    echo "null value";
}else if(strlen($password) >= 8 && preg_match('/[@#$%]/', $password)){
    $_SESSION['flag'] = 'true';
    header('location: welcome.php');
}else{
    echo "invalid password!";
}

?>