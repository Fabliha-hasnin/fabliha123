<html lang="en">
<head>
    <title>this is login file</title>
</head>
<body>
<table border = "1" width="50%" >
    <tr>
        <th colspan="2"> <bold><h1>X Company </h1></bold><pre><p> Logged in ase Bob </p> <a href="logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     
     <?php 
           include 'dash.php';
           ?>
        
            <td> 
                <form>
                <fieldset>
            <legend> Change password </legend>
            Current password: <input type="text" name="name" value="" /> <br> 
           <p style="color:green;"> New Password:<input type="text" name="password" value="" /> </p> 
           <p style="color:red;"> Retype New Password: <input type="text" name="password" value="" /> </p> 
            <hr></hr>
            <input type="submit" name="" value="submit" /> 
        </fieldset> 
</form>
    </td>

    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>