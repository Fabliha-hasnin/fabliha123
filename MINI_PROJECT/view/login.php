<html lang="en">
<head>
	<title>Login</title>
	<script src="../asset/logincheck.js"></script>
</head>
<body>
<center>
<form action="../controller/loginCheck.php" method="post"onsubmit="return logincheck()" enctype="">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text"><br/>                               
					Password<br/>
					<input type="password">
					<br /><hr/>
					<div id="h1"> <div>
					<input type="button" value="Login">
					<a href="registration.html">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
</body>
</html>