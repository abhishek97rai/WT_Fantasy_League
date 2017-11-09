<style>
<?php
//include("css_scripts/index.css");
session_start();
?>
.carousel img {
        width:100% !important;
        min-width:100 !important;
        height: auto;
    }

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
<div>
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
	<div class='row'>
		<br><br><br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			  <img src="img/ins4.jpg" alt="Chicago">
			</div>	
		  
			<div class="item">
			  <img src="img/ins1.jpg" alt="Los Angeles">
			</div>

			<div class="item">
			  <img src="img/ins2.jpg" alt="Chicago">
			</div>
			
			<div class="item">
			  <img src="img/ins3.jpg" alt="Chicago">
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class='row'>
		<br><br><br>
		<div class="col-md-6">
		<img class="img-responsive" src="img/top-scores.jpg" alt="Top Scores">
		</div>
		<div class = 'col-md-6' style='padding-left:100px;'>
		<h2><span>Points System : </span></h2>
			<table class="table table-condensed">
					<thead>
						<tr>
							<th>Position</th>
							<th>Match Played</th>
							<th>Goal Scored</th>
							<th>Assist</th>
							<th>Clean Sheet</th>
							<th>Saves Made</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Goalkeeper</td>
							<td>1</td>
							<td>6</td>
							<td>3</td>
							<td>4</td>
							<td>1 for every 2 saves</td>
						</tr>
						<tr>
							<td>Defender</td>
							<td>1</td>
							<td>6</td>
							<td>3</td>
							<td>4</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Midfielder</td>
							<td>1</td>
							<td>5</td>
							<td>3</td>
							<td>1</td>
							<td>-</td>
						</tr>
						<tr>
							<td>Forward</td>
							<td>1</td>
							<td>4</td>
							<td>3</td>
							<td>0</td>
							<td>-</td>
						</tr>
					</tbody>
			</table>
			<br><br><br>
			<div align='center'>
			<a href='login.php' style='text-decoration:none; color:"#FFFFFF;'><button type="button" class="btn btn-success" style="width:500px; height:80px;"><h2>LOGIN</h2></button></a><br><br>
			<a href='register.php' style='text-decoration:none; color:"#FFFFFF;'><button type="button" class="btn btn-success" style="width:500px; height:80px;"><h2>REGISTER</h2></button></a>
			</div>
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