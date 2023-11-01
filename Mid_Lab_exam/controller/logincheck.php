<?php
session_start();

$username = $_POST['Username']; 
$passwordid = $_POST['Password'];

if ($username == '' || $password == '') {
    echo "null username or password!";
} else if (isset($_SESSION['user']) && $username == $_SESSION['user']['Username'] && $password == $_SESSION['user']['Password']) {
    $_SESSION['flag'] = true;
    header('location: ../views/profile.html');
    exit;
} 
else if 
else {
    echo "invalid username or password";
}
?>