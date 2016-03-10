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

// Truncate confirmation pop-up
var deleteLinks = document.querySelectorAll('.truncate');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
    event.preventDefault();

    var choice = confirm(this.getAttribute('data-confirm'));

    if (choice) {
      window.location.href = this.getAttribute('href');
    }
  });
}