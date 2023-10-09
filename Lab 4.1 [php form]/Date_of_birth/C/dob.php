<?php

$dob = $_REQUEST['dob'];

?>
<html lang="en">
<head>
    <title>this is Date of birth file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
            <legend> date of birth </legend>
            <input type="date" name="" value="<?php {echo $dob;}?>" /> <br> 
            <hr></hr>
            <input type="submit" name="" value="submit" /> <br>
        </fieldset>
    
    </form>
</body>
</html>