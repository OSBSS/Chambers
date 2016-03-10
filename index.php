<!DOCTYPE HTML>
<!-- OSBSS Copyright 2016 -->
<html>
<head>
<title>Chambers Project</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://www.osbss.com/wp-content/uploads/2015/01/fav2.png"/>
<!--  CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/style.css" />
<!-- JS Scripts  -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
<h2 style="text-align:center">Chambers Sensor Readings</h2>
<p style="text-align:center; color: red;"><a href="index.php?action=truncate">Clear Database</a></p>
<p style="clear:both;"></p>
<br />

<div class="container">
<div id="readings" style="margin: 0 auto;">
<div class="row">
<?php
    include 'includes/db.php'; // Connect to DB
    include 'includes/config.php';  // Import required configurations
    
    // Start Loop
    for($x = 1; $x <= $chambers; $x++) {   		
		
		// Generate a grid to display table and its data
		echo '<div class="col-md-3">';
		echo '<h3 style="text-align: center">Chamber '. $x . '</h2>';
		
		// Table start
		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<thead><tr><th>Data Point #</th><th>Time</th><th>Temperature</th><th>CO<sub>2</sub></th><th>Relative Humidity</th><th>Light Intensity</th><th>Surface Temperature</th></tr></thead>';
		//$table = 'chambers' . $x . '';
		// SQL query to get all data 
		$sql = "SELECT * FROM chambers$x ORDER BY id DESC LIMIT 1";
		echo $sql;
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
        
        // Display data
        echo "<tbody><tr><td>" . $row['id'] . "</td><td> " . $row['timestamp'] . "</td><td> " . $row['temp'] . "&deg;C</td><td> " . $row['co2'] . " ppm</td><td> " . $row['rh'] . "%</td><td> " . $row['lux'] . " lux</td><td> " . $row['stemp'] . "&deg;C</td></tr></tbody>"; 
		echo '</table>';
		// Table end
		
		echo '<a style="text-align:center;" href="export.php?table=chamber'.$x.'">Export</a>';
		echo '</div>';
	}
	// End Loop
	
	// Truncate tables action
	if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case 'truncate':
			for($x = 1; $x <= $chambers; $x++) {
				mysql_query("TRUNCATE TABLE chambers".$x.";");
				mysql_query("ALTER TABLE chambers".$x." AUTO_INCREMENT = 1");
				//echo "Data Cleared";
				header("Location: " . $_SERVER['REQUEST_URI']);
			}
			break;
		}
	}
 ?>
<!-- This is the the end. Skyfall. -->
</div>
</div>
</div>
<p style="clear:both;"></p>
<br />
<footer style="text-align:center;">Copyright &copy; 2016 OSBSS - BERG Lab</footer>
<br />
</body>
</html>