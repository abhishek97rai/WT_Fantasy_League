<style>
<?php
include("css_scripts/index.css");
?>
</style>

<html lang="en">
<head>
    <title>Fantasy League - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid bg-info">
	<div class = "row">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">
		<h1 class = "hidden-xs bg-primary" align="center">Welcome to Fantasy League!!</h1>
		</div>
		<div class="col-md-3">
		</div>
	</div>	
		<h3 class="heading">You score when they perform!</h3>
	<br><br>	
	
	<div class = "row">
		<div class="col-md-2">
		</div>
		<div class="col-md-4 left-side-pane">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<div class="col-md-1">
		</div>
		
		<div class="col-md-3">
		<div class="row right-side-pane">
		<p class="bg-primary">How To Play : </p>
			<dl>
				<dt>Create Account</dt>
					<dd>Click Register to create account</dd>
					<dd>Enter your details</dd>
					<dd>Login with the entered details</dd>
				<dt>Create Team</dt>
					<dd>Select players of your choice</dd>
					<dd>Sit back and relax as they accumulate points.</dd>
			</dl>
		
		<br><br><br><br><br><br>
		</div>
		<br>
		<div class="row">
		<div class="col-md-6">
			<a href="login.php">
				<button type="button" class="btn btn-info btn-block"><p class="button-text">Click Here To Login</p></button>
			</a>
		<br>
		</div>
		<div class="col-md-6">
			<a href="register.php">
				<button type="button" class="btn btn-info btn-block button-text"><p class="button-text">Click Here To Register</p></button>
			</a>
		</div>	
		</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

</body>
</html>

<?php
/*<html>
<body>

<?php
$username = "Manas";
echo "My first PHP script!";
echo "<p>" . str_replace("world", $username, "Hello world!")."</p>"; // outputs Hello Manas!
$players = array("Manas", "Frye", "Psapa");
$points = array("Manas"=>"35", "Frye"=>"37", "Psapa"=>"43");
echo "<p>No.of Players are : " . count($players) . "</p>";

for($i=0;$i<count($players);$i++){
	$pname = $players[$i];
	echo "<p> Player ".($i+1).": $players[$i] $points[$pname] </p>";
}

echo "<br>";

//alt syntax
foreach($points as $x => $x_value) {
    echo "Player: " . $x . ", Team: " . $x_value;
    echo "<br>";
}

//to sort the players acc to points
echo"<br> Sorted Players : <br>";
arsort($points);
foreach($points as $x => $x_value) {
    echo "Player: " . $x . ", Team: " . $x_value;
    echo "<br>";
}

echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
if(isset($_SERVER['HTTP_REFERER'])){
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
}
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>

<p><a href="/Fantasy/login.php">login</a></p>

</body>
</html>*/
?>