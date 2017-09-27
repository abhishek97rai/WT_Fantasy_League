<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include("config.php");
	
	if(isset($_POST['pid'])){
		$player_id = $_POST['pid'];
		$operation = $_POST['operation'];
		$position = $_POST['position'];
		$Num = $_POST['num'];
		
		$name = select_and_operate($player_id,$operation,$Num);
		
		if($operation == 0)
			$info = 'added';
		else
			$info = 'removed';
		
		if($name != 'VRO')
			echo "SUCCESS : ".$name." has been ".$info;
		else
			echo "Failed";
		
	}
	
	function select_and_operate($player_id,$operation,$Num){
		global $db;
		
		//echo ("Type is : ".$type);
		$fail = false;
		
		//echo ("Max is : ".$max);
		
		if($operation == 0){
			
			$query = "SELECT shirt FROM selected where selected.player_id =".$player_id."";
			$result = mysqli_query($db, $query);
			$test = mysqli_fetch_assoc($result);
			
			if(empty($test)){
			echo "aigt we here";
			$query = "INSERT INTO clubs.club_".$Num." (shirt, player_id) VALUES(NULL,".$player_id.")";
			$query_2 = "INSERT INTO selected (shirt, player_id) VALUES(NULL,".$player_id.")";
			}else{
				echo "FAIL TRUED  ";
				$fail = true;
			}
		}
		else{
			$query = "DELETE FROM clubs.club_".$Num." WHERE player_id =".$player_id."";
			$query_2 = "DELETE FROM selected WHERE player_id =".$player_id."";
		}
		
		$result = mysqli_query($db, $query);
		$result_2 = mysqli_query($db, $query_2);
		if(empty($result) || empty($result_2))
			$fail = true;
		
		$name = 'VRO';
		if(!$fail)
			$name = 'OKAY';
		return $name;
	}
?>