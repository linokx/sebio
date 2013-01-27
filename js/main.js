(function($){
	
	var afficherMenu = function(e){
		if($('#menu').css('display')=='none'){
			$('#menu').slideDown();
		}
		else{
			$('#menu').slideUp();
		}
	}
	var afficherRecherche = function(e){
		if($('#search').css('top')=='0px'){
			$('#search').animate({top:'-100px'},400);
		}
		else{
			$('#search').animate({top:0},400);
		}
	}
	var afficherPanier = function(e){
		e.preventDefault();
		if($('#panier').css('right')=='0px'){
			$('#panier').animate({right:'-180px'},400);
		}
		else{
			$('#panier').animate({right:'0px'},400);
		}
		return false;
	}
	
	$(function(){
		$('.mobile .menu').on('click',afficherMenu);
		$('.mobile .recherche').on('click',afficherRecherche);
		$('.panier_mobile').on('click',afficherPanier);
	});

})(jQuery);
