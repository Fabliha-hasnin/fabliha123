<html lang="en">
<head>
    <title>This is email file</title>
</head>
<body>
    <form method="post" action="" enctype="">
        <fieldset style="width:20%;">
            <legend> Email </legend>
            <input type="email" name="email" value="" /> <input type = "button" value="i" title="abc@gmail.com"<br>
            <hr></hr>
            <input type="submit" name="" value="submit" /><br>
            <?php

            $email = $_REQUEST['email'];

             echo $email;

            ?>
          
        </fieldset>
    
    </form>
</body>
</html>