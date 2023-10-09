<?php

$blood = $_REQUEST['blood'];


?>
<html lang="en">
<head>
    <title>this is name file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
        <legend> Blood group </legend>
            <select name="">
                <option value="A+" <?php if($blood=="A+") echo "checked"?>>A+</option>  
                <option value="A-"<?php if($blood=="A-") echo "checked"?>>A-</option>        
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