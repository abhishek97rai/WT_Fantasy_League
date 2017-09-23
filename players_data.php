<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
/*$players = array(
			array("id"=>"1001", "name"=>"Manuel Neuer", "value"=>31),
			array("id"=>"1002", "name"=>"Petr Cech", "value"=>21),
			array("id"=>"1003", "name"=>"Phillip Lahm", "value"=>20),
			array("id"=>"1004", "name"=>"Kolo Toure", "value"=>18)
			);
*/

//must include config before this
$user_id = $_SESSION['user_id'];	
$net_team_value = 0;

$defenders = array();
$goalie = array();
$mids = array();
$forwards = array();
$pool_goalie = array();
$pool_defenders = array();
$pool_mids = array();
$pool_forwards = array();

//for goalies in user's team
$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_goalies as goal where goal.player_id IN (SELECT player_id from team_goalies.goalies_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $goalie[] = $line;
	$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_goalies as goal where goal.player_id NOT IN (SELECT player_id from team_goalies.goalies_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $pool_goalie[] = $line;
	//$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

//for defenders in user's team	
$result = mysqli_query($db,"SELECT def.player_id, def.player_name, def.player_value FROM football_defenders as def where def.player_id IN (SELECT player_id from team_defenders.defenders_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $defenders[] = $line;
	//echo($line['player_name']);
	$net_team_value = $net_team_value + $line['player_value'];
} //echo(count($defenders));	//line[0]['player_name'] = first defender name etc..

$result = mysqli_query($db,"SELECT def.player_id, def.player_name, def.player_value FROM football_defenders as def where def.player_id NOT IN (SELECT player_id from team_defenders.defenders_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $pool_defenders[] = $line;
	//$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

//for mids
$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_mids as goal where goal.player_id IN (SELECT player_id from team_mids.mids_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $mids[] = $line;
	$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_mids as goal where goal.player_id NOT IN (SELECT player_id from team_mids.mids_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $pool_mids[] = $line;
	//$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

//for forwards
$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_forwards as goal where goal.player_id IN (SELECT player_id from team_forwards.forwards_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $forwards[] = $line;
	$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

$result = mysqli_query($db,"SELECT goal.player_id, goal.player_name, goal.player_value FROM football_forwards as goal where goal.player_id NOT IN (SELECT player_id from team_forwards.forwards_".$user_id.")");

while($line = mysqli_fetch_assoc($result)){
    $pool_forwards[] = $line;
	//$net_team_value = $net_team_value + $line['player_value'];
	//echo($line['player_name']);
}

$rem_budget = 225 - $net_team_value;		
	?>