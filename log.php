<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 	load(); //Call auto_load() function when DOM is Read
 	window.setInterval(function() {
 		var elem = document.getElementById('log');
  		elem.scrollTop = elem.scrollHeight;
	}, 1000);
});
// AJAX reload
function load() {
	$('#log').load('log.txt');
}
setInterval(load,1000);


</script>
</head>
<body>
<a href="truncate.php?action=clear">Clear</a>
<br />
<div id="log"></div>
</body>
</html>