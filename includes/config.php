<?php
// OSBSS Copyright 2016

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

// Setting to specify total number of chambers. This MUST be exact as in the database otherwise ERRRRROR.
// To-Do: Automatically figure out if table exists or not. No nee for now.
$chambers = 6; 
?>