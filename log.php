<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 	load(); //Call auto_load() function when DOM is Read
});
// AJAX reload
function load() {
	$('#log').load('log.txt');
	var objDiv = document.getElementById("log");
	objDiv.scrollTop = objDiv.scrollHeight;
}
setInterval(load,1000);
</script>
<style>
#top {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  width: 100%;
  height: 23px;
}
</style>
</head>
<body>
<div id="top"><a href="truncate.php?action=clear">Clear</a></div>
<br />
<div id="log" style="height: 600px;"></div>
</body>
</html>