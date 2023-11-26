<?php
session_start();
require_once('../model/operationmodel.php');

$password = $_POST['pword'];
$addMemberId =$_REQUEST['addMemberId'];

$result = removeMember($addMemberId);

    if ($result)
    {
        header('Location: ../views/removemember.php');
    }
    else{

        echo "Remove member unsecessful";
    }


?>

