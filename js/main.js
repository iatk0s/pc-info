$(document).ready(function(){
	/*Mostrar menu movil*/
	var NavBar=$('.NavBar');
	var body=$('body,html');
	var btnMenu=$('.btn-menu');
	$('.btn-menu').on('click', function(e){
		e.preventDefault();
		if(NavBar.hasClass('NavBar-show')){
			btnMenu.removeClass('zmdi-close').addClass('zmdi-more-vert');
			NavBar.removeClass('NavBar-show');
			body.removeClass('No-Scroll');
		}else{
			btnMenu.removeClass('zmdi-more-vert').addClass('zmdi-close');
			NavBar.addClass('NavBar-show');
			body.addClass('No-Scroll');
		}
	});
	/*Mostrar carrito de compras*/
	$('.btn-shopcart').on('click', function(e){
		e.preventDefault();
		var kart=$('.ShoppingCart');
		if(kart.hasClass('ShoppingCart-show')){
			kart.removeClass('ShoppingCart-show');
		}else{
			kart.addClass('ShoppingCart-show');
		}
		btnMenu.removeClass('zmdi-close').addClass('zmdi-more-vert');
		NavBar.removeClass('NavBar-show');
		body.removeClass('No-Scroll');
	});
	/*Mostrar modal*/
	$('.modal-trigger').leanModal({
		dismissible: false
	});
	/*Mostrar tooltips*/
	$('.tooltipped').tooltip({delay: 50});
});

$(document).ready(function(){
    $('.zoom').hover(function() {
        $(this).addClass('transition');
    }, function() {
        $(this).removeClass('transition');
    });
});


$(document).ready(main);
 
var contador = 1;
 
function main () {
	$('.menu_bar').click(function(){
		if (contador == 1) {
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
 
	// Mostramos y ocultamos submenus
	$('.submenu').click(function(){
		$(this).children('.children').slideToggle();
	});
}

