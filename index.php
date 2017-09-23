<style>
<?php
//include("css_scripts/index.css");
session_start();
?>
</style>

<html lang="en">
<head>
    <title>Fantasy League - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/index.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script>
		$.get("navbar.php", function(data){
		$("#nav-placeholder").replaceWith(data);
		});
	</script>
</head>
<body style = "border: 0; padding: 0; margin: 0;">
<div class = "bg-info">
<div class="container-fluid">
	<div class = "row blackbg">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">
		<div align="center">
		<img class="img-responsive" src="text-effects/Welcome-logo.gif">
		<img class="img-responsive" src="text-effects/Welcome-quote.gif">
		</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>	
	
	<div id="nav-placeholder">
	</div>
<div class="container-fluid">	
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