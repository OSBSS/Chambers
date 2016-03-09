<?php
/*
This file collects the data from the osbss database 
and puts it into specially formatted data arrays that 
can be read by high charts.
*/

include 'includes/db.php';

// get TIMESTAMP
$timestamp = mysql_query("SELECT timestamp FROM lab_temp");
$rows0 = array();
$rows0['name'] = 'Time';
while($r0 = mysql_fetch_assoc($timestamp)) {
    $rows0['data'][] = $r0['timestamp'];
}

// get TEMP
$temp = mysql_query("SELECT temp FROM lab_temp");
$rows1 = array();
$rows1['name'] = 'Temperature';
while($r1 = mysql_fetch_array($temp)) {
    $rows1['data'][] = $r1['temp'];
}

// get CO2
$co2 = mysql_query("SELECT co2 FROM lab_temp");
$rows2 = array();
$rows2['name'] = 'CO2';
while($r2 = mysql_fetch_assoc($co2)) {
    $rows2['data'][] = $r2['co2'];
}

//get RELATIVE HUMIDITY
$rh = mysql_query("SELECT rh FROM lab_temp");
$rows3 = array();
$rows3['name'] = 'Relative Humidity';
while($r3 = mysql_fetch_assoc($rh)) {
    $rows3['data'][] = $r3['rh'];
}

//get LIGHT INTENSITY
$lux = mysql_query("SELECT lux FROM lab_temp");
$rows4 = array();
$rows4['name'] = 'Light Intensity';
while($r4 = mysql_fetch_assoc($lux)) {
    $rows4['data'][] = $r4['lux'];
}

//get EXTERNAL TEMPERATURE
$etemp = mysql_query("SELECT etemp FROM lab_temp");
$rows5 = array();
$rows5['name'] = 'Air Stream Temperature';
while($r5 = mysql_fetch_assoc($etemp)) {
    $rows5['data'][] = $r5['etemp'];
}

$result = array();
array_push($result,$rows0);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);
array_push($result,$rows5);

print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?>
