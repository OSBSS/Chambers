<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#log").load("includes/datalogs.php").fadeIn("slow");
	setInterval(auto_load,2000); // refreshing after every 1 second
});
</script>
</head>
<body>
<a href="truncate.php?action=clear">Clear</a>
<br />
<div id="log"></div>
</body>
</html>