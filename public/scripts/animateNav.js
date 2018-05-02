
$(window).bind("scroll",function() {
	var h = $("nav").height();
	if($(window).scrollTop() > 1 ){
		$("nav").addClass("fixed-top");
		$("#navFix").css("height",h);
	}else{
		$("nav").removeClass("fixed-top");
		/* $("body").append("<div style=\"height: 100px;\"> </div>") */
		$("#navFix").css("height","0px");
	}
});