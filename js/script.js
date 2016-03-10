// OSBSS Copyright 2016

// AJAX reload function
var auto_refresh = setInterval(
	function() {
		$('#data').load('../data.php').fadeIn("slow");
    }, 5000); 
// refreshing after every 5 seconds