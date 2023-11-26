<?php
include('../model/operationmodel.php');

$memberInfo = getAllTeamMember();

for ($i = 0; $i < count($memberInfo); $i++) {
    echo "Username: " . $memberInfo[$i]['username'] . "<br>";
    echo "Role    : " . $memberInfo[$i]['role'] . "<br>";
    echo "<hr>";
}
?>
