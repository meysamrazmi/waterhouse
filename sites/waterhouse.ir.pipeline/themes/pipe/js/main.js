var $ = jQuery;
$(document).ready(function () {
	$('.front .alert-block').addClass("col-sm-10");
	
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
/*---------------------------------fixing right sidebar of colleges node--------------------------------------*/
$(window).load(function(){
	if ($('.node-type-course #block-views-college-block ').length){
		var totop = $('.node-type-course #block-views-college-block ').offset().top;
		var totop2 = $('footer').offset().top - $('.node-type-course #block-views-college-block ').height() ;
		$(window).scroll(function () {
			if ($(this).scrollTop() > totop && $(this).scrollTop() < totop2) {
				$('.node-type-course #block-views-college-block ').addClass('fixed');
				$('.node-type-course #block-views-college-block ').removeClass('end');
			}
			else if ($(this).scrollTop() > totop2){
				$('.node-type-course #block-views-college-block ').addClass('end');
			}
			else{
				$('.node-type-course #block-views-college-block ').removeClass('fixed');
				$('.node-type-course #block-views-college-block ').removeClass('end');
			}
		});
	}
});

/*-----------------------------------------------------------------------------------------------------------*/
$('.node-share').prepend('<a class="fa telegram" style="" title="تلگرام" target="_blank" href="https://telegram.me/share/url?url='+ window.location.href +'"></a>');

//var color = window.getComputedStyle( document.querySelector('body'), ':before' ).getPropertyValue('background-color');
if(window.getComputedStyle(document.querySelector('body'), ':before' ).getPropertyValue('background-color') == "rgb(255, 255, 255)" ){
	$('body').addClass('has-bg');
	$('header#navbar').after($('h1.page-header').outerHTML());
	$('body > h1.page-header').addClass('container');
}

$('#uc-cart-view-form .form-actions button:last-child,#edit-continue ,form#uc-zarinpal-pay-submission-form .btn').addClass('btn btn-success');
$('#edit-continue-shopping, form#uc-cart-checkout-review-form .btn').addClass('btn btn-primary');
$('#edit-empty,#edit-cancel').addClass('btn btn-danger'); 
$('.page-cart,.page-college').addClass('gray-main');
$('.uc-cart-empty, .page-cart-zarinpal-complete').attr('zdepth' , '1').addClass('paper');
$('.view-uc-orders-user tbody').addClass('paper');




$('div#billing-address-pane td input').focusin(function(){
	$(this).parents('tr').addClass('active');
	$(this).parents('tr').removeClass('t-muted');
});
$('div#billing-address-pane td input').focusout(function(){
	if( !$(this).val() ) {
		$(this).parents('tr').removeClass('active');
    }else{
		$(this).parents('tr').addClass('t-muted');
	}
});
$('div#billing-address-pane td input').each(function(){
	if( !$(this).val() ) {
    }else{
		$(this).parents('tr').addClass('active');
		$(this).parents('tr').addClass('t-muted');
	}
});
$('div#billing-address-pane td select option:nth-child(1)').text('- استان -');
$('div#billing-address-pane td > span.form-required').each(function(){
	var req_form = $(this).outerHTML();
	$(this).parents('tr').append(req_form);
	$(this).parents('tr').children('.form-required').text('* ضروری است')
	$(this).remove();
});

$('.uc-cart-checkout-form .form-actions').prepend('<a href="/cart" id="edit-cancel" class="back-to-cart btn btn-primary">بازگشت به سبد خرید</a>'); 

$('body.news-mainpage .main-container').removeClass('container');

$('body.page-user-register #user-register-form').addClass('col-sm-12');
$('body.page-user #user-login').addClass('col-sm-5');
$('body.page-user-password #user-pass').addClass('col-sm-5');

$('#navbar > div > div.navbar-collapse.collapse > nav > ul').addClass('navbar-right');

/*---------------------------------click-more------------------------------------*/

klickmore($('.page-urmia-lake.node-type-waterchallenge .field-name-body') , 200);

$('.klick-for-more').click(function(){
  if($(this).hasClass('closed')){
    $(this).parent().css({'max-height' : $(this).parent().children('div:nth-child(1)').height() + 100 , 'padding-bottom':'100px'});
    $(this).html('<span>بستن</span>');
    $(this).removeClass('closed');
    $(this).addClass('opend');
  }else{
    if($(this).hasClass('150')){
      $(this).parent().css({'max-height' : 150 });
    }else if($(this).hasClass('200')){
      $(this).parent().css({'max-height' : 200 });
    }else if($(this).hasClass('250')){
      $(this).parent().css({'max-height' : 250 });
    }else if($(this).hasClass('300')){
      $(this).parent().css({'max-height' : 300 });
    }else if($(this).hasClass('350')){
      $(this).parent().css({'max-height' : 350 });
    }else if($(this).hasClass('400')){
      $(this).parent().css({'max-height' : 400 });
    }else if($(this).hasClass('450')){
      $(this).parent().css({'max-height' : 450 });
    }else if($(this).hasClass('500')){
      $(this).parent().css({'max-height' : 500 });
    }
    $(this).html('<span>مشاهده بیشتر</span>');
    $(this).removeClass('opend');
    $(this).addClass('closed');
    $(this).parent().css({'padding-bottom':'0px'});
  }
});

/*------for hiding picture in waterchallenge content type when the node has a video-------*/

if ($( ".node-type-waterchallenge  .group-left > .field-name-field-film" ).length ) {
    $( ".node-type-waterchallenge section #block-system-main > div > div.group-header > div.field-name-field-picture" ).remove();
}

/*---------------for front-page calendar------------------*/
$(".whole-taghvim .taghvim-firsttab").click(function(){
	$(".whole-taghvim .taghvim-mainpage1").css({'z-index' : '-1' });
	$(".whole-taghvim .taghvim-mainpage2").css({'z-index' : '3' });
	$(this).addClass('active');
	$(".whole-taghvim .taghvim-sectab").removeClass('active');
	$(".whole-taghvim .taghvim-contain .underline-active").css({'right' : '0' });	
});

$(".whole-taghvim .taghvim-sectab").click(function(){
	$(".whole-taghvim .taghvim-mainpage1").css({'z-index' : '3' });
	$(".whole-taghvim .taghvim-mainpage2").css({'z-index' : '-1' });
	$(this).addClass('active');
	$(".whole-taghvim .taghvim-firsttab").removeClass('active');
	if (window.matchMedia('(max-width: 768px)').matches) {
		$(".whole-taghvim .taghvim-contain .underline-active").css({'right' : '48%' });
	}else {
		$(".whole-taghvim .taghvim-contain .underline-active").css({'right' : '327px' });
	}
});

var $firstyear = $(".taghvim-mainpage1 .views-row-1 .views-field-field-eventdate-1 span").text();
$(".taghvim-mainpage1 .views-row-1 .views-field-field-eventdate-1").css({'display' : 'block' });
for (i = 2 ; i < 31 ; i++) { 
    var $newyear = $(".taghvim-mainpage1 .views-row-"+i+" .views-field-field-eventdate-1 span").text();
	if($newyear != $firstyear){
		$(".taghvim-mainpage1 .views-row-"+i+" .views-field-field-eventdate-1").css({'display' : 'block' });
		$(".taghvim-mainpage1 .views-row-"+i).css({'margin-top' : '35px' });
		$firstyear = $newyear;
	}
}

var $firstyear2 = $(".taghvim-mainpage2 .views-row-1 .views-field-field-eventdate-1 span").text();
$(".taghvim-mainpage2 .views-row-1 .views-field-field-eventdate-1").css({'display' : 'block' });
for (i = 2 ; i < 31 ; i++) { 
    var $newyear2 = $(".taghvim-mainpage2 .views-row-"+i+" .views-field-field-eventdate-1 span").text();
	if($newyear2 != $firstyear2){
		$(".taghvim-mainpage2 .views-row-"+i+" .views-field-field-eventdate-1").css({'display' : 'block' });
		$(".taghvim-mainpage2 .views-row-"+i).css({'margin-top' : '35px' });
		$firstyear2 = $newyear2;
	}
}

/*-----------------------ubercart attribute------------------------*/

if($('.views-field-addtocartlink .attribute').length){
	$('.views-field-addtocartlink .attribute').parents('.view').addClass('has-attr');
}
if($('.node-course.node-teaser .add-to-cart .attributes').length){
	$('.node-course.node-teaser').addClass('has-attr');
}
    
/*-----------for adding multiple products to car at the same time-----------*/
$('.page-shop .view-shop').prepend('<a href="/cart/add/" class="add-all-to-cart">افزودن به سبد خرید</a>');
$('.page-shop .view-shop .views-row').each(function(index){
	var about = $(this).find('.node').attr('about').split('/');
	for(var i = 0; i< about.length ; i++ ){
		if($.isNumeric(about[i])){
			nid = about[i];
        }
    }
	$(this).find('.node').prepend('<input type="checkbox" id="cart-'+ nid +'" value="1" class="form-checkbox" nid="'+ nid +'">');
});

$('.page-shop .view-shop .views-row .node > input').change(function(){
	var href = $('.add-all-to-cart').attr('href');
	if ($(this).is( ":checked" )) {
		if(href.indexOf('p') > 0){
			$('.add-all-to-cart').attr('href', href +'-');
		}
		$('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href') +'p'+ $(this).attr('nid'));
	}
	else{
		if(href.indexOf('p' + $(this).attr('nid')) > 0){
			var j = href.indexOf('p' + $(this).attr('nid'));
			if(href.indexOf('p' + $(this).attr('nid') + '-') > 0){
				$('.add-all-to-cart').attr('href', href.substring(0, j) + href.substring(j + 5));
			}else{
				$('.add-all-to-cart').attr('href', href.substring(0, j));			
			}
			if($('.add-all-to-cart').attr('href').slice(-1) == '-'){
				$('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href').substring(0, $('.add-all-to-cart').attr('href').length - 1));							
			}
		}
	}
});
$('.add-all-to-cart').click(function(e){
	e.preventDefault();
	window.location.href = $(this).attr('href') + "?destination=cart";
});


