<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include("config.php");
	
	if(isset($_POST['pid'])){
		$user_id = $_SESSION['user_id'];
		$player_id = $_POST['pid'];
		$operation = $_POST['operation'];
		$position = $_POST['position'];
		
		$name = select_and_operate($user_id,$player_id,$operation,$position);
		
		if($operation == 0)
			$info = 'added';
		else
			$info = 'removed';
		
		if($name != 'VRO')
			echo "SUCCESS : ".$name." has been ".$info;
		else
			echo "Failed";
		
	}
	
	function select_and_operate($user_id, $player_id,$operation,$type){
		global $db;
		
		//echo ("Type is : ".$type);
		
		$max = 0;
		$fail = false;
		
		switch($type){
			case 'goalie':
				$max = 1;
				break;
				
			case 'defender':
				$max = 4;
				break;
				
			case 'mid':
				$max = 3;
				break;
				
			case 'forward':
				$max = 3;
				break;
		}
		
		//echo ("Max is : ".$max);
		
		$query = "SELECT player_id,player_name FROM football_".$type."s where player_id =".$player_id."";
		$result = mysqli_query($db, $query);
		$line = mysqli_fetch_assoc($result);
		
		if($operation == 0){
			$query = "SELECT COUNT(player_id) as Num FROM team_".$type."s.".$type."s_".$user_id."";
			$result = mysqli_query($db, $query);
			$line_2 = mysqli_fetch_assoc($result);
			
			if($line_2['Num'] < $max){
			//echo "line_2[Num] is : ".$line_2['Num'];
			$query = "INSERT INTO team_".$type."s.".$type."s_".$user_id." VALUES(NULL,".$player_id.")";
			}else{
				$fail = true;
			}
		}
		else{
			$query = "DELETE FROM team_".$type."s.".$type."s_".$user_id." WHERE ".$type."s_".$user_id.".player_id =".$player_id."";
		}
		
		$result = mysqli_query($db, $query);
		if(empty($result))
			$fail = true;
		
		$name = 'VRO';
		if(!$fail)
			$name = $line['player_name'];
		return $name;
	}
?>