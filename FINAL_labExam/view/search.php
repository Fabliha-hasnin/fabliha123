<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <script src="../asset/serachemployer.js"></script>
    <style>  
        td { vertical-align: top; }
        .center-fieldset {
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <table border="1" align="center" width="70%" height="30%">
        <tr>
            <td width="30%">
                <fieldset class="center-fieldset" style="width:50%;">
                    <legend>Search Employer</legend>
                    <b>Username:</b> <input type="text" name="username" id="username" value="" /><br><br>
                    <hr>
                    <input type="button" name="search" value="Search" onclick="ajax()" />
                    <a href="./adminhome.php"> Back </a>
            </td>
        </tr>
    </table>
    <h5 id="h1"></h5>
</body>
</html>