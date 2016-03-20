<?php
// OSBSS Copyright 2016
// Sensors.php -  Retrieves data sent from the CC3000 and stores in the local database.

include 'includes/db.php'; // connecting to database
include 'config.php'; // settings some configurations 
$file = 'log.txt';
// Open the file to get existing content
$current = file_get_contents($file);
$ts = date('Y-m-d H:i:s');
$current .= "$ts - Receving...\n";

/* 	NOTE: Store data according to chamber number in src query string
* 	If src = node1, data will store in node1 table, and so on. 
*/

if ($_GET["temp"] || $_GET["co2"] || $_GET["rh"] || $_GET["lux"] || $_GET["stemp"] || $_GET["src"]) {
// Get values from URL and store into its own variable
    $temp = $_GET["temp"];
    $co2  = $_GET["co2"];
    $rh  = $_GET["rh"];
    $lux  = $_GET["lux"];
    $stemp  = $_GET["stemp"];
    $src = $_GET["src"];
    
$current .= "$ts - Received Data\n";

// SQL command to insert into database
$sql = "insert into $src (timestamp, temp, rh, lux, stemp, co2) values (now(), $temp, $rh, $lux, $stemp, $co2)";
mysql_query($sql);

$current .= "$ts - $sql\n";
// Write the contents back to the file
file_put_contents($file, $current);

// TO-DO: Need to figure a way out to send acknowledgement back to sender. 
echo "1"; 
$current .= "$ts - Data Inserted\n";
}
else 
	echo "0";
	$current .= "$ts - Insert Failed\n";
?>