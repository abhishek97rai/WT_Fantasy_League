<html lang="en">
<style>
</style>
<?php
//include ("css_scripts/dashboard.css");
//Script to fetch pointsh
include ("config.php");
$result = mysqli_query($db,"SELECT * from results");
$line = mysqli_fetch_assoc($result);

if($line['show_res'] == 0){
	header("Location: index.php");
	die();
}

if(!isset($_SESSION)){
	session_start();
}

if(isset($_SESSION['current_username'])){	
	//global $db;
	$user = $_SESSION['user_id'];
	
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
	
	$result = mysqli_query($db,'SELECT * FROM team_details ORDER BY team_rank ASC');
	
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
	
	<div class="container-fluid" style="padding: 0px;">
		<div class="header" style="width: 100%;">
			<div style="display: margin-left: 0px; inline-block; float: left; text-align:right; padding-right: 10px; width: 50%; background-color: red; color: white;">
				<h1>My</h1>
			</div>
			<div style="display: inline-block; width: 50%; float: left; text-align:left; padding-left: 10px; background-color: blue; color: white;">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div class="row" style="margin-left: 20px; margin-right: 20px; ">
		<div class="col-md-6">
			<h3>Your Scores</h3>
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
		<div class="col-md-6">
			<h3>Leaderboard</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Name</th>
						<th>Team</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
				<?php while($line = mysqli_fetch_assoc($result)){
					$res = mysqli_query($db,'SELECT user_full_name FROM login WHERE login.user_id = '.$line['user_id']);
					$line_in = mysqli_fetch_assoc($res);
					?>
					<tr id = <?php echo($line['user_id']);?>>
						<td><?php echo($line['team_rank']);?></td>
						<td><?php echo($line_in['user_full_name']);?></td>
					<td><a href='team.php?id=<?php echo($line['user_id']);?>'><?php echo($line['team_name']);?></a></td>
				<td><?php echo($line['team_points']); }?></td>
					</tr>
				</tbody>
			</table>
			<br>
			<h3>Top 3 Goal Scorers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Player</th>
						<th>Goals</th>
						<th>Assists</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Paulo Dybala</td>
						<td>6</td>
						<td>3</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Cristiano Ronaldo</td>
						<td>6</td>
						<td>1</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Lionel Messi</td>
						<td>5</td>
						<td>1</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="row" style="margin-left: 20px; margin-right: 20px;">
		<div class="col-md-12">
			<h3 align='center'>Total Points: <?php echo($total);?></h3>
			<h3 align='center'>Rank: <?php echo($rank);?></h3>
		</div>
	</div>
</body>
</html>
