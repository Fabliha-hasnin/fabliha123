<?php

$degree = $_REQUEST['Degree'];

    echo $degree;

?>
<html lang="en">
<head>
    <title>this is degree file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
        <legend> Degree </legend>
                            <input type="checkbox" name="Degree" value="SSC"<?php if($degree=="SSC") echo "checked"?>/> SSC
                            <input type="checkbox" name="Degree" value="HSC" <?php if($degree=="HSC") echo "checked"?>/> HSC 
                            <input type="checkbox" name="Degree" value="BSC" <?php if($degree=="BSC") echo "checked"?>/> BSC
                            <br>
                            <input type="submit" name="" value="submit" />
        </fieldset>
    
    </form>
</body>
</html>