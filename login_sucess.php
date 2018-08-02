<?php
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) 
{
header('Location: login.php');
}
?>
<html>
<head>
<title>Secured Page</title>
</head>
<body bgcolor="fivestar"><center>
<p>THIS IS A SECURED PAGE WITH SESSION: 
<b><?php echo $_SESSION['username']; ?></b>
<br>
<br>
<br><h3>*YOU CAN RETRIVE OR PUT YOUR RESTRICTED INFORMATION HERE*.</h3></p>
<a href="welcome.html"><button>ACCESS GRANTED</button></a>
<br>
<br>
<br>
<p><a href="logout.php">Logout</a></p></center>
</body>
</html>