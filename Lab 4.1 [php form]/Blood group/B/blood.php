<html lang="en">
<head>
    <title>this is Blood group file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
        <legend> Blood group </legend>
            <select name="">
                <option value="A+">A+</option>  
                <option value="A-">A-</option>        
                <option value="B+">B+</option>   
                <option value="B-">B-</option>       
                <option value="AB+">AB+</option> 
                <option value="AB-">AB-</option>         
                <option value="O+">O+</option>   
                <option value="O-">O-</option>     
            </select>
            <hr></hr>
            <input type="submit" name="" value="submit" /> <br>
        </fieldset>
 </form>
</body>
</html>
<?php

$blood = $_REQUEST['blood'];

    echo $blood;

?>