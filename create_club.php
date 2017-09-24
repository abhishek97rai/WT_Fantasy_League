<?php

include("config.php");

create_table($i);

function create_table($cnt){
	global $db;
    $query = "CREATE TABLE selected (shirt INT(3) NOT NULL AUTO_INCREMENT , 
	player_id INT(4) NOT NULL , PRIMARY KEY (shirt))";
    $result = mysqli_query($db,$query);
	if(!empty($result)){
	echo ("SUCESS : ".$cnt);
	}
}

?>