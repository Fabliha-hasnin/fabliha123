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
        <th colspan="2"> <bold><h1> JOB PORTAL </h1></bold><pre><p> Logged in as <?php echo $_SESSION['user']['username']?>  </p> | <a href="../controller/logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
        <b> <h3> Accounts </h3></b>
         <hr></hr>
         <ul>
          <li> <a href="./addJob.php"> Add new Job </a> </li>
          <li> <a href="./updatejob.php"> Update Job </a> </li>
          <li> <a href="./deletejob.php"> Delete Job </a> </li>
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