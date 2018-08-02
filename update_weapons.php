<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(isset($_POST['wid'])){
$newname=$_POST['wname'];
$usn=$_POST['wid'];
$query = "UPDATE `weapons` SET `wname`=\"$newname\" WHERE `WID`=\"$usn\"";
$result = mysqli_query($con,$query);
header('Location: weapons1.php');
}
?>