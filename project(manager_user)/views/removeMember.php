<?php
    include('../model/operationmodel.php');

    $developerInfo = getDeveloperInfo();
    $memberInfo = getAllTeamMember();
?>
<html lang="en">
<head>
    <title>Document</title>
    <script src = "../event(js)/removemembercheck.js"></script>
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

        <td width="70%">
        <div>
        <center> <h2> Remove Member </h2> </center> 
        </div>
         <form action="../controller/removeMemberCheck.php" method="POST">
            <pre><p>
            <b> Username:   <select name="addMemberId" id="addMemberId">   
                            <option disabled selected>Select user</option>
                            <?php for ($i=0;$i<count($memberInfo);$i++){?>
                            <option value="<?php echo $memberInfo[$i]['addMemberId']?>"><?php echo $memberInfo[$i]['username']?></option>  
                            <?php } ?>  
                            </select>
                            <br>
            <b> Password    :</b>  <input type="password" id ="password" name="password" value="" /> <br> <br>
            <input type="reset" name="" value="cancel" /> <input type="submit" name="" value="Remove" onclick="remove()" /> 
            <p></pre>

            </form>
        
        <h4> <u> Added Members </u></h4>
           
        <input type="button" name="click" value="Show members" onclick="showMembers()"/><br><br>
        <div id="members"></div>
            </td>
    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
</body>
</html>
    </table>
</body>
</html>

