 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post" auto_completed="off">
        <H2>login form</H2>
<input type="text" name="username"placeholder="username"required><br><br>
<input type="password" name="password"placeholder="password"required><br><br>
<button name="submit">login</button><br><br><br>
<a href="create.php">Create Account</a>


    </form>
 </body>
 </html>
 <?php
 session_start();
 include("conn.php");
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login=mysqli_query($conn,"SELECT * FROM trainers WHERE username='$username'AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
        $_SESSION=$_POST['username'];
        $_SESSION=$_POST['password'];
        header("location:home.php");
    }  
    else{
        echo"wrong credintail";
    }
 }
 ?>