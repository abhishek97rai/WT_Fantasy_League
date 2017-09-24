<html lang="en">
<style>
<?php
//include ("css_scripts/dashboard.css");
?>
</style>
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="header">
			<h1>My Dashboard</h1>
		</div>
	</div>
	
	<?php
	include ("navbar.php");
	?>
	
	<div class="row" style="margin-left: 20px; margin-right: 20px; ">
		<div class="col-md-6">
			<h3>Your Last Week Scores</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Player</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Lionel Messi</td>
						<td>28</td>
					</tr>
					<tr>
						<td>Cristiano Ronaldo</td>
						<td>23</td>
					</tr>
					<tr>
						<td>Antoinne Griezmann</td>
						<td>21</td>
					</tr>
					<tr>
						<td>Mesut Ozil</td>
						<td>29</td>
					</tr>
					<tr>
						<td>Andres Iniesta</td>
						<td>20</td>
					</tr>
					<tr>
						<td>David Silva</td>
						<td>14</td>
					</tr>
					<tr>
						<td>Philip Lahm</td>
						<td>20</td>
					</tr>
					<tr>
						<td>Kolo Toure</td>
						<td>18</td>
					</tr>
					<tr>
						<td>Gerard Pique</td>
						<td>24</td>
					</tr>
					<tr>
						<td>Sergio Ramos</td>
						<td>22</td>
					</tr>
					<tr>
						<td>Manuel Neuer</td>
						<td>31</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<h3>Leaderboard</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Name</th>
						<th>Team</th>
						<th>Points</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Manas Shukla</td>
						<td>Lucknow Nawabs</td>
						<td>234</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Abhishek Rai</td>
						<td>Leicester Always</td>
						<td>219</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Nikhil Sapa</td>
						<td>Dharavi Warriors</td>
						<td>198</td>
					</tr>
				</tbody>
			</table>
			<br>
			<h3>Top 3 Goal Scorers</h3>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Rank</th>
						<th>Player</th>
						<th>Team</th>
						<th>Goals</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Lionel Messi</td>
						<td>Barcelona</td>
						<td>10</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Cristiano Ronaldo</td>
						<td>Real Madrid</td>
						<td>9</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Alexis Sanchez</td>
						<td>Arsenal</td>
						<td>7</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="row" style="margin-left: 20px; margin-right: 20px;">
		<div class="col-md-4">
			<h3>Weekly Total Points: 234</h3>
			<h3>Weekly Rank: 1</h3>
		</div>
		<div class="col-md-4">
			<h3>Overall Total Points: 234</h3>
			<h3>Overall Rank: 1</h3>
		</div>
	</div>
</body>
</html>
