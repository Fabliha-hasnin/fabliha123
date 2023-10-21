<?php 
    session_start();
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmpass = $_REQUEST['confirmpass'];
    $gender = $_REQUEST['gender'];
    $dateofbirth = $_REQUEST['datofbirth'];
   
    if($username == "" || $password == "" || $email == "" || $username == "" || $password == "" || $confirmpass == ""|| $$gender == "" || $dateofbirth == ""){
        echo "null username or password or email!";
    }else{
        $user = ['name'=>$name, 'email'=>$email, 'username'=> $username, 'password'=> $password, 'confirmpass'=>$confirmpass, 'gender'=>$gender, 'dateofbirth'=>$dateofbirth];
        $_SESSION['user'] = $user;
        header('location: ../view/publichome.php');
    }
?>