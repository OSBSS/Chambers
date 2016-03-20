<!DOCTYPE HTML>
<!-- OSBSS Copyright 2016 -->
<html>

<head>
<title>Chambers Project - Logs</title>
</head>

<body>
<a href="log.php?action=clear">Clear</a>
<br />

<?php
    $myfilename = "log.txt";
    if(file_exists($myfilename)){
      echo file_get_contents($myfilename);
    }
    
    if(isset($_GET['action'])) {
		switch($_GET['action']) {
			case 'clear':
					file_put_contents("log.txt", "");
					header("Location: http://data.osbss.com/chambers/logs.php");
					echo "Log cleared!";
					break;
		}
	}
?>

</html>
</body>