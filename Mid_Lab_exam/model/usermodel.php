<?php
require_once('db.php');
function signup($id , $password , $confirmPassword, $name, $ut)
 {
    $con = getConnection();
    $sql = "INSERT INTO users (id, password, name, usertype) VALUES ('$id', '$password', '$name', '$ut')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        return true;
    } else {
        return false;
    }
}
?> 

