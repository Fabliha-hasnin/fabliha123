<?php
require_once('../model/operationmodel.php');

if (isset($_POST['sjob'])) {
    $job = $_POST['sjonb'];
    $jobInfo = getJobInfo($username);

    if ($jobInfo) {
        echo "Job found! Details:<br>";
        foreach ($jobInfo as $info) {
            echo "Company: " . $info['company'] . "<br>";
            echo "Position: " . $info['jobTitle'] . "<br>";
            echo "Location: " . $info['jobLocation'] . "<br>";
            echo "Salary: " . $info['salary'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Employer not found!";
    }
}
?>