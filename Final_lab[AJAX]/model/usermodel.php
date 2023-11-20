<?php
require_once('db.php');

function getEmployerInfo($username) {
    $con = getConnection();
    $sql = "SELECT * FROM employer WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $employerInfo = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $employerInfo[] = $row;
    }

    return $employerInfo;
}


?>

