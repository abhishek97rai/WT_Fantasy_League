<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

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
		  <a class="navbar-brand" href="<?php if(!isset($_SESSION)){ echo "create_team.php"; }?>"><?php if(isset($_SESSION['current_username'])){ echo($_SESSION['current_name']);
		  }else{ echo "Fantasy League";} ?></a>
		</div>
		<ul class="nav navbar-nav">
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/navbar.php') echo 'class="active"'?>><a href="index.php">Home</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/dashboard.php') echo 'class="active"'?>><a href="dashboard.php">Dashboard</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/create_team.php') echo 'class="active"'?>><a href="create_team.php">My Team</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/scores.php') echo 'class="active"'?>><a href="scores.php">Scores</a></li>
		  <li <?php if($_SERVER['PHP_SELF'] == '/Fantasy/points.php') echo 'class="active"'?>><a href="points.php">Players</a></li>
		</ul>
		<?php if(!isset($_SESSION['current_username'])){?>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		</ul>
		<?php }else{ ?>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
		</ul>
		<?php } ?>
	  </div>
	</nav>

</body>
</html>