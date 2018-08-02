<html>
<body>
<!-- Header -->
<div style="padding: 2px; height:80px; background-color:DeepSkyBlue">
<center><p><b><font size="5">WEAPON SECTION<br />
</div>
<!-- Side Menue Window -->
<div style="height:100%;">

<!-- Content Display Window -->
<div style="width:80%; height:100%; float:left; padding:10px">
<form action="update_weapons.php" method="POST">
<p>
<label> <b>WID:</b> <input type="text" name="wid" value=<?php echo $_GET["wid"]?> readonly> </label>
</p>
<p>
<label> <b>ENTER NEW WEAPON NAME:</b> <input type="text" name="wname" value=<?php echo $_GET["wname"]?>> </label>
</p>
<p>
<input type="SUBMIT" value="UPDATE" name="update">
</p>
</form>
</div>
</div>
</body>
</html>


