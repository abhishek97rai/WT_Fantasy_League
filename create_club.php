<?php

include("config.php");

//create_table('defenders');

/*$scored = array(
	'Eden Hazard'=>5,'Harry Kane'=>4,'Arjen Robben'=>5,'Thiago Silva'=>6,'Sergio Ramos'=>6,'Sergio Aguero'=>4,'Thomas Muller'=>4,
	'Diego Godin'=>6,'Kevin De Bruyne'=>5,'Lionel Messi'=>4,'Angel Di Maria'=>5,'Robert Lewandowski'=>4,'Paulo Dybala'=>8,
	'Sergio Busquets'=>5
	/*'Gus Payet'=>5,'Sergio Aguero'=>4,'Mats Hummels'=>6,'Romelu Lukaku'=>4,'David Luiz'=>6,'Marco Reus'=>5,'Thomas Lemar'=>5,
	'Robert Lewandowski'=>4,'Lionel Messi'=>4,'Cristian Eriksen'=>5,'Cristiano Ronaldo'=>4,
	/*'Juan Mata'=>5,'Karim Benzema'=>4,'Romelu Lukaku'=>4,'Paulo Dybala'=>12,'Cristiano Ronaldo'=>4,'Luka Modric'=>5,'Lionel Messi'=>4,
	'Antoinne Griezmann'=>4,'Kylian Mbappe'=>4,'Jerome Boateng'=>6,'Kevin De Bruyne'=>5,'Mesut Ozil'=>5,'Roberto Firmino'=>4,
	'Vincent Kompany'=>6,'Harry Kane'=>4
	/*'Ousman Dembele'=>5,'Santi Cazorla'=>5,'Neymar'=>4,'Robert Lewandowski'=>4,'Giorgino Chiellini'=>6,'Alexander Lacazette'=>4,'Eden Hazard'=>5,
	'Harry Kane'=>8,'Gerard Pique'=>6,'Luis Suarez'=>4,'Arjen Robben'=>5,'Sergio Aguero'=>4,'Alvaro Morata'=>4,'Cristiano Ronaldo'=>8
);*/

$assist = array(
	'Mesut Ozil'=>6,'Thomas Lemar'=>3,'Pierre Emerick Aubameyang'=>3,'Juan Mata'=>3,'Paul Pogba'=>3,'Marcelo'=>3,'David Silva'=>3,
	'Hector Bellerin'=>3,'Antoinne Griezmann'=>3,'Lionel Messi'=>3,'Cristiano Ronaldo'=>3,'Luka Modric'=>6
	/*'Arturo Vidal'=>3,'Neymar'=>3,'Gareth Bale'=>3,'Hector Bellerin'=>3,'Kylian Mbappe'=>3,'Jamie Vardy'=>3,'Antoinne Griezmann'=>3,
	'Eden Hazard'=>3,'Paulo Dybala'=>3
	/*'Casemiro'=>3,'Sergio Ramos'=>3,'Gareth Bale'=>3,'Yaya Toure'=>3,'Sergio Busquets'=>3,'Luka Modric'=>3,'Alvaro Morata'=>3,
	'Juanfran'=>3,'Angel Di Maria'=>3,'James Rodriguez'=>3,'Frank Ribery'=>3,'Marco Reus'=>6, 'Oxlade Chamberlain'=>3, 'Eden Hazard'=>6,
	'Cristian Eriksen'=>3
	/*'Gus Payet'=>3,'Pepe'=>3,'Miralem Pjanic'=>3,"N'Golo Kante"=>3,'Marco Assensio'=>6,'Mesut Ozil'=>3,'Oxlade Chamberlain'=>3,
	'Roberto Firmino'=>3,'Andres Iniesta'=>6,'Thomas Lemar'=>3,'Ivan Rakitic'=>3,'Luka Modric'=>6,'Paulo Dybala'=>3*/
);

$saves = array(
	'Victor Valdes'=>1,'Joe Hart'=>1,'Manuel Neuer'=>2,'Claudio Bravo'=>1,'Thibaut Courtouis'=>3,'Diego Lopez'=>0,'Iker Casillas'=>1,
	'David de gea'=>1,'Petr Cech'=>1,'Gianlugi Buffon'=>1
);
/*foreach ($scored as $x=>$y){
echo ($x." scored ".$y. " Goals <br>");
}*/

//putName();
//create_table($scored,'GS');
//create_table($assist,'A');
//create_table($saves,'S');

/*giveClean(3,3);
giveClean(4,1);
giveClean(5,2);
giveClean(6,2);
giveClean(7,1);
giveClean(8,1);
giveClean(9,2);*/

/*$str = '1,3,5,6';

$saves = explode(",",$str);

$sum = 0;

for($i=0;$i<count($saves);$i++){
	$sum += $saves[$i];
}*/

//echo ("AIGHT FINAL SHUM ISH : ".$sum);

