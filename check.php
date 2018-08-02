<?php
$con=mysqli_connect('127.0.0.1','root','','armoury');
mysql_select_db('armoury');
if(!$_POST['submit']){
echo "Please enter wid to weaponid";
header('Location: delete.html');
} 
else {
    $weaponid = $_POST['wid'];
    
	$query = "SELECT * FROM weapons WHERE wid = '$weaponid'";

	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) == 0) {
    echo "Not Found";
    echo "<script type='text/javascript'>";
    echo "alert('wid $weaponid Not Found');"; 
 echo "window.location.href ='update.php'";
    echo "</script>"; 
    }
	else {
	echo "Found<br />";
    $row=mysqli_fetch_assoc($result);
    $usn_name="wid=".$weaponid."&"."wname=".$row["wname"];
    echo $usn_name;
    header('Location: accept.php?'.$usn_name);
            }
   }
?>
