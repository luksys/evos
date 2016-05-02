$( document ).ready(function() {
	$('.slider').flickity({
		wrapAround: true,
		cellAlign: 'left',
		imagesLoaded: true,
		pageDots: false,
		arrowShape: {
		    x0: 0,
		    x1: 50, y1: 50,
		    x2: 90, y2: 50,
		    x3: 40
	    }
	    
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
	
});