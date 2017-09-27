<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

//must include config before this
$user_id = $_SESSION['user_id'];	
$net_team_value = 0;
$net_team_value_2 = 0;

$defenders = selections('defenders',$t1,true);
$goalie = selections('goalies',$t1,true);
$mids = selections('mids',$t1,true);
$forwards = selections('forwards',$t1,true);
$pool_goalie = selections('goalies',$t2,true);
$pool_defenders = selections('defenders',$t2,true);
$pool_mids = selections('mids',$t2,true);
$pool_forwards = selections('forwards',$t2,true);

$count = 0;
function selections($type,$Num,$in){
	global $db,$net_team_value,$net_team_value_2,$count;
	//for goalies in user's team
	$goalie = array();
	
	if($in){
	$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_".$type." as goal where goal.player_id IN (SELECT player_id from clubs.club_".$Num.")");

	while($line = mysqli_fetch_assoc($result)){
		$goalie[] = $line;
		if($count<11)
			$net_team_value = $net_team_value + $line['player_value'];
		else
			$net_team_value_2 = $net_team_value + $line['player_value'];
		//echo($line['player_name']);
		$count=$count+1;
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