<?php
require_once('db.php');

function login($email, $password)
{
    $con = getConnection();
    $sql = "select * from persons where email='{$email}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $cnt= mysqli_num_rows($result);

    if($result){
        $user = mysqli_fetch_assoc($result);
        if ($user)
        {
            return true;
        }         
    }
    else{
        return false;
    }
}

function checkemail($email)
{
    $con = getConnection();
    $sql = "SELECT * FROM persons where email='{$email}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}

?>