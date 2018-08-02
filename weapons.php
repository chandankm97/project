<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
$wid=$_POST['wid'];
$wname=$_POST['wname'];
$sectorid=$_POST['sectorid'];
$origin=$_POST['origin'];
$type=$_POST['type'];
$range=$_POST['distance'];
$sql="INSERT INTO weapons(wid,wname,sectorid,origin,type,distance) VALUES('$wid','$wname','$sectorid','$origin','$type','$range')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=weapons.html");
?>