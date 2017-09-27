<head>
    <title>SIMULATION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js_scripts/transfers.js"></script>
</head>

<script>
function aight(){
		//alert(pos);
		$.post( 
            "simRes.php",
            { pid: 1},
            function(data) {
                alert(data);
				location.reload();
                }
            );
	}
	
function show(toShow){
		//alert(pos);
		$.post( 
            "show.php",
            { pid: toShow},
            function(data) {
                alert(data);
				location.reload();
                }
            );
	}	
</script>

<html>
<button onclick='aight()'>SIMULATE</button>
<br><br><br>
<button onclick='show(1)'>Show Results</button>
<br><br>
<button onclick='show(0)'>Hide Results</button>
</html>