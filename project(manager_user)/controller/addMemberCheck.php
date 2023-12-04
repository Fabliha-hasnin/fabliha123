<?php
    session_start();
    require_once('../model/operationmodel.php');

    $role = $_POST['Role'];
    $username = $_POST['username'];

    $result = addMember($username, $role);

    if ($result) {
        header('Location: ../views/addMember.php');
    } else {
        echo "Adding member unsuccessful";
    }
?>
