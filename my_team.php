<?php
	include ("players_data.php");
	$myPlayer = 'neuer';
?>

<html lang="en">
<head>
    <title>My Team</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js_scripts/transfers.js"></script>
</head>
<body style="background-image: url('backgrounds/main.jpg'); background-size: cover;">
	
	<div class="container-fluid">
		<div class="header">
			<h1 style="text-align: center;">My Team</h1>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div style="margin-left: 20px; margin-right: 20px; ">
		<h3 style="text-align:left;">Total Budget: $250m<span style="float:right;">Budget Remaining: $<?php echo($rem_budget); ?>m</span></h3>
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
					<tr>
						<td id="gk1"><button type="button" class="btn btn-danger btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 0)'>-</button> <?php echo($goalie[0]['player_name'])?></td>
						<td id="gk1val">$<?php echo($goalie[0]['player_value'])?>m</td>
					</tr>
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
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>-</button><?php echo($defenders[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>-</button><?php echo($mids[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>-</button><?php echo($forwards[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>+</button><?php echo($pool_goalie[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>+</button><?php echo($pool_defenders[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>+</button><?php echo($pool_mids[$i]['player_name'])?></td>
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
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick = 'hello(<?php echo (json_encode($players)); ?> , 2)'>+</button><?php echo($pool_forwards[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_forwards[$i]['player_value'])?>m</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div align="center">
		<button type="button" class="btn btn-primary">Confirm Team</button>
	</div>
	<br>
</body>
</html>