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
 echo "window.location.href ='delete.html'";
    echo "</script>"; 
    }
	else {
	echo "Found<br />";
    mysqli_query($con, "DELETE FROM weapons 
    WHERE wid = '$weaponid'") or die(mysqli_error($con));
    echo "<script>";
    echo "alert('weapon Record with wid $weaponid Deleted Sucessfully');";
echo "window.location.href ='weapons1.php'";
    echo "</script>";
        }
   }
?>

