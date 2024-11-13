<?php
include("conn.php");
$id = $_GET['id'];
$select = mysqli_query($conn,"SELECT * FROM trainers WHERE  id='$id'");
$row = mysqli_fetch_array($select)


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="" method="post">
<input type="text" name="username"placeholder="username"value="<?php echo $row['username']?>"><br><br>
<input type="password" name="password"placeholder="password"value="<?php echo $row['password']?>"><br><br>
<button name="submit">updated</button>


    </form>
 </body>
 </html>
 <?php
 include("conn.php");
 if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $update=mysqli_query($conn,"UPDATE trainers SET `username`='$username',`password`='$password' WHERE id='$id')");
    if($update){
        echo"updated";
    }
    else{
        echo"not updated";
    }
 }
 ?>