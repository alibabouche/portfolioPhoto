$(document).ready(function(){	

	$(".Portraits").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPortraits").css({"display" : "block", "position" : "relative"});
		$(".slider-portraits").fadeIn(1000).slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});	
	});

	$(".Paysages").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPaysages").css({"display" : "block", "position" : "relative"});
		$(".slider-paysages").fadeIn(1000).slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});
	});

	$(".Animaux").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgAnimaux").css({"display" : "block"});
		$(".slider-animaux").fadeIn(1000).slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});
	});

	$("h1 + nav ul li").on("click",function(){
		$(".bio").css("display", "none");
		$(".footer").css("position", "static")
	});	

});