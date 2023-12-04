<?php
session_start();
require_once ("../model/personmodel.php");

$email = $_POST['email'];

    $status = checkemail($email);

    if ($status) {
        echo 'Email Unavailable';
    } else {
        echo 'Email Available';
    }

?>