//giveTotal();
//putName();
//putMVP();

$result = mysqli_query($db,"SELECT user_id from team_details");

while($line = mysqli_fetch_assoc($result)){
	giveTeamPts($line['user_id']);
}
updateRank();

function create_table($scored,$param){
	global $db;
	$myArr = [];
	$line = [];
	
    //$result = mysqli_query($db,"SELECT * from player_points");
	
	foreach ($scored as $name=>$points){
		$result = mysqli_query($db,"SELECT * from player_points where player_name = '".$name."'");
		$GS = "";
		$id = 0;
		if(!empty($result)){
			while($curr = mysqli_fetch_assoc($result)){
				$GS = $curr[$param];
				$id = $curr['player_id'];
				
				echo ("DOING FOR ".$curr['player_name']."<br>");
			}
		}
		$myArr = explode(",",$GS);
		$myArr[count($myArr)] = $points;
		
		$str = implode(",",$myArr);
		//$str = $myArr[1];
		$result = mysqli_query($db,'UPDATE player_points SET '.$param.' = "'.$str.'" WHERE player_points.player_id ='.$id);
		
		if(!empty($result)){
			echo ("SUCESS!! ".$str."<br>");
		}
	}
	
	//$myArr[0] = explode(",",$line[0]['fixtures']);
	
	//echo (count($myArr[0]));
	
	//$myArr[0][count($myArr[0])] = '11';
	
	//$str = implode(",",$myArr[0]);
	
	//echo ($str);
	
	//$result = mysqli_query($db,'UPDATE club_details SET fixtures = "'.$str.'" WHERE club_details.did = 1');
}

function putName(){
	global $db;
	$result = mysqli_query($db,'SELECT * from player_points');
	
	/*while($line = mysqli_fetch_assoc($result)){
		$name[] = $line['player_name'];
		$id[] = $line['player_id'];
	}*/
	
	$result = mysqli_query($db,'UPDATE player_points SET MP = 5 WHERE 1=1');
	
	if(!empty($result)){
		echo ("SUCESS : <br>");
	}
}

function giveClean($num,$cleans){
	global $db;
	$def = 4*$cleans;
	$result = mysqli_query($db,'UPDATE player_points SET CS = "'.$def.'" WHERE player_id in (SELECT player_id from clubs.club_'.$num.' WHERE player_id < 3000)');
	if(!empty($result)){
		echo ("sucess def for ".$num."<br>");
	}
	
	$result = mysqli_query($db,'UPDATE player_points SET CS = "'.$cleans.'" WHERE player_id in (SELECT player_id from clubs.club_'.$num.' WHERE player_id > 3000 AND player_id < 4000)');
	if(!empty($result)){
		echo ("sucess mid for ".$num."<br>");
	}
}

function giveTotal(){
	global $db;
	$result = mysqli_query($db,'SELECT * FROM player_points');
	
	while($line = mysqli_fetch_assoc($result)){
		$id = $line['player_id'];
		$sum = 0;
		$sum += getSum(explode(",",$line['GS']));
		$sum += getSum(explode(",",$line['A']));
		$sum += getSum(explode(",",$line['CS']));
		$sum += getSum(explode(",",$line['S']));
		$sum += $line['MP'];
		
		$in_result = mysqli_query($db,'UPDATE player_points SET total_points = "'.$sum.'" WHERE player_id = "'.$id.'"');
		
		if(!empty($in_result)){
			echo ("DONE for : ".$line['player_name']."<br>");
		}
	}
}

function getSum($myArr){
		$sum = 0;

		for($i=0;$i<count($myArr);$i++){
			$sum += $myArr[$i];
		}
		
		return $sum;
}

function putMVP(){
	global $db;
	$result = mysqli_query($db,'SELECT * FROM player_points WHERE player_id > 2000 AND player_id < 3000');
	
	while($line = mysqli_fetch_assoc($result)){
		$id = $line['player_id'];
		$pts = $line['total_points'];
		
		$in_result = mysqli_query($db,'SELECT player_value FROM football_defenders WHERE football_defenders.player_id = '.$id);
		$okay = mysqli_fetch_assoc($in_result);
		
		$in_result = mysqli_query($db,'SELECT AVG(player_value) as val FROM football_defenders');
		$a = mysqli_fetch_assoc($in_result);
		
		$MVP = $pts/$okay['player_value'];
		$MVP *= $a['val'];
		
		$in_result = mysqli_query($db,'UPDATE player_points SET MVP_index = "'.$MVP.'" WHERE player_id = "'.$id.'"');
		
		if(!empty($in_result)){
			echo ("DONE for : ".$line['player_name']."<br>");
		}
	}
}

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
	
	if (!empty($result)){
		echo ("SUCCESS FOR : ".$user."<br>");
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
		if(!empty($result_in)){
			echo("SUCCESS! <br>");
		}
	}
	
}

?>