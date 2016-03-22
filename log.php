<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
 	load(); //Call auto_load() function when DOM is Read
 	updateScroll();
});
// AJAX reload
function load() {
	$('#log').load('log.txt');
}
setInterval(load,1000);

function updateScroll(){
    var element = document.getElementById("log");
    element.scrollTop = element.scrollHeight;
}
setInterval("updateScroll",1000);
</script>
<style>
#top {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  width: 100%;
  height: 30px;
  background-color: #FFF;
  margin: 10px 10px:
}
</style>
</head>
<body>
<div id="top"><a href="truncate.php?action=clear">Clear</a></div>
<br />
<div id="log"></div>
</body>
</html>