<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

//must include config before this
$user_id = $_SESSION['user_id'];	
$net_team_value = 0;

$defenders = selections('defenders',$Num,true);
$goalie = selections('goalies',$Num,true);
$mids = selections('mids',$Num,true);
$forwards = selections('forwards',$Num,true);
$pool_goalie = selections('goalies',$Num,false);
$pool_defenders = selections('defenders',$Num,false);
$pool_mids = selections('mids',$Num,false);
$pool_forwards = selections('forwards',$Num,false);

function selections($type,$Num,$in){
	global $db,$net_team_value;
	//for goalies in user's team
	
	if($in){
	$goalie = array();
	$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_".$type." as goal where goal.player_id IN (SELECT player_id from clubs.club_".$Num.")");

	while($line = mysqli_fetch_assoc($result)){
		$goalie[] = $line;
		$net_team_value = $net_team_value + $line['player_value'];
		//echo($line['player_name']);
	}
	}else{

	$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_".$type." as goal where goal.player_id NOT IN (SELECT player_id from selected)");

	while($line = mysqli_fetch_assoc($result)){
		$goalie[] = $line;
	}
	}
	
	return $goalie;
}

$rem_budget = 225 - $net_team_value;		
	?>