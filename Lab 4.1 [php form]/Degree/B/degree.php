<html lang="en">
<head>
    <title>this is degree file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
        <legend> Degree </legend>
                            <input type="checkbox" name="Degree" value="SSC"/> SSC
                            <input type="checkbox" name="Degree" value="HSC"/> HSC
                            <input type="checkbox" name="Degree" value="BSC"/> BSC
                            <br>
                            <input type="submit" name="" value="submit" />
        </fieldset>
 </form>
</body>
</html>
<?php

$degree = $_REQUEST['Degree'];

    echo $degree;

?>