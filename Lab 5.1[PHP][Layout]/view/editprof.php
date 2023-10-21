<html lang="en">
<head>
    <title>this is login file</title>
</head>
<body>
<table border = "1" width="40%" >
    <tr>
        <th colspan="2"> <bold><h1>X Company </h1></bold><pre><p> Logged in ase Bob </p> <a href="logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <?php 
           include 'dash.php';
           ?>
        
        
        <td >
        <fieldset style="width.30%">
        <legend>Edit Profile</legend>
    
       
       Name: <input type="text" name="" value="" /> <br>
       <hr></hr>

       Email: <input type="email" name="" value="" /> <input type = "button" value="i" title="abc@gmail.com"<br>
       <hr></hr>
       Username: <input type="text" name="" value="" /> <br>
       <hr></hr>

       Password: <input type="password" name="" value="" /> <br>
       <hr></hr>
       
       Confirm password: <input type="password" name="" value="" /> <br>
       <hr></hr>

       <fieldset>
       <legend> Gender </legend>
           <input type="radio" name="gender" value="" /> Male
           <input type="radio" name="gender" value="" /> Female
           <input type="radio" name="gender" value="" /> Other <br>
       
   </fieldset>
   <hr></hr>

   <fieldset>
       <legend> Date of Birth </legend>
       <input type="date" name="" value="" /> <br>

       <hr></hr>
   </fieldset>
   <br>

    <input type="button" name="" value="submit" />
    <input type="button" name="" value="reset" />

    </fieldset>  
    </form>
    </td>
    

    </tr>


    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>