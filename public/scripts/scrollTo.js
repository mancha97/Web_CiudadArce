$(".scroll").click(function( event ) {
	var id = $(this).attr('href');
	event.preventDefault();
	$('body').scrollTo(id, 1000);
});


