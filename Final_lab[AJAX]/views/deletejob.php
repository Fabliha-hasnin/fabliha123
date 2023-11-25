<?php
require_once('../controller/sessioncheck.php'); 
include('../model/operationmodel.php');

$jobInfo = getAlljobs();

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
        <th colspan="2"> <bold><h1> JOB PORTAL </h1></bold><pre><p> Logged in as <?php echo $userSession; ?>  </p> | <a href="../controller/logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <td width="30%">
        <b> <h3> Accounts </h3></b>
         <hr></hr>
         <ul>
          <li> <a href="./addjon.php"> Add Job </a> </li>
          <li> <a href="./updatejob.php"> Update Job </a> </li>
          <li> <a href="./deletejob.php"> Delete Job </a> </li>
         </ul>
     </td> 

        
        <th width="40%"> 
        <table border="1">
        <td>
     <b>Company:</b> <input type="text" name="company" id="company" value="" />
     <input type="button" name="search1" value="Search" onclick="searchjob()" />
        </td>
    </table> 
        <form method="POST" action="../controller/deleteempcheck.php">
        <b><select name="employerId" id="">   
                            <option>Select job</option>
                            <?php for ($i=0;$i<count($jobInfo);$i++){?>
                            <option value="<?php echo $jobInfo[$i]['jobId']?>"><?php echo $jobInfo[$i]['company']?></option>  
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