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

function getJobInfo($job) {
    $con = getConnection();
    $sql = "SELECT * FROM jobs WHERE comapany = '$company'";
    $result = mysqli_query($con, $sql);
    $employerInfo = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $employerInfo[] = $row;
    }

    return $employerInfo;
}

function updateemp($name, $company, $contact, $username, $password)
{
     $con= getConnection();
     $sql= " update employer set employerName ='$name', companyName='$company', contactNo='$contact',username='$username', password='$password' where username = '$username'";
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

function getAlljobs()
{
    $con = getConnection();
    $sql = "SELECT * FROM jobs";
    $result = mysqli_query($con, $sql);
    $jobs = [];
    
    while($job = mysqli_fetch_assoc($result)){
        array_push($jobs, $job);
    }
    return $jobs;
}

function removeJob($jobId)
{
    $con = getConnection();
    $query = "delete from jobs where jobId = '$jobId'";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        return true;
    }
    else{
        return false;
    }
}

?>