<?php
session_start();
require_once('../model/operationmodel.php');
$employerId =$_REQUEST['employerId'];

$result = removeMember($employerId);

    if ($result)
    {
        header('Location: ../view/deleteEmployee.php');
    }
    else{

        echo "Remove member unsecessful";
    }

?>