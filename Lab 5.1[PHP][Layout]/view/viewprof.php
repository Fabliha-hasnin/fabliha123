<html lang="en">
<head>
    <title>this is login file</title>
</head>
<body>
<table border = "1" width="70%" >
    <tr>
        <th colspan="2"> <bold><h1>X Company </h1></bold><pre><p> Logged in ase Bob </p> <a href="logout.php"> Logout </a></pre></th>

    </tr>
     <tr>
     <?php 
           include 'dash.php';
           ?>
        
        <td >
        <fieldset>
        <legend>Profile</legend>
   
      
      <pre> Name    :Bob  </pre>
       <hr></hr>

      <pre> Email   :bob@aiub.edu </pre>
       <hr></hr>
       
      <pre> Gender  :Male </pre>
       <hr></hr>

       <pre> Date of Birth:19/09/1998 </pre>
       <hr></hr>

       <a href="editprof.php"> Edit profile </a>
       <br>

        <img src="user.png" alt="">
        <br>
        <a href="changeprofpic.php">Change</a>
               
    </td>
    
    </tr>
    <tr align="center">
        <td colspan="2"> Copyright c 2017 </td>
    </tr>
</body>
</html>