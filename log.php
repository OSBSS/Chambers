<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 	auto_load(); //Call auto_load() function when DOM is Read
});
// AJAX reload
function auto_load() {
	$('#log').load('datalogs.php').fadeIn("slow");
}
setInterval(auto_load,1000); // refreshing after every 15 seconds
</script>
</head>
<body>
<a href="truncate.php?action=clear">Clear</a>
<br />
<div id="log"></div>
</body>
</html>