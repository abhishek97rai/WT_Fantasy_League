<?php
include("config.php");

$result = mysqli_query($db,"SELECT user_id from team_details");

while($line = mysqli_fetch_assoc($result)){
	giveTeamPts($line['user_id']);
}
updateRank();

echo("SIMULATION OVER!");

function giveTeamPts($user){
	global $db;
	$sum = 0;
	$result_def = mysqli_query($db,'SELECT * FROM team_defenders.defenders_'.$user);
	$result_gol = mysqli_query($db,'SELECT * FROM team_goalies.goalies_'.$user);
	$result_mid = mysqli_query($db,'SELECT * FROM team_mids.mids_'.$user);
	$result_for = mysqli_query($db,'SELECT * FROM team_forwards.forwards_'.$user);
	
	while($line = mysqli_fetch_assoc($result_def)){
		$id = $line['player_id'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$sum += $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_gol)){
		$id = $line['player_id'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$sum += $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_mid)){
		$id = $line['player_id'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$sum += $line_in['total_points'];
	}
	
	while($line = mysqli_fetch_assoc($result_for)){
		$id = $line['player_id'];
		$result_in = mysqli_query($db,'SELECT total_points FROM player_points where player_id = '.$id);
		$line_in = mysqli_fetch_assoc($result_in);
		$sum += $line_in['total_points'];
	}
	
	$result = mysqli_query($db,'UPDATE team_details SET team_points = "'.$sum.'" WHERE user_id = "'.$user.'"');
	
	if (empty($result)){
		echo ("FAILED FOR : ".$user."<br>");
	}
}

function updateRank(){
	global $db;
	$result = mysqli_query($db,'SELECT COUNT(*) as tot FROM team_details');
	$line = mysqli_fetch_assoc($result);
	$total = $line['tot'];
	$i = 1;
	
	$result = mysqli_query($db,'SELECT * FROM team_details ORDER BY team_points desc');
	while($line = mysqli_fetch_assoc($result)){
		$result_in = mysqli_query($db,'UPDATE team_details SET team_rank = '.$i.' WHERE user_id = '.$line['user_id']);
		$i += 1;
		if(empty($result_in)){
			echo("FAILED RANKING!! <br>");
		}
	}
	
}
?>