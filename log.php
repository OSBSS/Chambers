<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script>
function auto_load() {
	$('#log').load('includes/datalogs.php').fadeIn("slow");
}
setInterval(auto_load,1000); // refreshing after every 1 second
</script>
</head>
<body>
<a href="truncate.php?action=clear">Clear</a>
<br />
<div id="log"></div>
</body>
</html>