<?php 

include ('config.php');
$result = mysqli_query($db,"SELECT * from results");
$line = mysqli_fetch_assoc($result);

if($line['show_res'] == 0){
	header("Location: index.php");
	die();
	//echo("<script> alert('ENTERED in show_res = 0') </script>");
}
?>

<html>
<head>
	<title>Scores</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
	<link rel = "stylesheet" type = "text/css" href = "css_scripts/scores.css" />
</head>
<body>
	<div class="container-fluid" style="padding: 0px;">
		<div class="header" style="width: 100%;">
			<div style="display: margin-left: 0px; inline-block; float: left; text-align:right; padding-right: 10px; width: 50%; background-color: red; color: white;">
				<h1>Weekly </h1>
			</div>
			<div style="display: inline-block; width: 50%; float: left; text-align:left; padding-left: 10px; background-color: blue; color: white;">
				<h1>Scores </h1>
			</div>
		</div>
	</div>
	<?php
	include ("navbar.php");
	?>
	<div class="row" style="margin-left: 20px; margin-right: 20px;">
		<div class="col-md-12">
			<h2 style="text-align:center;">Fixtures & Results</h2>
			<br>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#week1">Game Week 1</a></li>
				<li><a data-toggle="tab" href="#week2">Game Week 2</a></li>
				<li><a data-toggle="tab" href="#week3">Game Week 3</a></li>
				<li><a data-toggle="tab" href="#week4">Game Week 4</a></li>
				<li><a data-toggle="tab" href="#week5">Game Week 5</a></li>
			</ul>
			<div class="tab-content">
				
				<div id="week1" class="tab-pane fade in active" align="center">
					<br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal1">
					<div class="match1">
						<h3 class="title1">Match 1</h3>
						<div class="score1">
							<h3>Electabuzz United <span class="goals1">1 - 4</span> <span align='right' style='padding-left : 60px;'>Vandelay Wolves</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal1" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Anthony Martial 7' (Philip Lahm)</p>
									<br>
									<p>Saves - Victor Valdes: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Alvaro Morata 12' (Paulo Dybala)</p>
									<p>Cristiano Ronaldo 25',62' (Filipe Luis)</p>
									<p>Paulo Dybala 88' (Luka Modric)</p>
									<br>
									<p>Saves - Gianluigi Buffon: 1</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal2">
					<div class="match2">
						<h3 class="title2">Match 2</h3>
						<div class="score1">
							<h3>Kanto City <span class="goals1">2 - 2</span> <span align='right' style='padding-left : 60px;'>Stepford Palace</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal2" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Neymar 12' </p>
									<p>Gareth Bale 45' (Neymar)</p>
									<br>
									<p>Saves - Joe Hart: 1</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Lionel Messi 60' (Angel Di Maria)</p>
									<p>Lionel Messi 70' (Angel Di Maria)</p>
									<br>
									<p>Saves - Claudio Bravo: 1</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal3">
					<div class="match3">
						<h3 class="title3">Match 3</h3>
						<div class="score1">
							<h3>Nameks <span class="goals1">1 - 0</span> <span align='right' style='padding-left : 60px;'>Los Santos Albion</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal3" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Kingsley Coman 80' (Ramsey)</p>
									<br>
									<p>Saves - Manuel Neuer: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Saves - Diego Lopez: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal4">
					<div class="match4">
						<h3 class="title4">Match 4</h3>
						<div class="score1">
							<h3>Zion Rovers <span class="goals1">1 - 3</span> <span align='right' style='padding-left : 60px;'>Springfield United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal4" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Mohd Salah 12'(Marco Asensio)</p>
									<br>
									<p>Saves - Thibaut Cortouis: 6</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Luis Suarez 6' (Arjen Robben)</p>
									<p>Luis Suarez 8'</p>
									<p>Arjen Robben 30' (Andres Iniesta)</p>
									<br>
									<p>Saves - David De Gea: 4</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal5">
					<div class="match5">
						<h3 class="title5">Match 5</h3>
						<div class="score1">
							<h3>Gotham United <span class="goals1">0 - 1</span> <span align='right' style='padding-left : 60px;'>Central City</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal5" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Iker Casillas: 6</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Marcelo 6' (Sergio Aguero)</p>
									<br>
									<p>Saves - Petr Cech: 6</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
				</div>
				
				
				<div id="week2" class="tab-pane fade" align="center">
					<br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal6">
					<div class="match1">
						<h3 class="title1">Match 1</h3>
						<div class="score1">
							<h3>Electabuzz United <span class="goals1">1 - 2</span> <span align='right' style='padding-left : 60px;'>Kanto City</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal6" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Ousmane Dembélé 44'(Gus Payet)</p>
									<br>
									<p>Saves - Victor Valdes: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Santi Cazorla 7' (Pepe)</p>
									<p>Neymar 71' (Pjanic)</p>
									<br>
									<p>Saves - Joe Hart: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal7">
					<div class="match2">
						<h3 class="title2">Match 2</h3>
						<div class="score1">
							<h3>Nameks <span class="goals1">0 - 1</span> <span align='right' style='padding-left : 60px;'>Stepford Palace</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal7" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Manuel Neuer: 7</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Robert Lewandowski 67' (N'Golo Kante)</p>
									<br>
									<p>Saves - Claudio Bravo: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal8">
					<div class="match3">
						<h3 class="title3">Match 3</h3>
						<div class="score1">
							<h3>Zion Rovers <span class="goals1">2 - 3</span> <span align='right' style='padding-left : 60px;'>Los Santos Albion</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal8" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Giorgio Chiellini 51'(Marco Asensio)</p>
									<p>Lacazette 69'(Marco Asensio)</p>
									<br>
									<p>Saves - Thibaut Cortouis: 5</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Eden Hazard 11' (Mesut Ozil)</p>
									<p>Harry Kane 20',66' (Chamberlain, Firmino)</p>
									<br>
									<p>Saves - Diego Lopez: 4</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal9">
					<div class="match4">
						<h3 class="title4">Match 4</h3>
						<div class="score1">
							<h3>Gotham United <span class="goals1">0 - 3</span> <span align='right' style='padding-left : 60px;'>Springfield United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal9" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Iker Casillas: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Pique 17' (Andres Iniesta)</p>
									<p>Luis Suarez 81' (Lemar)</p>
									<p>Arjen Robben 88' (Andres Iniesta)</p>
									<br>
									<p>Saves - David De Gea: 6</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal10">
					<div class="match5">
						<h3 class="title5">Match 5</h3>
						<div class="score1">
							<h3>Central City <span class="goals1">1 - 3</span> <span align='right' style='padding-left : 60px;'>Vandelay Wolves</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal10" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Sergio Aguero 74'(Rakitic)</p>
									<br>
									<p>Saves - Petr Cech: 5</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Alvaro Morata 9' (Luka Modric)</p>
									<p>Cristiano Ronaldo 17',61' (Dybala, Modric)</p>
									<br>
									<p>Saves - Gianluigi Buffon: 8</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
				</div>
				
				<div id="week3" class="tab-pane fade" align="center">
					<br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal11">
					<div class="match1">
						<h3 class="title1">Match 1</h3>
						<div class="score1">
							<h3>Electabuzz United <span class="goals1">0 - 2</span> <span align='right' style='padding-left : 60px;'>Nameks</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal11" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Victor Valdes: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Juan Mata 32' (Casemiro)</p>
									<p>Karim Benzema 90' (Sergio Ramos)</p>
									<br>
									<p>Saves - Manuel Neuer: 4</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal12">
					<div class="match2">
						<h3 class="title2">Match 2</h3>
						<div class="score1">
							<h3>Kanto City <span class="goals1">1 - 5</span> <span align='right' style='padding-left : 60px;'> Vandelay Wolves </span></h3>
						</div>
					</div>
					</a>
					<div id="myModal12" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Lukaku 45'(Gareth Bale)</p>
									<br>
									<p>Saves - Joe Hart: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Paulo Dybala 3',40',90' (Yaya Toure, Modric, Morata)</p>
									<p>Cristiano Ronaldo 7' (Sergio Busquets)</p>
									<p>Luka Modric 92' (Juanfran)</p>
									<br>
									<p>Saves - Gianluigi Buffon: 6</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal13">
					<div class="match3">
						<h3 class="title3">Match 3</h3>
						<div class="score1">
							<h3>Zion Rovers <span class="goals1">0 - 2</span> <span align='right' style='padding-left : 60px;'>Stepford Palace</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal13" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Thibaut Cortouis: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Lionel Messi 13' (Angel Di Maria)</p>
									<p>Antoinne Griezmann 80' (James Rodriguez)</p>
									<br>
									<p>Saves - Claudio Bravo: 9</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal14">
					<div class="match4">
						<h3 class="title4">Match 4</h3>
						<div class="score1">
							<h3>Gotham United <span class="goals1">3 - 4</span> <span align='right' style='padding-left : 60px;'>Los Santos Albion</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal14" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Mbappe 5'(Ribery)</p>
									<p>Jerome Boateng 43'(Reus)</p>
									<p>Kevin De Bruyne 88'(Reus)</p>
									<br>
									<p>Saves - Iker Casillas: 7</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Mesut Ozil 7' (Chamberlain)</p>
									<p>Firmino 14' (Eden Hazard)</p>
									<p>Vincent Kompany 65' (Eriksen)</p>
									<p>Harry Kane 5'(Eden Hazard)</p>
									<br>
									<p>Saves - Diego Lopez: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal15">
					<div class="match5">
						<h3 class="title5">Match 5</h3>
						<div class="score1">
							<h3>Central City <span class="goals1">0 - 0</span> <span align='right' style='padding-left : 60px;'>Springfield United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal15" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - David De Gea: 7</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Saves - Petr Cech: 9</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div id="week4" class="tab-pane fade" align="center">
					<br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal16">
					<div class="match1">
						<h3 class="title1">Match 1</h3>
						<div class="score1">
							<h3>Electabuzz United <span class="goals1">1 - 1</span> <span align='right' style='padding-left : 60px;'>Central City</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal16" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Gus Payet 22' (Vidal)</p>
									<br>
									<p>Saves - Victor Valdes: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Sergio Aguero 56' (Muller)</p>
									<br>
									<p>Saves - Petr Cech: 2</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal17">
					<div class="match2">
						<h3 class="title2">Match 2</h3>
						<div class="score1">
							<h3>Kanto City <span class="goals1">2 - 2</span> <span align='right' style='padding-left : 60px;'>Gotham United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal17" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Mats Hummels 8' (Neymar)</p>
									<p>Lukaku 68' (Gareth Bale)</p>
									<br>
									<p>Saves - Joe Hart: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>David Luiz 47' (Hector Bellerin)</p>
									<p>Marco Reus 66' (Mbappe)</p>
									<br>
									<p>Saves - Iker Casillas: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal18">
					<div class="match3">
						<h3 class="title3">Match 3</h3>
						<div class="score1">
							<h3>Nameks <span class="goals1">0 - 0</span> <span align='right' style='padding-left : 60px;'>Zion Rovers</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal18" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Manuel Neuer: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Saves - Thibaut Cortouis: 2</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal19">
					<div class="match4">
						<h3 class="title4">Match 4</h3>
						<div class="score1">
							<h3>Springfield United <span class="goals1">1 - 2</span> <span align='right' style='padding-left : 60px;'>Stepford Palace</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal19" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Lemar 2'(Jamie Vardy)</p>
									<br>
									<p>Saves - David De Gea: 3</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Robert Lewandowski 48' (Antoinne Griezmann)</p>
									<p>Lionel Messi 67' (N'Golo Kante)</p>
									<br>
									<p>Saves - Claudio Bravo: 0</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal20">
					<div class="match5">
						<h3 class="title5">Match 5</h3>
						<div class="score1">
							<h3>Los Santos Albion <span class="goals1">1 - 1</span> <span align='right' style='padding-left : 60px;'>Vandelay Wolves</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal20" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Eriksen 86'(Eden Hazard)</p>
									<br>
									<p>Saves - Diego Lopez: 0</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Cristiano Ronaldo 27' (Paulo Dybala)</p>
									<br>
									<p>Saves - Gianluigi Buffon: 4</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div id="week5" class="tab-pane fade" align="center">
					<br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal21">
					<div class="match1">
						<h3 class="title1">Match 1</h3>
						<div class="score1">
							<h3>Electabuzz United <span class="goals1">0 - 2</span> <span align='right' style='padding-left : 60px;'>Los Santos Albion</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal21" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Victor Valdes: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Eden Hazard 43' (Mesut Ozil)</p>
									<p>Harry Kane 55' (Mesut Ozil)</p>
									<br>
									<p>Saves - Diego Lopez: 0</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal22">
					<div class="match2">
						<h3 class="title2">Match 2</h3>
						<div class="score1">
							<h3>Kanto City <span class="goals1">0 - 2</span> <span align='right' style='padding-left : 60px;'>Springfield United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal22" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Joe Hart: 1</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Arjen Robben 13' (Lemar)</p>
									<p>Thiago Silva 43' (Aubameyang)</p>
									<br>
									<p>Saves - David De Gea: 1</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal23">
					<div class="match3">
						<h3 class="title3">Match 3</h3>
						<div class="score1">
							<h3>Nameks <span class="goals1">1 - 3</span> <span align='right' style='padding-left : 60px;'>Central City</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal23" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Sergio Ramos 90'(Juan Mata)</p>
									<br>
									<p>Saves - Manuel Neuer: 5</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Sergio Aguero 44' (Paul Pogba)</p>
									<p>Muller 56' (Marcelo)</p>
									<p>Godin 77' (David Silva)</p>
									<br>
									<p>Saves - Petr Cech: 2</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal24">
					<div class="match4">
						<h3 class="title4">Match 4</h3>
						<div class="score1">
							<h3>Zion Rovers <span class="goals1">0 - 1</span> <span align='right' style='padding-left : 60px;'>Gotham United</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal24" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Saves - Thibaut Cortouis: 6</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Kevin De Bruyne 30' (Hector Bellerin)</p>
									<br>
									<p>Saves - Iker Casillas: 1</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
					<br><br>
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#myModal25">
					<div class="match5">
						<h3 class="title5">Match 5</h3>
						<div class="score1">
							<h3>Stepford Palace <span class="goals1">3 - 3</span> <span align='right' style='padding-left : 60px;'>Vandelay Wolves</span></h3>
						</div>
					</div>
					</a>
					<div id="myModal25" class="modal fade" role="dialog">
					<div class="modal-dialog">
					<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title" align="center">Goal Scorers</h4>
							</div>
							<div class="modal-body row">
								<div class="col-md-6" align="left">
									<p>Lionel Messi 19' (Antoinne Griezmann)</p>
									<p>Angel Di Maria 25' (N'Golo Kante)</p>
									<p>Robert Lewandowski 87' (Lionel Messi)</p>
									<br>
									<p>Saves - Claudio Bravo: 2</p>
								</div>
								<div class="col-md-6" align="right">
									<p>Paulo Dybala 21' (Cristiano Ronaldo)</p>
									<p>Paulo Dybala 44' (Modric)</p>
									<p>Sergio Busquets 50' (Modric)</p>
									<br>
									<p>Saves - Gianluigi Buffon: 3</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</body>
</html>