<?php 
session_start();
require_once('../model/userModel.php');

$id = isset($_POST['id']) ? $_POST['id'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if(empty($id) || empty($password)){
    echo "Null username/password!";   
} else {
    $user = ['id' => $id];
    $isAdmin = adminLogin($id, $password, $userType);
    $isUser = userLogin($id, $password, $userType);

    if($isAdmin) {
        $_SESSION['id'] = $user;
        $_SESSION['flag'] = "true";
        header("location: ../views/admin_home.php");
    } elseif($isUser) {
        $_SESSION['id'] = $user;
        $_SESSION["flag"] = "true";
        header("location: ../views/user_home.php");
    } else {
        echo "Invalid user!";
    }
}
?>