/*-------------------profile--------------------*/
$( ".profile .pane-user-profile .group-header" ).append( "<div class='captal-username'><div>UserName</div></div>" );
$( "#user-register-form #edit-account .form-item-mail" ).append( "<div class='help-block'>نشانی پست الکترونیکی معتبر. تمام پیام های سیستم به این نشانی فرستاده خواهند شد پس در وارد کردن آن دقت کنید،  این نشانی عمومی نخواهد شد .</div>" );
$( "#user-register-form #edit-account .form-item-mail input" ).attr('data-original-title' , '');

/*------------------------------------------------*/
$(".field-name-collegetabs > div > div > .view-collegetabs > .view-content .views-row-1 , .field-name-collegetabs .view-collegetabs.view-display-id-attachment_1 .views-row-1").addClass('active');

$(".field-name-collegetabs .view-display-id-attachment_1 .views-row").click(function(){
	var index = $(this).index() + 1;
	$(".field-name-collegetabs .view-display-id-attachment_1 .views-row.active , .field-name-collegetabs > div > div > .view-collegetabs > .view-content .views-row.active").removeClass('active');
	$(".field-name-collegetabs > div > div > .view-collegetabs > .view-content .views-row-" + index ).addClass('active');
	$(this).addClass('active');
	var right = 25 * (index -1);
	$('.underline-active2').css({'right' : right + '%'});
});

