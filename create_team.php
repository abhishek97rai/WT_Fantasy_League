<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['user_id']))	
		header("Location: login.php");	
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

function doThis(){
	echo "This is DONE!!";
}

include("players_data.php");

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

<head>
    <title>My Team</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js_scripts/transfers.js"></script>
</head>

<body>
<div class="container-fluid">
		<div class="header">
			<h1 style="text-align: center;">My Team</h1>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div style="margin-left: 20px; margin-right: 20px; ">
		<h3 style="text-align:left;">Total Budget: $225m<span style="float:right;">Budget Remaining: $<?php echo($rem_budget); ?>m</span></h3>
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
			<table class="table table-condensed">
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
			<table class="table table-condensed">
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
			<h3>Defenders</h3>
			<table class="table table-condensed">
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
			<h3>Midfielders</h3>
			<table class="table table-condensed">
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
			<h3>Forwards</h3>
			<table class="table table-condensed">
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
</body>