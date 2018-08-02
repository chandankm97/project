<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
if(!$con)
{
	echo "not connected to server";
}
mysql_select_db('armoury');
$sql="SELECT * FROM sector";
$records=mysqli_query($con,$sql);

?>
<html>
<head>
<title></title>
</head>
<body BGCOLOR="FIVESTAR">
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>SECTOR-NAME</th>
<th>SECTOR-ID</th>
<tr>
<?php
while($weapons=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	
	echo "<td>".$weapons['secname']."</td>";
	
	echo "<td>".$weapons['secid']."</td>";
	echo "</tr>";
}
?>
</table>
<a href="sector-db.html"><button>BACK</button></a>
</body>
</html>