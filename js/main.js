$(document).ready(function(){	

	$(".Portraits").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPortraits").css({"width" : "900px", "display" : "block"});
		$(".slider-portraits").css("display", "block").slick({
			infinite : true,
			dots : true
		});
	});

	$(".Paysages").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPaysages").css({"width" : "900px", "display" : "block"});
		$(".slider-paysages").css("display", "block").slick({
			infinite : true,
			dots : true
		});
	});

	$(".Animaux").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgAnimaux").css({"width" : "900px", "display" : "block"});
		$(".slider-animaux").css("display", "block").slick({
			infinite : true,
			dots : true,
			centerMode : true
		});
	});

});