/*-------------menu dropdown--------------*/
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500); 
});

$('ul.nav > li.dropdown:not(li:nth-child(4))').click(function() {
    window.location.href = $(this).find('a').attr('href'); 
});
$('body:not(.page-waterchallenge-document) ul.nav > li.dropdown:nth-child(4)').click(function() {
    window.location.href = $(this).find('a').attr('href'); 
});

/*------------just for main page of document-----------*/
$('body.page-waterchallenge-document.main-front ul.nav > li.dropdown:nth-child(4) > ul > li > a').each(function(){
    $(this).attr('href', $(this).attr('href').substring(24,26));
});
$('body.page-waterchallenge-document.main-front ul.nav > li.dropdown:nth-child(4) > ul > li > a').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 50
        }, 700); 
});

/*-----------for searching in media------------*/
$(".page-media #edit-search-wrapper input").attr("placeholder","کلمات کلیدی خود را وارد کنید و Enter بزنید ...");

/*------------document carousel linstener-----------*/
$('.page-waterchallenge-document .view-id-waterchalenge').each(function(){
  $(this).children('.view-content').addClass('owl-carousel');
});
if($('.owl-carousel').length){
    $.getScript('/sites/all/themes/waterhouse/js/lib/owl.carousel.min.js', function(){
        $('.owl-carousel').owlCarousel({
            rtl:true,
            loop:true,
            margin:15,
            responsiveClass:true,
            nav:true,
            responsive:{
                0:{items:1},
                600:{items:3},
                1000:{items:4}
            }
        });
        $('.owl-prev').text('بعدی')
        $('.owl-next').text('قبلی')
    })
}	   

