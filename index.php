<!DOCTYPE HTML>
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
<script type="text/javascript" src="js/main.js"></script>
  
</head>

<body>
<h2 style="text-align:center">Chambers Sensor Readings</h2>
<p style="text-align:center"><a href="index.php?action=truncate">Clear Database</a> | <a href="export.php" target="_blank" id ="export">Export Data</a> | Refreshing in <span id="counter">30</span> second(s).</p>
<p style="clear:both;"></p>
<br />
<div class="container">

<div id="readings" style="margin: 0 auto;">
<?php
    include '../db.php';
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $result = mysqli_query($con,"SELECT * FROM lab_temp ORDER BY id DESC LIMIT 1");

    //echo "<table>";
	echo '<table cellpadding="0" cellspacing="0" class="db-table">';
	echo '<thead><tr><th>Data Point #</th><th>Time</th><th>Temperature</th><th>CO<sub>2</sub></th><th>Relative Humidity</th><th>Light Intensity</th><th>Air Stream Temperature</th></tr></thead>';
	while($row = mysqli_fetch_array($result))
          {
          echo "<tbody><tr><td>" . $row['id'] . "</td><td> " . $row['timestamp'] . "</td><td> " . $row['temp'] . "&deg;C</td><td> " . $row['co2'] . " ppm</td><td> " . $row['rh'] . "%</td><td> " . $row['lux'] . " lux</td><td> " . $row['etemp'] . "&deg;C</td></tr></tbody>"; 
          }
	echo "</table>";
	//mysqli_close($con);

	if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case 'truncate':
			mysqli_query($con,"TRUNCATE TABLE lab_temp;");
			mysqli_query($con,"ALTER TABLE lab_temp AUTO_INCREMENT = 1");
			//echo "Data Cleared";
			header("Location: " . $_SERVER['REQUEST_URI']);
			break;
		}
	}
	//mysql_close($con);
	/*
	run this query to reset auto inc. delete all values first. 
	ALTER TABLE lab_temp AUTO_INCREMENT = 1
	*/
 ?>
</div>


</div>

 </div>
 <p style="clear:both;"></p>
 <br />
 <footer style="text-align:center;">Copyright &copy; 2016 OSBSS - BERG Lab</footer>
 <br />
 </body>
 </html>