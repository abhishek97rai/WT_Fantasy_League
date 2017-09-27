<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['user_id']) || $_SESSION['current_username'] != 'manas97'){	
		header("Location: login.php");
		die();
	}
	
$t1 = $_GET['t1'];
$t2 = $_GET['t2'];	
include("config.php");
include("new_data.php");

//include ("js_scripts/transfer.js");

$result = mysqli_query($db,"UPDATE `team_details` SET `team_value` =".$net_team_value." WHERE `team_details`.`user_id` = ".$user_id);

$team_eligibility = 1;

$result = mysqli_query($db,"UPDATE `team_details` SET `team_eligibility` =".$team_eligibility." WHERE `team_details`.`user_id` = ".$user_id); ?>



<html>
<head>
    <title><?php echo("Club Compare "); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
	
	function aight(id, type){
		alert("Bhadve Button matt daba yaha!!");
		/*var first = id[0];
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
            "new_result.php",
            { pid: id,
				operation: type,
				position: pos,
			num : <?php echo($Num); ?>},
            function(data) {
                alert(data);
				location.reload();
                }
            );*/
	}
	</script>
</head>

<body>
<div class="container-fluid">
		<div class="header">
			<h1 style="text-align: center;"><?php echo("Team ".$t1." vs "."Team ".$t2); ?></h1>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div style="margin-left: 20px; margin-right: 20px; ">
		<h3 style="text-align:left;">Team Value: <?php echo($net_team_value);?><span style="float:right;">Team Value: $<?php echo($net_team_value_2); ?>m</span></h3>
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
		<div class="col-md-6">
			<h2 style="text-align:center;"><?php echo("Team ".$t1); ?></h2>
			<br>
			<h3>Goalkeepers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
						<th>Sav</th>
					</tr>
				</thead>
				<tbody>
				<?php for($i=0;$i<count($goalie);$i++){ ?>
					<tr>
						<td id="gk1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($goalie[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button> <?php echo($goalie[$i]['player_name'])?></td>
						<td id="gk1val">$<?php echo($goalie[$i]['player_value'])?>m</td>
						<td><select name="GSG1">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AG1">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardG1">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGG1">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMG1">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="SavG1">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">4</option>
							<option value="3">5</option>
							<option value="3">6</option>
							<option value="3">7</option>
							<option value="3">8</option>
							<option value="3">9</option>
							<option value="3">10</option>
							<option value="3">11</option>
							<option value="3">12</option>
						  </select></td>
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
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
				<?php for($i=0;$i<count($defenders);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($defenders[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($defenders[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($defenders[$i]['player_value'])?>m</td>
						<td><select name="GSD<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AD<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardD<?php echo($i); ?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGD<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMD<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
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
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($mids);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($mids[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($mids[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($mids[$i]['player_value'])?>m</td>
						<td><select name="GSM<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AM<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardM<?php echo($i); ?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGM<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMM<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
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
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($forwards);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs" id='<?php echo($forwards[$i]['player_id']); ?>' onclick='aight(this.id,1)'>-</button><?php echo($forwards[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($forwards[$i]['player_value'])?>m</td>
						<td><select name="GSF<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AF<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardF<?php echo($i); ?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGF<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMF<?php echo($i); ?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h2 style="text-align:center;"><?php echo("Team ".$t2); ?></h2>
			<br>
			<h3>Goalkeepers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
						<th>Sav</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_goalie);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_goalie[$i]['player_id']); ?>'>+</button><?php echo($pool_goalie[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_goalie[$i]['player_value'])?>m</td>
						<td><select name="GSG2">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AG2">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardG2">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGG2">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMG2">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="SavG2">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="3">4</option>
							<option value="3">5</option>
							<option value="3">6</option>
							<option value="3">7</option>
							<option value="3">8</option>
							<option value="3">9</option>
							<option value="3">10</option>
							<option value="3">11</option>
							<option value="3">12</option>
						  </select></td>
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
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_defenders);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_defenders[$i]['player_id']); ?>'>+</button><?php echo($pool_defenders[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_defenders[$i]['player_value'])?>m</td>
						<td><select name="GSDD<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="ADD<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardDD<?php echo($i)?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGDD<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMDD<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
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
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_mids);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_mids[$i]['player_id']); ?>'>+</button><?php echo($pool_mids[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_mids[$i]['player_value'])?>m</td>
						<td><select name="GSMM<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AMM<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardMM<?php echo($i)?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGMM<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMMM<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<h3>Forwards</h3>
			<table class="table table-fixed table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Value</th>
						<th>GS</th>
						<th>A</th>
						<th>Card</th>
						<th>OG</th>
						<th>PM</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($pool_forwards);$i++){ ?>
					<tr>
						<td id="df1"><button type="button" class="btn btn-success btn-xs" onclick='aight(this.id,0)' id='<?php echo($pool_forwards[$i]['player_id']); ?>'>+</button><?php echo($pool_forwards[$i]['player_name'])?></td>
						<td id="df1val">$<?php echo($pool_forwards[$i]['player_value'])?>m</td>
						<td><select name="GSFF<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						  </select></td>
						<td><select name="AFF<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						  </select></td>
						 <td><select name="cardFF<?php echo($i)?>">
							<option value="none">None</option>
							<option value="YC">YC</option>
							<option value="RC">RC</option>
						  </select></td>
						  <td><select name="OGFF<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
						  <td><select name="PMFF<?php echo($i)?>">
							<option value="0">0</option>
							<option value="1">1</option>
						  </select></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<input type="submit" name="submit" value="submit"></input>
		</form>
		</div>
</body>
</html>

<?php
/*<script>
	alert("ANDKABA");
	
	function aight(id, type){
		alert(id);
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
            "new_result.php",
            { pid: id,
				operation: type,
				position: pos
			num : 1,}
            function(data) {
                alert(data);
				location.reload();
                }
            );
	}
	
	function lol(){
		alert("LOL!!");
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

</script>*/
?>