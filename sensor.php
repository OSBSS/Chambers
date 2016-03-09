<?php
//This file stores the data sent from the CC3000 in the local database.

include 'includes/db.php'; // connecting to database
include 'includes/config.php'; // settings some configurations 

// Store data
if ($_GET["temp"] || $_GET["co2"] || $_GET["rh"] || $_GET["lux"] || $_GET["etemp"]) {
    $temp = $_GET["temp"];
    $co2  = $_GET["co2"];
    $rh  = $_GET["rh"];
    $lux  = $_GET["lux"];
    $etemp  = $_GET["etemp"];
	$sql = "insert into lab_temp (timestamp, temp, co2, rh, lux, etemp) values (now(), $temp, $co2, $rh, $lux, $etemp)";
	mysql_query($sql);
	echo "Success";
//echo now();
}
else 
	echo "\nFailed";
	
?>