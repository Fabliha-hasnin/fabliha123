<html lang="en">
<head>
    <title>this is login file</title>
</head>
<body>
<table border = "1" width="40%" >
    <tr>
        <th colspan="2"> <bold><h1>X Company </h1></bold><pre><p> Logged in ase Bob </p> <a href="logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <?php 
           include 'dash.php';
           ?>
        <td>
           <fieldset>
            <legend> Profile Picture </legend>
            <img src = "user.png"/><br>
            <input type="image" name="" value="Choose file" /> 
            <hr></hr>
            <input type="submit" name="" value="submit" /> 
           </fildeset>
</td>
    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>