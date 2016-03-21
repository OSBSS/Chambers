// OSBSS Copyright 2016

//Initializing ... 
$(document).ready(function(){	
 	countdown();
}); 	

var countDown=5;
function countdown() {
        setInterval(function () {
            if (countDown == 0) {
                $('#data').load('data.php').fadeIn("slow");
                countDown=5;
            }
            countDown--;
            document.getElementById('counter').innerHTML = countDown;
            return countDown;
        }, 1000);
}

