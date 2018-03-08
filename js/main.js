$(document).ready(function(){	

	$(".Portraits").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPortraits").css({"height" : "600px", "display" : "block"});
		$(".slider-portraits").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="right"><i class="fas fa-chevron-circle-up"></i></button>',
			prevArrow : '<button class="left"><i class="fas fa-chevron-circle-up"></i></button>'
		});
	});

	$(".Paysages").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgPaysages").css({"height" : "600px", "display" : "block"});
		$(".slider-paysages").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="right"><i class="fas fa-chevron-circle-up"></i></button>',
			prevArrow : '<button class="left"><i class="fas fa-chevron-circle-up"></i></button>'
		});
	});

	$(".Animaux").on("click", function(){
		$(".img, .slider").css("display", "none");
		$(".imgAnimaux").css({"height" : "600px", "display" : "block"});
		$(".slider-animaux").css("display", "block").slick({
			infinite : true,
			fade : true,
			nextArrow : '<button class="right"><i class="fas fa-chevron-circle-up"></i></button>',
			prevArrow : '<button class="left"><i class="fas fa-chevron-circle-up"></i></button>'
		});
	});
});