<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['user_id'])){	
		header("Location: login.php");
		die();
	}
include("config.php");

$user_id = $_SESSION['user_id'];

create_table('goalie',$user_id);
create_table('mid',$user_id);
create_table('defender',$user_id);
create_table('forward',$user_id);

function create_table($type,$user_id){
	global $db;
	$query = "SELECT ".$type."_id FROM team_".$type."s".$type."s_".$user_id."";
	$result = mysqli_query($db, $query);

	if(empty($result)) {
                $query = "CREATE TABLE team_".$type."s.".$type."s_".$user_id."( ".$type."_id INT(3) NOT NULL AUTO_INCREMENT , 
				player_id INT(4) NOT NULL , PRIMARY KEY (".$type."_id))";
                $result = mysqli_query($db,$query);
				
				//echo $type."s_".$user_id." created!! : ".$result;
	}
}

$result = mysqli_query($db,"SELECT team_name,team_eligibility FROM team_details where team_details.user_id = ".$user_id);
$line = mysqli_fetch_assoc($result);
$team_name = $line['team_name'];
$team_eligibility = $line['team_eligibility'];

function checkEligible($type,$max){
	global $user_id,$db;
	$query = "SELECT COUNT(player_id) as Num FROM team_".$type."s.".$type."s_".$user_id."";
	$result = mysqli_query($db, $query);
	$line_2 = mysqli_fetch_assoc($result);
	if($line_2['Num'] == $max)
		return true;
	else
		return false;
}

include("players_data.php");

$result = mysqli_query($db,"UPDATE `team_details` SET `team_value` =".$net_team_value." WHERE `team_details`.`user_id` = ".$user_id);
$eG = checkEligible('goalie',1);
$eD = checkEligible('defender',4);
$eM = checkEligible('mid',3);
$eF = checkEligible('forward',3);

if($eG && $eD && $eM && $eF && $net_team_value < 226){
	$team_eligibility = 1;
}else{
	$team_eligibility = 0;
}

$result = mysqli_query($db,"UPDATE `team_details` SET `team_eligibility` =".$team_eligibility." WHERE `team_details`.`user_id` = ".$user_id);
?>

<script>	
	function aight(id, type){
		//alert(id);
		var first = id[0];
		//alert(first);
		switch(first){
			case '1':
				pos = 'goalie';
				break;
			case '2':
				pos = 'defender';
				break;
			case '3':
				pos = 'mid';
				break;
			case '4':
				pos = 'forward';
				break;
		}
		//alert(pos);
		$.post( 
            "result.php",
            { pid: id,
				operation: type,
				position: pos},
            function(data) {
                alert(data);
				location.reload();
                }
            );
	}
	
	$(document).ready(function() {
			
            $("#driver").click(function(event){
				
               $.post( 
                  "result.php",
                  { name: "Zara" },
                  function(data) {
                     $('#stage').html(data);
                  }
               );
					
            });
				
         });

</script>

<style>

table {
        width: 100%;
    }

thead, tbody, tr, td, th { display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th {
    height: 30px;

    /*text-align: left;*/
}

tbody {
    max-height: 590px;
    overflow-y: auto;
}

thead {
    /* fallback */
}


tbody td, thead th {
    width: 50%;
    float: left;
}

</style>

<head>
    <title><?php echo($team_name); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js_scripts/transfers.js"></script>
</head>

<body>
<div class="container-fluid" style="padding: 0px;">
		<div class="header" style="width: 100%;">
			<div style="display: margin-left: 0px; inline-block; float: left; text-align:right; padding-right: 10px; width: 50%; background-color: red; color: white;">
				<h1>Team Name: </h1>
			</div>
			<div style="display: inline-block; width: 50%; float: left; text-align:left; padding-left: 10px; background-color: blue; color: white;">
				<h1><?php echo($team_name);?> </h1>
			</div>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div style="margin-left: 20px; margin-right: 20px; ">
		<h3 style="text-align:left;">Total Budget: $225m<span style="float:right;">Budget Remaining: $<?php echo($rem_budget); ?>m</span></h3>
		<h3>
		<div class = <?php if($team_eligibility == 1){ echo "bg-success"; ?> style = "display: inline-block;">
		<?php echo"VALID TEAM!";} ?>
		</div>
		<div class = <?php if($team_eligibility == 0){ echo "bg-danger"; ?> style = "display: inline-block;">
		<?php echo"INVALID TEAM!";} ?>
		</div>
		</h3>
	</div>
	<div class="row" style="margin-left: 20px; margin-right: 20px; ">
		<div class="col-md-6">
			<h2 style="text-align:center;">Current Team</h2>
			<br>
			<h3>Goalkeepers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
				<?php for($i=0;$i<count($goalie);$i++){ ?>
					<tr>
						<td id="gk1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($goalie[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button> <?php echo($goalie[$i]['player_name'])?></td>
						<td id="gk1val">$<?php echo($goalie[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<h3>Defenders</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
				<?php for($i=0;$i<count($defenders);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($defenders[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($defenders[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($defenders[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<h3>Midfielders</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($mids);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($mids[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($mids[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($mids[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<h3>Forwards</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($forwards);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($forwards[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($forwards[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($forwards[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h2 style="text-align:center;">Player Pool</h2>
			<br>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#goalkeepers">Goalkeepers</a></li>
				<li><a data-toggle="tab" href="#defenders">Defenders</a></li>
				<li><a data-toggle="tab" href="#midfielders">Midfielders</a></li>
				<li><a data-toggle="tab" href="#forwards">Forwards</a></li>
			</ul>
		<div class="tab-content">
			<div id="goalkeepers" class="tab-pane fade in active">
			<h3>Goalkeepers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_goalie);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_goalie[$i]['player_id']); ?>'>+</button><?php echo($pool_goalie[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_goalie[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			<div id="defenders" class="tab-pane fade">
			<h3>Defenders</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_defenders);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_defenders[$i]['player_id']); ?>'>+</button><?php echo($pool_defenders[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_defenders[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			<div id="midfielders" class="tab-pane fade">
			<h3>Midfielders</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_mids);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_mids[$i]['player_id']); ?>'>+</button><?php echo($pool_mids[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_mids[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
			<div id="forwards" class="tab-pane fade">
			<h3>Forwards</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_forwards);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_forwards[$i]['player_id']); ?>'>+</button><?php echo($pool_forwards[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_forwards[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			</div>
		</div>	
		</div>
</body>