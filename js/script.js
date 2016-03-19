// OSBSS Copyright 2016

// Initializing ... 
$(document).ready(function(){
	countdown();
 	auto_load(); //Call auto_load() function when DOM is Read
});


// AJAX reload
function auto_load() {
	$('#data').load('data.php').fadeIn("slow");
}
setInterval(auto_load,15000); // refreshing after every 15 seconds


// Reload counter

function countdown() {
	var i = document.getElementById('counter');
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);