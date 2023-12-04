<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="../asset/registrationcheck.js"></script>
    <style>
    td { vertical-align:top;}
    .center-fieldset {
            margin: 0 auto;
            text-align: center;
    }
    #h1,#h3{color:red;}
    </style>
</head>
<body>
<form method="POST" action="../controller/logincheck.php" onsubmit="return getInfo()">
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Registration</legend>
                    <b>Name      :</b> <input type="text" name="name" id="name" ><br><br>
                    <b>Phone     :</b> <input type="text" name="phone" id="phone" ><br><br>
                    <b>Email     :</b> <input type="text" name="email" id="email" onblur="getemail()"/><div id="h3"></div><br>
                    <b>Password  :</b> <input type="password" name="password" id="password" ><br><br>
                    <b>Confirm Password  :</b> <input type="confirm" name="confirm" id="confirm"/><br>
                    <div id="h1"></div>
                    <hr>
                    <input type="submit" name="submit" value="Submit" /><br><br>
                </fieldset>
            </td>
        </tr>
    </table>
</form>
</body>
</html>