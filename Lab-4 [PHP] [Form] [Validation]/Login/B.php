<?php
session_start();

    $username = $_REQUEST['username'];


    if($username == "" ){
        echo "null value";
    }
    else if(strlen($username) >= 2){
        $_SESSION['flag'] = 'true';
        header('location: home.php');
    }else{
    echo "invalid username";
    }

?>

