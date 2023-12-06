<html lang="en">
<head>
	<title>registration</title>
	<script src="../asset/regcheck.js"></script>
</head>
<body>
	<center>
	<form action="../controllers/registrationCheck.php" method="post" onsubmit="return regcheck()" enctype="">
<center>
<form method="post" action="../controller/registrationcheck.php" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id" id="id"><br/>
					Password<br/><input type="text" name="password" id="password" onblur="checkId()"> <p id="text"></p><br/>
					Confirm Password<br/><input type="password" name="currentpass" id="currentpass"><br/>
					Name<br/><input type="text"name="name" id="name"><br/>
					User Type<hr/>
					<input type="radio" name="userType" id="user" value="User"/>User
					<input type="radio" name="userType" id="admin" value="Admin"/>Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
		