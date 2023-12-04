<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <script src="../asset/logincheck.js"></script>
    <style>
    td { vertical-align:top;}
    .center-fieldset {
            margin: 0 auto;
            text-align: center;
    }
    </style>
</head>
<body>
<form method="POST" action="../controller/logincheck.php">
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Login</legend>
                    <b>Email     :</b>     <input type="text" name="email" id="email"/><br><br>
                    <b>Password  :</b>  <input type="password" name="password" id="password" /><br>
                    <hr>
                    <input type="submit" name="submit" value="Submit"/><br><br>
                </fieldset>
            </td>
        </tr>
    </table>
</form>
</body>
</html>