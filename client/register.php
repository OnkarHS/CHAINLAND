<?php
$host="localhost";
$user="root";
$password="password";
$db="chain";

$con=mysqli_connect($host,$user,$password,$db);
    		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$uname=$_POST['uname'];
		$pswrd=$_POST['pswrd'];
		$mobn=$_POST['mobn'];
		$sql="insert into user (fname,lname,mobn,uname,pswrd) values('$fname','$lname','$mobn','$uname','$pswrd')";
    
    if(mysqli_query($con,$sql))
    {
    echo "Data submitted";
     }

?>
<html>
<body><a href="../clogin.php">LOGIN</a>
</body>
</html>
   		

