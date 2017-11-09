<?php
include ("config.php");

if(!isset($_SESSION)){
	session_start();
}

$result = mysqli_query($db,"SELECT * from results");
$line = mysqli_fetch_assoc($result);

if($line['show_res'] == 0){
	header("Location: index.php");
	die();
}

if(isset($_SESSION['current_username'])){	
	//global $db;
	$user = $_SESSION['user_id'];
	$player = array();
	
	$result = mysqli_query($db,'SELECT * FROM player_points ORDER BY total_points desc');
	
	while($line = mysqli_fetch_assoc($result)){
		$id = $line['player_id'];
		if($id<2000){
			$slug = 'goalies';
		}
		if($id>2000 && $id<3000){
			$slug = 'defenders';
		}
		if($id>3000 && $id<4000){
			$slug = 'mids';
		}
		if($id>4000){
			$slug = 'forwards';
		}
		
		$result_name = mysqli_query($db,'SELECT player_name FROM football_'.$slug.' where player_id = '.$id);
		$line_name = mysqli_fetch_assoc($result_name);
		$name = $line_name['player_name'];
		$pts = $line['total_points'];
		$player[$name]=$pts;
	}
}else{
	echo("<script> alert('Must Login First!'); </script>");
	header("Location: login.php");
		die();
}
?>

<html>
<head>
    <title><?php echo("Players"); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<style>

table {
        width: 100%;
    }

thead, tbody, tr, td, th { display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th {
    height: 30px;

    /*text-align: left;*/
}

tbody {
    max-height: 610px;
    overflow-y: auto;
}

thead {
    /* fallback */
}


tbody td, thead th {
    width: 50%;
    float: left;
}

</style>

<body>
<div class="container-fluid" style="padding: 0px;">
		<div class="header" style="width: 100%;">
			<div style="display: margin-left: 0px; inline-block; float: left; text-align:right; padding-right: 10px; width: 50%; background-color: red; color: white;">
				<h1>Player </h1>
			</div>
			<div style="display: inline-block; width: 50%; float: left; text-align:left; padding-left: 10px; background-color: blue; color: white;">
				<h1>Stats </h1>
			</div>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>

	<br>
<div class = 'container-fluid'>
	<div class= "row">
		<h2 align='center'>Most Points</h2>
		<br><br>
		<div class="col-md-6">
		<img class="img-responsive" src="img/top-scores.jpg" alt="Top Scores">
		</div>
		<div class="col-md-6">
			<table class="table table-condensed">
					<thead>
						<tr>
							<th>Player</th>
							<th>Points</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($player as $name=>$pts){?>
						<tr>
							<td><?php echo($name)?></td>
							<td><?php echo($pts)?></td>
						</tr>
					<?php }?>
					</tbody>
			</table>
		</div>
	</div>
	<div class= "row">
		<h2 align='center'>Most Valuable Players</h2>
		<br><br>
		<div class="col-md-6">
			<table class="table table-condensed">
					<thead>
						<tr>
							<th>Player</th>
							<th>Value Index</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$result = mysqli_query($db,'SELECT * FROM player_points ORDER BY MVP_index desc');
			
					while($line = mysqli_fetch_assoc($result)){
						$id = $line['player_id'];
						if($id<2000){
							$slug = 'goalies';
						}
						if($id>2000 && $id<3000){
							$slug = 'defenders';
						}
						if($id>3000 && $id<4000){
							$slug = 'mids';
						}
						if($id>4000){
							$slug = 'forwards';
						}
						
						$result_name = mysqli_query($db,'SELECT player_name FROM football_'.$slug.' where player_id = '.$id);
						$line_name = mysqli_fetch_assoc($result_name);
						$name = $line_name['player_name'];
						$pts = $line['total_points'];
						$MVP = $line['MVP_index'];
					?>
						<tr>
							<td><?php echo($line_name['player_name']);?></td>
							<td><?php echo($line['MVP_index']);?></td>
						</tr>
					<?php }?>
					</tbody>
			</table>
			</div>
			<div class="col-md-6">
				<br><br>
				<div align='center'><img class="img-responsive" src="img/MVP.jpg" alt="Top Scores"></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>