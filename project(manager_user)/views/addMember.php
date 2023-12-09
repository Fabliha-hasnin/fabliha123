<?php
    include('../model/operationmodel.php');

    $developerInfo = getDeveloperInfo();
    $memberInfo = getAllTeamMember();
    //print_r($memberInfo);
?>

<html lang="en">
<head>
    <title>Document</title>
    <script src = "../event(js)/addmembercheck.js"></script>
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
          <li> <a href="./changeprofpic.php"> Change profile photo </a> </li>
          <li> <a href="./changepass.php"> Change password </a> </li>
         </ul>
     </td>
        <td width="70%">
        <div>
        <center> <h2> Add Member </h2> </center> 
        </div>
        
            <!-- <p> -->

            <b> Users: <div id='users'></div><br>
           <!-- <b> Users: <div id='users' onchange="getDeveloper(this.value)"></div><br>
           <button onclick="show()">Show</button><br><br>
           <hr> -->
           <script src="../event(js)/addmembercheck.js"></script>

           <form action="../controller/addMemberCheck.php" method="POST" onsubmit="return getmember()">           
            <b>Username:    <select name="username" id="username" onblur="return getUser()"> 
                            <option disabled selected>Select user</option>
                            <?php for ($i=0;$i<count($developerInfo);$i++){?>
                            <option value="<?php echo $developerInfo[$i]['username']?>"><?php echo $developerInfo[$i]['username']?></option>  
                            <?php } ?>  
                            </select>
                            <div id="h1"style="color:red" ></div>
                            <br>
            <b> Role:       
                <input type="radio" name="Role" id="QA" value="Quality Assurance" />Quality Assurance
                <input type="radio" name="Role" id="SM" value="Sofware Manager" /> Sofware Manager
                <input type="radio" name="Role" id="SA" value="Software Aechitect" /> Software Aechitect
                <br><br>
                <div id="h2"style="color:red" ></div>
                            <br><br>
              
            
                        
            <input type="reset" name="reset" value="cancel" /> <input type="submit" name="" value="submit" /> 
            <!-- <p> -->
            </form>
            <hr>
            
            <h4> <u> All current Team Member</u></h4>
            
            <?php for ($i=0;$i<count($memberInfo);$i++){?>

                Username: <?php echo $memberInfo[$i]['username'];?> <br>
                Role    : <?php echo $memberInfo[$i]['role'];?>
                <hr>
            <?php } ?>
        </td>
 
    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
    </table>
</body>
</html>