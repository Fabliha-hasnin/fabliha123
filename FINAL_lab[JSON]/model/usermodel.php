<?php
require_once('db.php');

function getStudent()
{
    $con = getConnection();
    $sql = "SELECT * FROM student";
    $result = mysqli_query($con, $sql);
    $users = [];

    while ($user = mysqli_fetch_assoc($result)) {
        array_push($users, $user);
    }

    return $users;
}
?>
