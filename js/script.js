// OSBSS Copyright 2016

//Initializing ... 
$(document).ready(function(){
	$('#data').load('data.php');	
 	countdown();
}); 	

var countDown=6;
function countdown() {
        setInterval(function () {
            if (countDown == 1) {
                $('#data').load('data.php').fadeIn("slow");
                countDown=6;
            }
            countDown--;
            document.getElementById('counter').innerHTML = countDown;
            return countDown;
        }, 1000);
}