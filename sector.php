<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
$secname=$_POST['secname'];
$secid=$_POST['secid'];

$sql="INSERT INTO sector(secname,secid) VALUES('$secname','$secid')";
if(!mysqli_query($con,$sql))
{
	echo "not inserted";
}
else
{
echo "inserted";
}
header("refresh:3; url=sector-db.html");
?>