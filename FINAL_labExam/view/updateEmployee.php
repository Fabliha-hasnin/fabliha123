<?php
require_once('../controller/sessioncheck.php'); 

$userSession = $_SESSION['user']['username'];
?>
<html lang="en">
<head>
    <title> Menu </title>
    <script src = "../asset/searchemployer.js" ></script>
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
        <form method="POST" action="../controller/updateempcheck.php">
        <legend>Employee Registration</legend><br>
                        Employer Name: 
                        <input type="text" name="employerName" id="employerName" value="" /> <br><br>
                        Contact No: 
                        <input type="text" name="contactNo" id="contactNo" value="" /> <br><br>
                        Username: 
                        <input type="text" name="username" id="username" value="" /> <br><br>
                        Password:
                         <input type="password" name="password" id="password" value="" /> <br><br>
                        Confirm password:
                         <input type="password" name="confirmPassword" id="confirmPassword" value="" /> <br><br>
                        
                         <input type="submit" name="submit" value="Submit"/>
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