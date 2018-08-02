<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
mysql_select_db('armoury');
$sql="SELECT * FROM weapons";
$records=mysqli_query($con,$sql);

?>
<html>
<head>
<title></title>
</head>
<body BGCOLOR="FIVESTAR">
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>WEAPON-ID</th>
<th>WEAPON-NAME</th>
<th>SECTOR-ID</th>
<th>ORIGIN</th>
<th>TYPE</th>
<th>RANGE</th>
<tr>
<?php
while($weapons=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$weapons['wid']."</td>";
	
	echo "<td>".$weapons['wname']."</td>";
	
	echo "<td>".$weapons['sectorid']."</td>";
	
	echo "<td>".$weapons['origin']."</td>";
	echo "<td>".$weapons['type']."</td>";
	
	echo "<td>".$weapons['distance']."</td>";
	echo "</tr>";
}
?>
</table>
<a href="weapons.html"><button>BACK</button></a>
</body>
</html>