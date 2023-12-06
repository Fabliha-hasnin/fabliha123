<html lang="en">
<head>
    <title>View User</title>
    <script src="../asset/view_user.js"></script>
</head>
<body>
    <center>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr><td colspan="4" align="CENTER">Users</td></tr>
            <tr>
                <td colspan="4">
                    <div id="head"></div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <a href="admin_home.php">Go Home</a>
                </td>
            </tr>
        </table>            
    </center>
    <script>
        window.onload = function () {
            showusers();
        };
    </script>
</body>
</html>
