<html>
<body bgcolor="fivestar">
<form action="login_check.php" method = "POST"><center>
<h2>*ACCESS TO INDIAN ARMOURY DATABASE*</H2>
<BR>
<BR>
<BR>
Username: <input type="text" name="username" placeholder="Username"/><br/><br/>
Password: <input type="password" name="password" placeholder="Password"/><br/><br/>
<input type="submit" value="Login">
</form>

<?php
if(isset($_GET['fail']))
{
?>
<label>You Entered Invalid Username or Password, Re-try !</label>
<?php
}
?>
</body>
</html>