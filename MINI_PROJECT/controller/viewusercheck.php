<?php 
require_once('../model/usermodel.php');

$user = $_POST['user'];
$user = json_decode($user, true); 

$show = getAllTeamMember(); 
echo json_encode($show);
?>
