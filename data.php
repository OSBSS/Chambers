<h2 style="text-align:center">Chambers Sensor Readings</h2>
<div style="text-align: center"><a href="truncate.php?action=truncate">Clear Database</a> | <a href="log.php" target="_blank">Log</a> | <a href="edit.php" target="_blank">Edit Nodes</a> | Reloading in <span id="counter"></span> second(s).</div>
<!--p style="text-align:center; color: red;"><a href="index.php?action=truncate">Clear Database</a></p-->
<p style="clear:both;"></p>
<br />
<div class="container">
<div class="row">
<?php
	include 'includes/db.php'; // Connect to DB
	include 'config.php';  // Import configurations  
    // Start Loop
    for($x = 1; $x <= $nodes; $x++) {   			
		// Generate a grid to display table and its data
		$sql = "SELECT name FROM nodes where id = $x";
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
		echo '<div class="col-md-4">';
		echo '<h4 style="text-align:center; margin-bottom:-15px;">'. $row['name'] . '</h3>';
		echo '<br />';

		echo '<table cellpadding="0" cellspacing="0" class="db-table">';
		echo '<thead><tr><th>Data Point #</th><th>Time</th><th>Temperature</th><th>CO<sub>2</sub></th><th>Relative Humidity</th><th>Light Intensity</th><th>Surface Temperature</th></tr></thead>';
		// SQL query to get all data 
		$sql = "SELECT * FROM node$x ORDER BY id DESC LIMIT 1";
		// echo $sql; Debug test to see if query is correct
		$result = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($result);
        // Display data
        echo "<tbody><tr><td>" . $row['id'] . "</td><td> " . $row['timestamp'] . "</td><td> " . $row['temp'] . "&deg;C</td><td> " . $row['co2'] . " ppm</td><td> " . $row['rh'] . "%</td><td> " . $row['lux'] . " lux</td><td> " . $row['stemp'] . "&deg;C</td></tr></tbody>"; 
		echo '</table>';
		echo '<div style="text-align: center"><a href="export.php?table=node'.$x.'">Export</a></div>';
		echo '</div>';
	}
	// End Loop
?>
</div>
</div>