<?php
// Allow display of errors on webpage for debugging
error_reporting(E_ALL);

// 1 = debugging ON
// 0 = debuggin OFF
ini_set('display_errors', 1); 

// Set app timezone to CST 
date_default_timezone_set('America/Chicago');

// Set database timezone to CST
$setTZ = "SET time_zone = 'America/Chicago'";
mysql_query($setTZ);
?>