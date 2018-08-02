<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
$sid=$_POST['sid'];
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$sectorid=$_POST['sectorid'];
$weaponid=$_POST['weaponid'];
$sql="INSERT INTO soldiers(sid,sname,dob,gender,state,sectorid,weaponid) VALUES('$sid','$sname','$dob','$gender','$state','$sectorid','$weaponid')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=soldiers.html");
?>