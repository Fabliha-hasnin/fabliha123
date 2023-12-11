<?php
//include('../controller/updateDeadlinecheck.php');
require_once('../controller/sessioncheck.php');
require_once('../model/operationmodel.php');
//print_r(getAllTaskInfo());
$userSession = $_SESSION['user']['username'];
$projectTaskInfo = getTaskPrioritiesByUsername($userSession);

?>
<html lang="en">
<head>
    <title>Collaborative task management</title>
    <script src="../event(js)/updateDeadline.js"></script>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
<table border = "1" align="center" width="70%" height="100%">
    <tr> <th colspan="2"> <bold><h1> Collaborative task management </h1></bold> <a href="../controller/logout.php"> Logout </a></th></tr>
     <tr>
     <td width="30%">
         Accounts
         <hr></hr>
         <ul>
          <li> <a href="./managerDashboard.php"> Dasboard </a> </li>
          <li> <a href="./setTask.php"> Set task </a> </li>
          <div>
            <ul>
                <li> <a href="./setTaskPriority.php"> Set task priority </a> </li>
                <li> <a href="./updateTaskDeadline.php"> Update task deadline </a> </li>
            </ul>
            </div>
          <li> <a href="./viewprojects.php"> View projects </a> </li>
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>

        <td width="70%">
           
        <form action="../controller/updateDeadlinecheck.php" method="POST" onsubmit="return updateDeadline()" enctype="">
    <div>
        <center> <h2> Update Task Deadline </h2> </center> 
    </div>

   <h3> All current tasks : </h3>

   <table border="1">
    <tr>
        <th>Project Name</th>
        <th>Project Type</th>
        <th>Priority Task</th>
        <th>Deadline</th>
    </tr>

    <?php
    for ($i = 0; $i < count($projectTaskInfo); $i++) {
    ?>
        <tr>
            <td><?php echo $projectTaskInfo[$i]['project_name']; ?></td>
            <td><?php echo $projectTaskInfo[$i]['project_type']; ?></td>
            <td><?php echo $projectTaskInfo[$i]['priority_task']; ?></td>
            <td><?php echo $projectTaskInfo[$i]['deadline']; ?></td>
            </tr>
    <?php
    }
    ?>
</table>
                        
                        <select name="project_name" id="project_name">
                            <option value="">Select Project Name</option>
                            <?php for ($i = 0; $i < count($projectTaskInfo); $i++) { ?>
                                <option value="<?php echo $projectTaskInfo[$i]['project_name']; ?>"><?php echo $projectTaskInfo[$i]['project_name']; ?></option>
                            <?php } ?>
                        </select>

                        <b>Set Deadline:</b> <input type="date" name="deadline" id="deadline" value="" /><p><span id="h1" style="color:red"><span></p><br><br>
                        <input type="reset" name="" value="Reset" /> 
                        <input type="submit" name="submit" value="Update" />

                        </form>   
           </td>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
    </table>
</body>
</html>
  

