<?php
require_once('db.php');
function signup($id , $password ,$usertype, $confirmPassword, $name, $ut)
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

function adminlogin($username, $password)
{
    $con = getConnection();
    $sql = "select * from users where id='{$id}' and password='{$password}'";
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

function getAllTeamMember()
{
    $con = getConnection();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    $users = [];
    
    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }
    return $users;
}
?> 

