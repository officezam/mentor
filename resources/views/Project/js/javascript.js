$(document).ready(function(){
		$(window).on("scroll", function(){
		if($(window).scrollTop()>10){
			$("header").addClass("header-color-change");
			$(".navbar-header").addClass("header-color-change");
			$("#myNavbar").addClass("header-color-change");
				$(".navbar-collapse").css({"border-top":"1px solid #cccccc"});
		
		}else{
			$("header").removeClass("header-color-change");
			$(".navbar-header").removeClass("header-color-change");
			$(".navbar-collapse").removeClass("header-color-change");
		}
	});
	
});