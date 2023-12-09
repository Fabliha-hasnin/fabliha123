<?php
require_once('../model/operationmodel.php');

if (isset($_POST['pname'])) {
    $project_name = $_POST['pname'];
    $projectTaskInfo = searchProject($project_name);

    if ($projectTaskInfo) {
        echo "Project found! Details:<br>";
        foreach ($projectTaskInfo as $info) {
            echo "Project Name: " . $info['project_name'] . "<br>";
            echo "Project Type: " . $info['project_type'] . "<br>";
            echo "Priority Task: " . $info['priority_task'] . "<br>";
            echo "Deadline: " . $info['deadline'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Project not found!";
    }
} else {
    $projectInfo = getAllTaskInfo();

    for ($i = 0; $i < count($projectInfo); $i++) {
        echo "Project Name: " . $projectInfo[$i]['project_name'] . "<br>";
        echo "Project Type: " . $projectInfo[$i]['project_type'] . "<br>";
        echo "Priority Task: " . $projectInfo[$i]['priority_task'] . "<br>";
        echo "Deadline: " . $projectInfo[$i]['deadline'] . "<br> <hr>";
    }
}
?>