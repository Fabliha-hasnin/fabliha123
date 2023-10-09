<html lang="en">
<head>
    <title>this is name file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
            <legend> name </legend>
            <input type="text" name="name" value="" /> <br> 
            <hr></hr>
            <input type="submit" name="" value="submit" /> <br>
        </fieldset>
 </form>
 <?php

$name = $_REQUEST['name'];

    echo $name;

?>
</body>
</html>