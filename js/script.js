// OSBSS Copyright 2016

/* Initializing ... 
$(document).ready(function(){	
 	auto_load(); //Call auto_load() function when DOM is Read
 	countdown();
}); 	
*/
var countDown=5;

function countdown() {
        setInterval(function () {
            if (countDown == 0) {
                return;
            }
            countDown--;
            document.getElementById('counter').innerHTML = countDown;
            return countDown;
        }, 1000);
    }

countdown();
 	
 	
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







