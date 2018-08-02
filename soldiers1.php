<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
mysql_select_db('armoury');
$sql="SELECT * FROM soldiers";
$records=mysqli_query($con,$sql);

?>
<html>
<head>
<title></title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>SID</th>
<th>SNAME</th>
<th>DATE-OF-BIRTH</th>
<th>GENDER</th>
<th>RANK</th>
<th>SECTOR-ID</th>
<th>WEAPON-ID</th>
<tr>
<?php
while($soldiers=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$soldiers['sid']."</td>";
	
	echo "<td>".$soldiers['sname']."</td>";
	
	echo "<td>".$soldiers['dob']."</td>";
	
	echo "<td>".$soldiers['gender']."</td>";
	echo "<td>".$soldiers['rank']."</td>";
	
	echo "<td>".$soldiers['sectorid']."</td>";
	
	echo "<td>".$soldiers['weaponid']."</td>";
	
	echo "</tr>";
}
?>
</table>
</body>
</html>