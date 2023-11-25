<?php
    require_once('../model/usermodel.php');
    $name = $_REQUEST['employerName'];
    $company = $_REQUEST['companyName'];
    $contact = $_REQUEST['contactNo'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];

    $userCheck = 'abcdefghijkhmlopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $passwordCheck = '@#$&!0123456789abcdefghijkhmlopqrstuvwxyz';
 
    if ($name == '' || $company == '' || $contact == '' || $username == '' || $password == '' || $confirmPassword == '' ) {
        echo "Null value! Fill all the fields";
    } 

    // username validation
    else if (strpbrk($username, $userCheck) === false) {
        echo "Username should contain only alphabetic characters with mix of upper and lower case";
    }
    else if (strlen($username) < 4) {
        echo "Username should be at least 4 characters";
        }

    // password validation 
        else if ($password != $confirmPassword) {
            echo "Confirm password does not match";

        }elseif (strlen($password)< 4){
            echo "Password should be atleast 4 character"; 
        
        } else if (strpbrk($password, $passwordCheck) === false) {
            echo "Password should have alphabets special characters and numbers";
        }

    //name validation
         else if (strpos($name, ' ') === false) {
            echo "Name should contain two words separated by a space";
            }
            
            else {
            $status = signup($name, $company, $contact, $username, $password);
            if ($status) {    
                header('location: ../views/login.php');
            } else {
                echo "Username already taken! Try another one"; 
            }
        }

?>