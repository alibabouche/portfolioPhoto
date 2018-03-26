$(document).ready(function(){	

	var idPhoto;

	//slider slick portraits
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
	//slider slick paysages
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
	//slider slick animaux
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

	// fixer le footer en bas s'il n'y a pas assez de contenu
	$("h1 + nav ul li").on("click",function(){
		$(".bio").css("display", "none");
		$(".footer").css("position", "static")
	});	

	//animation du tableau
	$("table tr").on("mouseenter", function(){
		$(this).css({ 
	    "transition": "0.2s ease",
	    "background-color": "#0a58d1"
		});
	});
	$("table tr").on("mouseout", function(){
		$(this).css({
	    "transition": "0.2s ease",
	    "background-color": "#0e64ea"
		});	
	});

	//Requête ajax pour suppression des images	

	$("td[data-id]").on("click", function(){

		idPhoto = $(this).attr("data-id");
		$.ajax({
			url: './connectionPDO.php',
			type: 'POST',
			data: 'idPhoto=' + idPhoto,
			success : function(code_html, statut){
				alert("Votre photo à bien été supprimé. Statu:"+statut);
				window.location.reload();
			},
			error : function(resultat, statut, erreur){
				alert("La photo n'a pas pue être supprimée.")
			}
		});	
	});

});