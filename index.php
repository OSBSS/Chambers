<!DOCTYPE HTML>
<!-- OSBSS Copyright 2016 -->
<html>

<head>
<title>Chambers Project</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div id="data"></div>
<!--
<?php
	// Truncate tables action
	if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case 'truncate':
			for($x = 1; $x <= $chambers; $x++) {
				mysql_query("TRUNCATE TABLE chambers".$x.";");
				mysql_query("ALTER TABLE chambers".$x." AUTO_INCREMENT = 1");
				//echo "Data Cleared";
			}
			header("Location: " . $_SERVER['REQUEST_URI']);
			break;
		}
	}
?>
-->
<p style="clear:both;"></p>
<br />
<footer style="text-align:center;">Copyright &copy; 2016 OSBSS - BERG Lab</footer>
<br />
</body>

<!-- This is the the end. Skyfall. -->
</html>