<?php
	include("config.php");
	session_start();
	$error="";
	$count=0;
	$result="";
	$success = false;
	
	if(!isset($_SESSION['current_username'])){
	if($_POST){
		
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
		$fullname = mysqli_real_escape_string($db,$_POST['user_full_name']);
		$team_name = mysqli_real_escape_string($db,$_POST['team']);
		//$mypassword = password_hash($mypassword,PASSWORD_BCRYPT);
		
		$sql = "SELECT user_id FROM login WHERE user_name = '$myusername'";
		
		if($result = mysqli_query($db,$sql)){
			$count = mysqli_num_rows($result);
			if($count == 1){
			$error = 'username already exists. Please Select another :(';
			}else{
				$sql = "INSERT INTO `login` (`user_id`, `user_full_name`, `user_name`, `user_password`) VALUES (NULL, '$fullname', '$myusername', '$mypassword')";
				$result = mysqli_query($db,$sql);
				
				$sql = "SELECT user_id FROM login WHERE user_name = '$myusername'";
				$result_alt = mysqli_query($db,$sql);
				$arr = mysqli_fetch_assoc($result_alt);
				$id = $arr['user_id'];
				
				$sql = "INSERT INTO `team_details` (`team_id`, `user_id`, `team_name`) VALUES (NULL, '$id', '$team_name')";
				$result_alt = mysqli_query($db,$sql);
			
			if($result != NULL){
				$success = true;
			}
		}
		}else{
			$error = 'invalid entry/database corrupt, just like Modi sarkar :O :(';
		}
	}
	}else{
		header("Location: index.php");
		die();
	}
	
	include ("navbar.php");
?>


<html lang="en">
<head>
  <title>Fantasy League - Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css" href = "css_scripts/dashboard.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" style = "margin-left: 20px; margin-right: 20px; background-color: #000000;">
  <h2 align="center">Register For Fantasy</h2>
  <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_full_name" placeholder="Enter Full Name" name="user_full_name">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">UserName:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Team Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Enter Team Name" name="team">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
      </div>
	  <?php if(!$success){
		  ?><p><?php echo "$error";?></p>
	  <?php
	  }else{
		  ?><p>SUCESS! Click <a href=login.php>HERE</a> to login</p><?php
	  }
	  ?>
    </div>
  </form>
</div>

</body>
</html>