/*numbering file in document node*/
$('.node-type-waterchallenge.page-document .field-name-field-reports > div > .field-item').each(function(i){
    i++;
	$(this).find('.field-name-field-pic .field-item').append('<span>'+ i +'</span>');
});

/*event main page*/
$(".page-event .region.region-content").prepend("<ul class='nav nav-tabs'><li class='nav-item'><a class='nav-link feature active' href='#'>رویدادهای پیش رو</a></li><li class='nav-item'><a class='nav-link past' href='#'>رویدادهای گذشته</a></li></ul>");
$(".page-event #block-views-news-block-12").addClass('deactive');
$(".page-event .region.region-content .nav-tabs .feature").click(function(){
	if( $(".page-event #block-system-main").hasClass('deactive') && !$(".page-event #block-views-news-block-12").hasClass('deactive') ){
		$("#block-system-main").removeClass('deactive');
		$("#block-views-news-block-12").addClass('deactive');
		$(".page-event .region.region-content .nav-tabs .past").removeClass('active');
		$(this).addClass('active');
	}
});
$(".page-event .region.region-content .nav-tabs .past").click(function(){
	if( !$(".page-event #block-system-main").hasClass('deactive') && $(".page-event #block-views-news-block-12").hasClass('deactive') ){
		$("#block-system-main").addClass('deactive');
		$("#block-views-news-block-12").removeClass('deactive');
		$(".page-event .region.region-content .nav-tabs .feature").removeClass('active');
		$(this).addClass('active');
	}
});

/*removing duplicate telegram add this link*/
$('.field-name-field-share .fa.telegram').each(function(){
	$('.field-name-field-share .fa.telegram').slice(1).remove();
});


});/*-------------------------------end of document ready---------------------------*/


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
jQuery.fn.outerHTML = function() {return jQuery('<div />').append(this.eq(0).clone()).html();};

/*-----------------*/
var klickmore = function(temp , x){
  if(temp.height() > x){
    temp.html(temp.html() + '<div class="klick-for-more '+ x +' closed"><span>مشاهده بیشتر</span></div>');
    temp.css({'max-height' : x , 'overflow': 'hidden' , 'position': 'relative' , 'transition' : 'all 0.5s'});
  }
}











