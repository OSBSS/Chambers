// OSBSS Copyright 2016

// AJAX reload function
function auto_load() {
	$('#data').load('data.php').fadeIn("slow");
}
setInterval(auto_load,15000); // refreshing after every 15 seconds

$(document).ready(function(){
 	auto_load(); //Call auto_load() function when DOM is Read
});

/*************************************************************/