$(document).click(function() {
    console.log('outside');
	$('.submenu').removeClass('show');
});

$(".dropdown-button").click(function(event) {
    console.log('inside');
	$('.submenu').toggleClass('show');
    event.stopPropagation();
});