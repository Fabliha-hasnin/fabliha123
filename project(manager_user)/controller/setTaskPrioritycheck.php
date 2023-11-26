<?php
session_start();
require_once('../model/operationmodel.php');

if (isset($_POST['insert_project'])) {
    $priorityTask = $_POST['priority_task'];
    $deadline = $_POST['deadline'];

    $alph = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    if ($priorityTask == '' || $deadline == '') {
        echo "Null value! Fill all the fields";
    } else if (strpbrk($priorityTask, $alph) === false) {
        echo "Task priority should contain only alphabetic characters with a mix of upper and lower case";
    } else {
        $projectName = $_POST['project_name'];
        $projectType = $_POST['project_type'];

        $inserted = insertTaskPriority($projectName, $projectType, $priorityTask, $deadline);

        if ($inserted) {
            echo "Task priority and deadline inserted successfully";
        } else {
            echo "Error: Failed to insert task priority";
        }
    }
}
?>


