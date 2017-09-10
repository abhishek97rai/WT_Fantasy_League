<?php
	//if((isset($_POST['submit']))){
		//die("ERROR submit isset");
	//}
	include("config.php");
	
	session_start();
	$myName = $_SESSION['current_name'];
?>

<html lang="en">
<head>
    <title>Logged In!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid bg-info">
	<h1 align="center"> SUCCESS!! </h1>
	<h3 class="text-success" align="center">Welcome, <?php echo "$myName";?></h3>
</div>
</body>
</html>