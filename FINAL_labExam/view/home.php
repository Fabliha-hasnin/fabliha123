<?php
require_once('../controller/sessioncheck.php'); 
if (isset($_SESSION['flag']))
{
?>
<html lang="en">
<head>
    <title> Menu </title>
    <style>  
    td { vertical-align:top;}
   </style>
</head>
<body>
<table border = "1" align="center" width="70%" height="40%">
    <tr>
        <th colspan="2"> <bold><h1> ONLINE SHOP MANAGEMENT </h1></bold><pre><p> Logged in as <?php echo $_SESSION['user']['username']?>  </p> | <a href="../controller/logout.php"> Logout </a></pre></th>

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

        <th width="40%">  </th>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2023 </td>
    </tr>
</body>
</html>
<?php
  }
    else{
        header('location: ./login.php');
    }
?>