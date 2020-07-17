var $ = jQuery;
$(document).ready(function () {
	$('.front .alert-block').addClass("col-sm-10");
/*-----------------------------------------------------------------------------------------------------------*/
	/*
	*this part is for fixed top menu
	*/
	var nav = $('header#navbar');
	num = nav.offset().top;
	$(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            nav.addClass("topfix");
			$('body').addClass("fixedmenu");
        } else {
            nav.removeClass("topfix");
			$('body').removeClass("fixedmenu");
        }
    });
/*-----------------------------------------------------------------------------------------------------------*/
if ($('.our-work').length){
	var totop = $('.our-work').offset().top;
	var totop = totop - 130;
	$(window).scroll(function () {
		if ($(this).scrollTop() > totop) {
			if (!$('.our-work').hasClass('counting')){		
//			} else{
				$('.our-work').addClass('counting');
				countup($('.counter'));
				countup($('.counter1'));
				countup($('.counter2'));
				countup($('.counter3'));
			}
		}
	});
}
/*-----------------------------------------------------------------------------------------------------------*/
$('.node-share').prepend('<a class="fa telegram" style="" title="تلگرام" target="_blank" href="https://telegram.me/share/url?url='+ window.location.href +'"></a>');







});

/*-----------------*/
var applyHeights = function(x, y , z) {
	if (x.height() < y.height()){
		x.height(y.height() + (z));
	}else if (x.height() > y.height()){
		y.height(x.height() + (z));
	}else 
		return false;
	
	return true;
}
/*-----------------*/
var applyHeight = function(x, y) {
		x.css({'height' : y.height()});
}
/*-----------------*/
var countup = function(x) {
var $dd = parseInt(x.text());
jQuery({someValue: 0}).animate({someValue: $dd }, {
	duration: 2000,
	easing:'swing', // can be anything
	step: function() { // called on every step
		x.text(Math.ceil(this.someValue));
	}
});
}
/*-----------------*/
