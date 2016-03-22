<?php
// OSBSS Copyright 2016
// Sensors.php -  Retrieves data sent from the CC3000 and stores in the local database.

if ($_GET["temp"] || $_GET["co2"] || $_GET["rh"] || $_GET["lux"] || $_GET["stemp"] || $_GET["src"]) {
// Get values from URL and store into its own variable
    $temp = $_GET["temp"];
    $co2  = $_GET["co2"];
    $rh  = $_GET["rh"];
    $lux  = $_GET["lux"];
    $stemp  = $_GET["stemp"];
    $src = $_GET["src"];
}

$file = 'log.txt';
$current = file_get_contents($file);

$ts = date('Y-m-d H:i:s');
//$current .= "$ts - Source: $src<br>";

include 'includes/db.php'; // connecting to database
include 'config.php'; // settings some configurations 

// SQL command to insert into database
$sql = "insert into $src (timestamp, temp, rh, lux, stemp, co2) values (now(), $temp, $rh, $lux, $stemp, $co2)";

// Check if query was successful
if(mysql_query($sql)) {
	echo "Success"; 
	$current .= "$ts - Temp: $temp, RH: $rh, Lux: $lux, sTemp: $stemp, CO2: $co2 - Source: $src - Success<br>";
	if($src=="node5") {
		$current .= "<br>";
	}	
}
else {
	echo "Failed";
	$current .= "$ts - Source: $src - Failed<br>";
}
file_put_contents($file, $current); // Write Log to File
?>