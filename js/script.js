// OSBSS Copyright 2016

// Initializing ... 
$(document).ready(function(){	
 	//auto_load(); //Call auto_load() function when DOM is Read
 	countdown();
}); 	

function countdown(remaining) {
    if(remaining === 0)
        auto_load();
    document.getElementById('counter').innerHTML = remaining;
    setTimeout(function(){ countdown(remaining - 1); }, 1000);
}(5); 	
 	
 	
// AJAX reload
function auto_load() {
	$('#data').load('data.php').fadeIn("slow");
}
setInterval(auto_load,5000); // refreshing after every 5 seconds

/* Reload counter
function countdown() {
	var i = document.getElementById('counter');
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(countdown,1000);

*/







