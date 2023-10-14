<?php
session_start();


    $username = $_REQUEST['username'];

    if($username == "" ){
        echo "null value";
    }
    else if(preg_match('$pattern, $subject, $matches', $username)){
        $_SESSION['flag'] = 'true';
        header('location: home.php');
    }else{
    echo "invalid username";
    }

?>
