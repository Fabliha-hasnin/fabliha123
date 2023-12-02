<?php
require_once('../model/operationmodel.php');

if (isset($_POST['uname'])) {
    $username = $_POST['uname'];
    $employerInfo = getEmployerInfo($username);

    if ($employerInfo) {
        echo "Employer found! Details:<br>";
        foreach ($employerInfo as $info) {
            echo "Username: " . $info['username'] . "<br>";
            echo "Full name: " . $info['employerName'] . "<br>";
            echo "Contact: " . $info['contactNo'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Employer not found!";
    }
}
?>