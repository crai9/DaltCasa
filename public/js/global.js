$(document).click(function() {
    console.log('outside');
	$('.submenu').removeClass('show');
});

$(".dropdown-button").click(function(event) {
    console.log('inside');
	$('.submenu').toggleClass('show');
    event.stopPropagation();
});

$(".delete-5s").delay(5000).hide("slow");

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-91116845-1', 'auto');
ga('send', 'pageview');
