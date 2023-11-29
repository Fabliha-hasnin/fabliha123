<?php 
require_once('../model/userModel.php');

$std = $_POST['student'];
$student = json_decode($std, true); 

$show = getStudent();
echo json_encode($show);
?>
