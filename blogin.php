<?php
$host="localhost";
$user="root";
$password="password";
$db="chain";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from user where uname='".$uname."'AND pswrd='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
     
        echo " You Have Entered correct Username or Password";
      
            $_SESSION['username'] = $uname; // Initializing Session
            header("location:buyopt.html"); // Redirecting To Other Page
            mysql_close($connection); // Closing Connection 
} 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>

    <div class="login-box">
      <img src="images/logo.jpg" class="avatar" alt="Avatar Image">
      <h1>Buyer Login Here</h1>
      <form method="POST" action="#">
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" name="username">
        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" name="password">
        <input type="submit" value="Log In">
        <a href="client/register.html">New Applicant?</a><br>
      </form>
    </div>
  </body>
</html>
