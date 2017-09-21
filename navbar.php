

<html lang="en">
<head>
    <title>Bootstrap Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Fantasy League</a>
		</div>
		<ul class="nav navbar-nav">
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/navbar.php') echo 'class="active"'?>><a href="index.php">Home</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/dashboard.php') echo 'class="active"'?>><a href="dashboard.php">Dashboard</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/my_team.php') echo 'class="active"'?>><a href="my_team.php">My Team</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/scores.php') echo 'class="active"'?>><a href="scores.php">Scores</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/points.php') echo 'class="active"'?>><a href="points.php">Point Details</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
	  </div>
	</nav>

</body>
</html>