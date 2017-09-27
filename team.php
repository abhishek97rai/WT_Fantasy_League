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
	$user = $_GET['id'];
	
	//echo($user);
	
	$result_def = mysqli_query($db,'SELECT * FROM team_defenders.defenders_'.$user);
	$result_gol = mysqli_query($db,'SELECT * FROM team_goalies.goalies_'.$user);
	$result_mid = mysqli_query($db,'SELECT * FROM team_mids.mids_'.$user);
	$result_for = mysqli_query($db,'SELECT * FROM team_forwards.forwards_'.$user);
	
	$player = array();
	
		
	while($line = mysqli_fetch_assoc($result_gol)){
		$id = $line['player_id'];
		$result_name = mysqli_query($db,'SELECT player_name FROM football_goalies where player_id = '.$id);
		$line_name = mysqli_fetch_assoc($result_name);
		$name = $line_name['player_name'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$player[$name]= $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_def)){
		$id = $line['player_id'];
		$result_name = mysqli_query($db,'SELECT player_name FROM football_defenders where player_id = '.$id);
		$line_name = mysqli_fetch_assoc($result_name);
		$name = $line_name['player_name'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$player[$name]= $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_mid)){
		$id = $line['player_id'];
		$result_name = mysqli_query($db,'SELECT player_name FROM football_mids where player_id = '.$id);
		$line_name = mysqli_fetch_assoc($result_name);
		$name = $line_name['player_name'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$player[$name]= $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_for)){
		$id = $line['player_id'];
		$result_name = mysqli_query($db,'SELECT player_name FROM football_forwards where player_id = '.$id);
		$line_name = mysqli_fetch_assoc($result_name);
		$name = $line_name['player_name'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$player[$name]= $line_in['total_points'];
	}
	
	$result = mysqli_query($db,'SELECT * FROM team_details WHERE user_id = "'.$user.'"');
	$line = mysqli_fetch_assoc($result);
	$total = $line['team_points'];
	$rank = $line['team_rank'];
	
	//$result = mysqli_query($db,'SELECT * FROM team_details ORDER BY team_rank ASC');
	
	//if (!empty($result)){
		//echo ("SUCCESS FOR : ".$user."<br>");
	//}
}
?>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container-fluid">
		<div class="header">
			<h1>My Dashboard</h1>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>


<h3 align='center'><?php echo($line['team_name']);?></h3>
<br><br>
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
			
			<br>
	<div class="row" style="margin-left: 20px; margin-right: 20px;">
		<div class="col-md-4">
			<h3>Total Points: <?php echo($total);?></h3>
			<h3>Rank: <?php echo($rank);?></h3>
		</div>
	</div>
			
</body>			