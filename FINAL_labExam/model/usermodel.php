<?php
require_once('db.php');

function registration($name, $contact, $username, $password)
 {
    $con = getConnection();
    $sql = "INSERT INTO employer (employerName, contactNo, username, password) 
    VALUES ('$name', '$contact', '$username', '$password')";
    $result = mysqli_query($con, $sql);
 
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function adlogin($username, $password)
{
    $con = getConnection();
    $sql = "select * from admininfo where username='{$username}' and password='{$password}'";
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
