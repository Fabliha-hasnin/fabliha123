<?php
    include('../model/operationmodel.php');

    $developerInfo = getDeveloperInfo();
    $memberInfo = getAllTeamMember();
?>

<html lang="en">
<head>
    <title>Document</title>
    <script src="../event(js)/removemembercheck.js"></script>
    <style>  
        td { vertical-align: top; }
    </style>
</head>
<body onload="showAddedMembers()">
    <table border="1" align="center" width="70%" height="100%">
        <tr>
            <th colspan="2">
                <bold><h1> Collaborative task management </h1></bold>
                <a href="../controller/logout.php"> Logout </a>
            </th>
        </tr>
        <tr>
            <td width="30%">
            Accounts
         <hr></hr>
         <ul>
          <li> <a href="./managerDashboard.php"> Dasboard </a> </li>
          <li> <a href="./setTask.php"> Set task </a> </li>
          <li> <a href="./viewprojects.php"> View projects </a> </li>
          <!-- <li> <a href="./currentWork.php"> Current work </a> </li> -->
          <li> <a href="./manageTeam.php"> Manage team </a> </li>
          <div>
            <ul>
                <li> <a href="./addMember.php"> Add Member </a> </li>
                <li> <a href="./removeMember.php"> Remove Member </a> </li>
            </ul>
            </div>
          <li> <a href="./viewprof.php"> View profile </a> </li>
          <li> <a href="./editprof.php"> Edit profile </a> </li>
          <!-- <li> <a href="./changeprofpic.php"> Change profile photo </a> </li> -->
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>
            </td>
            <td width="70%">
            <div>
                    <center> <h2> Remove Member </h2> </center> 
                    <b>Username:</b> <input type="text" name="username" id="username" value="" />
                    <input type="button" name="search" value="Search" onclick="searchToRemove()" />
                    <hr>
                    <div id="h1"></div>
                    <hr>
                <center>
                    <form action="../controller/removeMemberCheck.php" onsubmit="return remove()" method="POST">
                    </form>
                </center>
        
                <h4> <u> Added Members </u></h4>
                <center>
                <!-- <input type="button" name="click" value="Show members" onclick="showMembers()" /><br><br>
                <div id="members"></div> -->
                <div id="membersToShow"></div>
                </center>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2"> Copyright c 2023 </td>
        </tr>
    </table>
</body>
</html>
