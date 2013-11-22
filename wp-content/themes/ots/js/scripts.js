$(function(){

    // Mobile Nav BTN
	$('header .btn-mobile').click(function(){
		$('header .main-nav').toggleClass('show');
		return false;
	});

    // Modal
	$('.btn-video').on('click',function(e){
		e.preventDefault();
		$('.modal').addClass('show');
	});

	$('.modal .close, .modal-bg').on('click',function(e){
		e.preventDefault();
		$('.modal').removeClass('show');
	});
	
	// FAQs
	$.fn.slideFadeToggle  = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
    };
	
	$('.answer').hide();
    $('.question').on('click',function(e){
		e.preventDefault();
		$(this).parent().find('.answer').slideFadeToggle();
	});

    $('.answer .close').on('click',function(e){
		e.preventDefault();
		$(this).parent().slideFadeToggle();
	});


});