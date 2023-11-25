<?php
session_start();
require_once('../model/operationmodel.php');
$jobId =$_REQUEST['jobId'];

$result = removejob($jobId);

    if ($result)
    {
        header('Location: ../views/deletejob.php');
    }
    else{

        echo "Remove job unsecessful";
    }

?>