$(document).ready(function(){
	$("#logo a").css({backgroundImage: "none"});
	
	$("#logo").mouseover(function() {
		$(this).prepend('<div class="logo-hover"></div>');
		$(".logo-hover").css({display: "none"}).fadeIn(200);
	}).mouseout(function() {
		$(".logo-hover").fadeOut(200, function() {
			$(this).remove();
		})
	});
});