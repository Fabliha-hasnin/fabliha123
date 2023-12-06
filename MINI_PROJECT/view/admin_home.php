<?php
      require_once('../controller/sessioncheck.php'); 
	  require_once('../model/usermodel.php');
	  
    $user = getAllTeamMember();
    $userSession = $_SESSION['user']['username'];
?>
<center>
	<h1>Welcome  <?php echo $userSession;?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="logout.php">Logout</a>
</center>