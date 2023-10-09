<html lang="en">
<head>
    <title>This is Date of birth file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
            <legend> Date of birth </legend>
            <input type="date" name="dob" value="" /> <br>
            <hr></hr>
            <input type="submit" name="" value="submit" /><br>
          
        </fieldset>

    </form>

</body>
</html>
<?php

$dob = $_REQUEST['dob'];

 echo $dob;

?>