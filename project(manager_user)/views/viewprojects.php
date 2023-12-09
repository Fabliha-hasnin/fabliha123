<?php
require_once('../model/operationmodel.php');
//print_r(getAllTaskInfo());
//$projectTaskInfo = getAllTaskInfo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Collaborative Task Management</title>
    <script src="../event(js)/viewproject.js"></script>
    <style>
        td { vertical-align: top; }
    </style>
</head>
<body>
    <!-- <form method="POST" action="../controller/viewproject.php" onsubmit="search(); return false;"> -->
        <table border="1" align="center" width="70%" height="100%">
        <tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>
            <tr>
                <td width="30%">
                    <p>Accounts</p>
                    <hr>
                    <ul>
                        <li><a href="./managerDashboard.php">Dashboard</a></li>
                        <li><a href="./setTask.php">Set Task</a>
                            <ul>
                                <li><a href="./setTaskPriority.php">Set Task Priority</a></li>
                                <li><a href="./updateTaskDeadline.php">Update Task Deadline</a></li>
                            </ul>
                        </li>
                        <li><a href="./viewprojects.php">View Projects</a></li>
                        <!-- <li><a href="./currentWork.php">Current Work</a></li> -->
                        <li><a href="./manageTeam.php">Manage Team</a></li>
                        <li><a href="./viewprof.php">View Profile</a></li>
                        <li><a href="./editprof.php">Edit Profile</a></li>
                        <!-- <li><a href="./changeprofpic.php">Change Profile Photo</a></li> -->
                        <li><a href="./changepass.php">Change Password</a></li>
                    </ul>
                </td>
                <td width="70%">

                    <input type="text" name="project_name" id="project_name" placeholder="write project name here" value="" /> <input type="button" name="search" value="Search" onclick="search()" /><br>
                    Search for: <div id="showproject" onkeyup="showHint(this.value)"></div> <p><span id="txthint"></span></p>
                    
                    <h3 >All current tasks:</h3>
                    <div id="projects"> </div>
                    <script src="../event(js)/viewproject.js"></script>
                     
                </td>
            </tr>
            <tr align="center">
                <td colspan="2">Copyright c 2023</td>
            </tr>
        </table>
    <!-- </form> -->
</body>
</html>
