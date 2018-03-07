$(document).ready(function(){	

	$(".Portraits").on("click", function(){
		$(".img").hide();
		$(".imgPortraits").show();
		$(".slider").slick({
		});
	});

	$(".Paysages").on("click", function(){
		$(".img").hide();
		$(".imgPaysages").show();
		$(".slider").slick({
		});
	});

	$(".Animaux").on("click", function(){
		$(".img").hide();
		$(".imgAnimaux").show();
		$(".slider").slick({
		});
	});

});