$(document).ready(function(){	

	$(".Portraits").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPortraits").css({"height" : "600px", "display" : "block"});
		$(".slider-portraits").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});
	});

	$(".Paysages").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPaysages").css({"height" : "600px", "display" : "block"});
		$(".slider-paysages").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});
	});

	$(".Animaux").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgAnimaux").css({"height" : "600px", "display" : "block"});
		$(".slider-animaux").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="sliderButton right"><i class="fas fa-angle-up"></i></i></button>',
			prevArrow : '<button class="sliderButton left"><i class="fas fa-angle-up"></i></i></button>'
		});
	});
});