<?php
	//if((isset($_POST['submit']))){
		//die("ERROR submit isset");
	//}
	include("config.php");
	
	session_start();
	$myName = $_SESSION['current_name'];
?>
<html>
	<head><h1 align="center"> SUCCESS!! </h1></head
	<body>
		<p>Welcome, <?php echo "$myName";?></p>
	</body>
</html>