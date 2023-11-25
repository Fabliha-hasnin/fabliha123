<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src = "../asset/regNewEmpcheck.js"></script>
    <style>  
        td { vertical-align: top; }
        .center-fieldset {
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="../controller/signupcheck.php">
        <table border="1" align="center" width="70%" height="30%">
            <tr>
                <th colspan="2" align="right"> <a href="login.php">Login</a></th>
            </tr>
            <tr>
                <td>
                    <fieldset style="width.30%;">
                        <legend>Registration</legend>
                        Employer Name: <br>
                        <input type="text" name="employerName" value="" /> <br><br>
                        Company Name:<br>
                         <input type="text" name="companyName" value="" /> <br><br>
                        Contact No: <br>
                        <input type="text" name="contactNo" value="" /> <br><br>
                        Username: <br>
                        <input type="text" name="username" value="" /> <br><br>
                        Password:<br>
                         <input type="password" name="password" value="" /> <br><br>
                        Confirm password:<br>
                         <input type="password" name="confirmPassword" value="" /> <br><br>
                        
                         <input type="submit" name="submit" value="Submit" />
                        <a href="login.php">Login</a>
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>