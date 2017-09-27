<?php
include("config.php");

if($_POST['pid'] == 1){
$result = mysqli_query($db,'UPDATE results SET show_res = 1 where 1=1');

echo ("You can now see the Results!");
}else{
	$result = mysqli_query($db,'UPDATE results SET show_res = 0 where 1=1');
	echo("Results hidden for simulation");
}

?>