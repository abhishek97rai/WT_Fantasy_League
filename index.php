<html>
<body>

<?php
$username = "Manas";
echo "My first PHP script!";
echo "<p>" . str_replace("world", $username, "Hello world!")."</p>"; // outputs Hello Manas!
$players = array("Manas", "Frye", "Psapa");
$points = array("Manas"=>"35", "Frye"=>"37", "Psapa"=>"43");
echo "<p>No.of Players are : " . count($players) . "</p>";

for($i=0;$i<count($players);$i++){
	$pname = $players[$i];
	echo "<p> Player ".($i+1).": $players[$i] $points[$pname] </p>";
}

echo "<br>";

//alt syntax
foreach($points as $x => $x_value) {
    echo "Player: " . $x . ", Team: " . $x_value;
    echo "<br>";
}

//to sort the players acc to points
echo"<br> Sorted Players : <br>";
arsort($points);
foreach($points as $x => $x_value) {
    echo "Player: " . $x . ", Team: " . $x_value;
    echo "<br>";
}

echo "<br>".$_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
if(isset($_SERVER['HTTP_REFERER'])){
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
}
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>

<p><a href="/Fantasy/login.php">login</a></p>

</body>
</html>