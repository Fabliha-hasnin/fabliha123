<?php
require_once('../model/usermodel.php');
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        echo "null username or password!";
    } elseif (isset($_POST['rememberMe'])) {
        
        setcookie('username', $username, time() + 200 , '/');
        setcookie('password', $password, time() + 200, '/');
    }

    $user = ['username' => $username];
    $adminstatus = adlogin($username, $password);
    $employerstatus = emplogin($username, $password);

    if ($adminstatus) {
        $_SESSION['user'] = $user;
        $_SESSION['flag'] = 'true';
        header('location: ../views/adminhome.php');
        exit(); 
    } else if($employerstatus){
        $_SESSION['user'] = $user;
        $_SESSION['flag'] = 'true';
        header('location: ../views/employerhome.php');
        exit(); 
    }else {
        echo "invalid user!";
    }
}
?>