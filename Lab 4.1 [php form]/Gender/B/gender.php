<html lang="en">
<head>
    <title>this is gender file</title>
</head>
<body>
    <form method="post" action="" enctype="">
    <fieldset style="width:20%;">
                <legend> Gender </legend>
                    <input type="radio" name="gender" value="Gender:male" /> Male
                    <input type="radio" name="gender" value="Gender:female" /> Female
                    <input type="radio" name="gender" value="Gender:others" /> Other <br>
                    <hr></hr>
                <input type="submit" name="" value="submit" />
        </fieldset>
 </form>
</body>
</html>

<?php

$gender = $_REQUEST['gender'];

  

   echo $gender;
  

?>