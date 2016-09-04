jQuery( document ).ready(function($) {

	$('.slider').flickity({
		
		// nav: true,
		// dots: false, 
		// items:1,
		// center: true,
		// loop: true,
		// navText: ['<span class="ion-ios-arrow-back"></span>','<span class="ion-ios-arrow-forward"></span>']
	});

	var scrollTop = $('#scroll-to-top');

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			scrollTop.fadeIn();
		} else {
			scrollTop.fadeOut();
		}
	});
	
	//Click event to scroll to top
	scrollTop.click(function(e){
		e.preventDefault();
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

	$("#mobile-menu").on('click',function(e) {
		e.preventDefault();
	   	$(this).toggleClass("is-active");
	   	$('.mastheader').toggleClass("is-active-mb");
	});

	$(".menu-item-has-children").on('click',function(e) {
		e.preventDefault();
	   	$(this).toggleClass('submenu-is-active');
	});
	
	$('.search-button').on('click', function(e){
		e.preventDefault();
		$('#search-form-overlay').addClass('is-active');
	});

	$('.close-search').on('click', function(e){
		e.preventDefault();
		$('#search-form-overlay').removeClass('is-active');
	});

});