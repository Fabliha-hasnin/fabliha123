<?php
require_once('../controller/sessioncheck.php'); 
include('../model/operationmodel.php');

$memberInfo = getAllTeamMember();

$userSession = $_SESSION['user']['username'];
?>
<html lang="en">
<head>
    <title> Menu </title>
    <script src = "../asset/serachemployer.js" ></script>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
<table border = "1" align="center" width="70%" height="40%">
    <tr>
        <th colspan="2"> <bold><h1> ONLINE SHOP MANAGEMENT </h1></bold><pre><p> Logged in as <?php echo $userSession; ?>  </p> | <a href="../controller/logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
        <b> <h3> Accounts </h3></b>
         <hr></hr>
         <ul>
         <li> <a href="./search.php"> Search </a> </li>
          <li> <a href="./employeeReg.php"> Add Employer </a> </li>
          <li> <a href="./updateEmployee.php"> Update Employer </a> </li>
          <li> <a href="./deleteEmployee.php"> Delete Employer </a> </li>
         </ul>
     </td> 

        
        <th width="40%"> 
        <table border="1">
        <td>
     <b>Username:</b> <input type="text" name="username" id="username" value="" />
     <input type="button" name="search" value="Search" onclick="ajax()" />
        </td>
    </table> 
        <form method="POST" action="../controller/deleteempcheck.php">
        <b><select name="employerId" id="">   
                            <option>Select user</option>
                            <?php for ($i=0;$i<count($memberInfo);$i++){?>
                            <option value="<?php echo $memberInfo[$i]['employerId']?>"><?php echo $memberInfo[$i]['username']?></option>  
                            <?php } ?>  
                            </select>
                         <input type="submit" name="submit" value="delete"/>

</form>
                         </th>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
</table>
<h5 id="h1"></h5>
</body>
</html>