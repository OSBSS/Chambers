// OSBSS Copyright 2016

$(document).ready(function(){
 	auto_load(); //Call auto_load() function when DOM is Ready
});

setInterval(auto_load,10000); // refreshing after every 5 seconds

// AJAX reload function
function auto_load() {
	$('#data').load('data.php').fadeIn("slow");
}); 