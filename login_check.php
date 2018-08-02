<?php
session_start();

$dbhost = '127.0.0.1';     
$dbuser = 'root';   
$dbpass = '';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$connection ) {  
die('Could not connect to Server' 
.mysqli_error($connection));  
}

$dbhandle=mysqli_select_db($connection, 'armoury');
if(!$dbhandle) {  
die('Database Selection Problem' 
.mysqli_error($connection));  
}

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$query = "SELECT * FROM login 
WHERE username='$myusername' AND password='$mypassword'";
$result=mysqli_query($connection,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($connection));
}
 
$count= mysqli_num_rows($result);
if($count==1)
{   
$_SESSION['username']=$_POST['username'];
header("location:login_sucess.php");
}
else { 
   session_destroy();
   ?>
   <script>alert('Your Login Name or Password is invalid');
   window.location.href ="login.php?fail";
   </script>
   <?php
   }
?>