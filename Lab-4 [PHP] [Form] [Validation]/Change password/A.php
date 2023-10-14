<?php
session_start();

$currentPassword = $_SESSION['current_password'];

    if ($newPassword !== $currentPassword) {
        
        $_SESSION['success'] = "Change successful!";
        
        $_SESSION['current_password'] = $newPassword;

        $_SESSION['flag'] = 'true';
        header('location: home.php');
        
    } else {
        
        $_SESSION['error'] = "New password cannot be the same as current password";
    }

    header('Location: changepass.html');

?>
