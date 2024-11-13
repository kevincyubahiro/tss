<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post"auto_completed="off">
      <H2>Create New Account</H2>
<input type="text" name="username"placeholder="username"required><br><br>
<input type="password" name="password"placeholder="password"required><br><br>
<button name="submit">SUBMIT</button>


    </form>
 </body>
 </html>
 <?php
 include("conn.php");
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"INSERT INTO trainers VALUES('','$username','$password')");
    if($insert){
    header("location:loginn.php");
    }
    else{
        echo"Already this person exist";
    }
 }
 ?>