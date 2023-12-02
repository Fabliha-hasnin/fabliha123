<?php
require_once('db.php');

function updateemp($name, $contact, $username, $password)
{
     $con= getConnection();
     $sql= " update employer set employerName ='$name', contactNo='$contact',username='$username', password='$password' where username = '$username'";
     $result= mysqli_query($con, $sql);
     if($result)
     {
         return true;
     }
     else{
         return false;
     }
}

function removeMember($employerId)
{
    $con = getConnection();
    $query = "delete from employer where employerId = '$employerId'";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        return true;
    }
    else{
        return false;
    }
}
function getAllTeamMember()
{
    $con = getConnection();
    $sql = "SELECT * FROM employer";
    $result = mysqli_query($con, $sql);
    $users = [];
    
    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }
    return $users;
}
