<?php

$Gender = $_REQUEST['gender'];

?>
<html lang="en">
<head>
    <title>this is name file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
        <legend> Gender </legend>
                    <input type="radio" name="gender" value="male" <?php {echo $Gender==male;}?> /> Male
                    <input type="radio" name="gender" value="female" <?php{echo $Gender==female;}?> /> Female
                    <input type="radio" name="gender" value="others" <?php{echo $Gender==others;}?> /> Other <br>
                    <hr></hr>
                <input type="submit" name="" value="submit" />
        </fieldset>
    
    </form>
</body>
</html>