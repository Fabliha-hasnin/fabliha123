<?php
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: changepass.html');
    }

?>


<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1> change successfull ! </h1>
</body>
</html>