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
		<h3 style="text-align:left;">Total Budget: $200m<span style="float:right;">Budget Remaining: $5m</span></h3>
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
						<td id="gk1"><button type="button" class="btn btn-danger btn-xs" onclick = "hie('bhosdike')">-</button> Manuel Neuer</td>
						<td id="gk1val">$31m</td>
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
					<tr>
						<td id="df1"><button type="button" class="btn btn-danger btn-xs">-</button> Philip Lahm</td>
						<td id="df1val">$20m</td>
					</tr>
					<tr>
						<td id="df2"><button type="button" class="btn btn-danger btn-xs">-</button> Kolo Toure</td>
						<td id="df2val">$18m</td>
					</tr>
					<tr>
						<td id="df3"><button type="button" class="btn btn-danger btn-xs">-</button> Gerard Pique</td>
						<td id="df3val">$24m</td>
					</tr>
					<tr>
						<td id="df4"><button type="button" class="btn btn-danger btn-xs">-</button> Sergio Ramos</td>
						<td id="df4val">$22m</td>
					</tr>
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
					<tr>
						<td id="mf1"><button type="button" class="btn btn-danger btn-xs">-</button> Mesut Ozil</td>
						<td id="mf1val">$29m</td>
					</tr>
					<tr>
						<td id="mf2"><button type="button" class="btn btn-danger btn-xs">-</button> Andres Iniesta</td>
						<td id="mf2val">$20m</td>
					</tr>
					<tr>
						<td id="mf3"><button type="button" class="btn btn-danger btn-xs">-</button> David Silva</td>
						<td id="mf3val">$14m</td>
					</tr>
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
					<tr>
						<td id="fw1"><button type="button" class="btn btn-danger btn-xs">-</button> Lionel Messi</td>
						<td id="fw1val">$28m</td>
					</tr>
					<tr>
						<td id="fw2"><button type="button" class="btn btn-danger btn-xs">-</button> Cristiano Ronaldo</td>
						<td id="fw2val">$23m</td>
					</tr>
					<tr>
						<td id="fw3"><button type="button" class="btn btn-danger btn-xs">-</button> Antoinne Griezmann</td>
						<td id="fw3val">$21m</td>
					</tr>
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
					<tr>
						<td id="poolgk1"><button type="button" class="btn btn-success btn-xs">+</button> Petr Cech</td>
						<td id="poolgk1val">$21m</td>
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
					<tr>
						<td id="pooldef1"><button type="button" class="btn btn-success btn-xs">+</button> Ashley Cole</td>
						<td id="pooldef1val">$10m</td>
					</tr>
					<tr>
						<td id="pooldef2"><button type="button" class="btn btn-success btn-xs">+</button> Rio Ferdinand</td>
						<td id="pooldef2val">$13m</td>
					</tr>
					<tr>
						<td id="pooldef3"><button type="button" class="btn btn-success btn-xs">+</button> Carles Puyol</td>
						<td id="pooldef3val">$22m</td>
					</tr>
					<tr>
						<td id="pooldef4"><button type="button" class="btn btn-success btn-xs">+</button> Dani Alves</td>
						<td id="pooldef4val">$17m</td>
					</tr>
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
					<tr>
						<td id="poolmf1"><button type="button" class="btn btn-success btn-xs">+</button> Arjen Robben</td>
						<td id="poolmf1val">$28m</td>
					</tr>
					<tr>
						<td id="poolmf2"><button type="button" class="btn btn-success btn-xs">+</button> Xavi</td>
						<td id="poolmf2val">$25m</td>
					</tr>
					<tr>
						<td id="poolmf3"><button type="button" class="btn btn-success btn-xs">+</button> Luka Modric</td>
						<td id="poolmf3val">$19m</td>
					</tr>
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
					<tr>
						<td id="poolfw1"><button type="button" class="btn btn-success btn-xs">+</button> Alexis Sanchez</td>
						<td id="poolfw1val">$26m</td>
					</tr>
					<tr>
						<td id="poolfw2"><button type="button" class="btn btn-success btn-xs">+</button> Zlatan Ibrahimovic</td>
						<td id="poolfw2val">$20m</td>
					</tr>
					<tr>
						<td id="poolfw3"><button type="button" class="btn btn-success btn-xs">+</button> Diego Costa</td>
						<td id="poolfw3val">$18m</td>
					</tr>
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