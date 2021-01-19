var $ = jQuery;
$(document).ready(function () {

  if ($('.tourism-menu').length) {
    $('body').on('click','.tourism-menu .menu-button', function(){
      $('body').toggleClass('menu-open')
    })
    $('.menu-overlay').click(function(){
      $('body').toggleClass('menu-open')
    })
  }

	$('.front .alert-block').addClass("col-sm-10");
/*----------------------------------------------------*/
// $(".page-waterchallenge-document.page-document .pane-waterchalenge div:nth-child(7) .field-name-file-count .without-file2").replaceWith( "<span> 168 فایل </span>" );
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
klickmore($('.page-report #statement .li') , 400);
// klickmore($('.page-report #timing .wh') , 400);

$('.klick-for-more').click(function(){
  if($(this).hasClass('closed')){
    $(this).parent().css({'max-height' : $(this).parent().children('div:nth-child(1)').height() + 200 , 'padding-bottom':'100px'});
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

/*-----------for adding multiple products to cart at the same time-----------*/
// $('.page-shop .view-shop').prepend('<a href="/cart/add/" class="add-all-to-cart">افزودن به سبد خرید</a>');
// $('.page-shop .view-shop .views-row').each(function(index){
// 	var about = $(this).find('.node').attr('about').split('/');
// 	for(var i = 0; i< about.length ; i++ ){
// 		if($.isNumeric(about[i])){
// 			nid = about[i];
//         }
//     }
// 	$(this).find('.node').prepend('<input type="checkbox" id="cart-'+ nid +'" value="1" class="form-checkbox" nid="'+ nid +'">');
// });

// $('.page-shop .view-shop .views-row .node > input').change(function(){
// 	var href = $('.add-all-to-cart').attr('href');
// 	if ($(this).is( ":checked" )) {
// 		if(href.indexOf('p') > 0){
// 			$('.add-all-to-cart').attr('href', href +'-');
// 		}
// 		$('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href') +'p'+ $(this).attr('nid'));
// 	}
// 	else{
// 		if(href.indexOf('p' + $(this).attr('nid')) > 0){
// 			var j = href.indexOf('p' + $(this).attr('nid'));
// 			if(href.indexOf('p' + $(this).attr('nid') + '-') > 0){
// 				$('.add-all-to-cart').attr('href', href.substring(0, j) + href.substring(j + 5));
// 			}else{
// 				$('.add-all-to-cart').attr('href', href.substring(0, j));
// 			}
// 			if($('.add-all-to-cart').attr('href').slice(-1) == '-'){
// 				$('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href').substring(0, $('.add-all-to-cart').attr('href').length - 1));
// 			}
// 		}
// 	}
// });
// $('.add-all-to-cart').click(function(e){
// 	e.preventDefault();
// 	window.location.href = $(this).attr('href') + "?destination=cart";
// });


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
$(".page-media #edit-search-wrapper input").attr("placeholder","برای جستجو، کلمات کلیدی خود را وارد کنید و Enter بزنید ...");

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
/*----------- masonry plugin -------------------
$('.node-type-waterchallenge').each(function(){
	$('.field-name-field-gallery .field-items').masonry({
		// options
		itemSelector: '.field-name-field-gallery .field-items field-item',
		columnWidth: 200
	});
});*/

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
/*-------------------------------------------------------------------------------------------------------------------------------*/
if($('.page-cart').length){
	if($('.page-checkout').length){
		if($('.page-review').length){
			$('div#uc_Progressbar .bullet:nth-child(4)').addClass('current');
			$('div#uc_Progressbar .bullet:nth-child(1) , div#uc_Progressbar .bullet:nth-child(2) , div#uc_Progressbar .bullet:nth-child(3)').addClass('done');
		}else {
			$('div#uc_Progressbar .bullet:nth-child(3)').addClass('current');
			$('div#uc_Progressbar .bullet:nth-child(1),div#uc_Progressbar .bullet:nth-child(2)').addClass('done');
		}
	}else {
		$('div#uc_Progressbar .bullet:nth-child(2)').addClass('current');
		$('div#uc_Progressbar .bullet:nth-child(1)').addClass('done');
	}
	$('div#uc_Progressbar .bullet:nth-child(1)').removeClass('current');
}

$('input#edit-submitted-product-682-pipeline').prop('checked', true);

if($('body.page-node-712'.length)){
	pipe();
}

/*if($('.alert.alert-block.alert-danger.messages.error em').text().indexOf('waterhouse_preprocess_html()') !== -1){
    $('.alert.alert-block.alert-danger.messages.error').css('display','none');
}*/

$('.page-sandika .main-container.container').prepend('<a class="back-to-pipe" href="/report">بازگشت به صفحه اصلی</a>');


$('.page-node-730 .field-name-field-kholase td,.page-sandika .field-name-body td').each(function(){
	if ( $(this).text() == '*'){
		$(this).addClass('haveit');
	}
});

$('.page-node-722 #edit-attributes-9 > .form-item').each(function(){
	var attrlabel = $(this).find('label').text();
	var attrlabel_t = attrlabel.substr(0, attrlabel.indexOf(','));
	var attrlabel_n = attrlabel.substr(attrlabel.indexOf(',') + 3 );
	$(this).find('label').css({ 'font-size' : '0px', 'vertical-align':'top'});
	$(this).append('<span>' + attrlabel_t + '</span>');
	/*$(this).append('<span>' + attrlabel_n + '</span>');*/
	if($.inArray(parseInt($(this).find('input').val()), Drupal.settings.bought_attribute) > -1){
		$(this).find('span').text($(this).find('span').text() + '(رزرو شده)');
		$(this).find('label').remove();
    }
    });
   /*
/$('#edit-attributes-9 input').each(function(){
	if($.inArray(parseInt($(this).val()), Drupal.settings.bought_attribute) > -1){
		$(this).parent().text($(this).parent().text() + '(رزرو شده)')
    }
})*/



$('.page-node-730 #pricing-table > div.pricing-table.pricing-tableD > div > div.register-btn > a').click(function(e){
	e.preventDefault();
	$('.page-node-730 #uc_product_add_to_cart_form-730-attributes #edit-attributes-10-123').prop( "checked", true );
	$('.page-node-730 .add-to-cart button#edit-submit-730.node-add-to-cart').click();
});
$('.page-node-730 #pricing-table > div.pricing-table.pricing-tableC > div > div.register-btn > a').click(function(e){
	e.preventDefault();
	$('.page-node-730 #uc_product_add_to_cart_form-730-attributes #edit-attributes-10-122').prop( "checked", true );
	$('.page-node-730 .add-to-cart button#edit-submit-730.node-add-to-cart').click();
});
$('.page-node-730 #pricing-table > div.pricing-table.pricing-tableB > div > div.register-btn > a').click(function(e){
	e.preventDefault();
	$('.page-node-730 #uc_product_add_to_cart_form-730-attributes #edit-attributes-10-121').prop( "checked", true );
	$('.page-node-730 .add-to-cart button#edit-submit-730.node-add-to-cart').click();
});
$('.page-node-730 #pricing-table > div.pricing-table.pricing-tableA > div > div.register-btn > a').click(function(e){
	e.preventDefault();
	$('.page-node-730 #uc_product_add_to_cart_form-730-attributes #edit-attributes-10-120').prop( "checked", true );
	$('.page-node-730 .add-to-cart button#edit-submit-730.node-add-to-cart').click();
});

$('.page-node-712.page-node-sale-report #block-system-main').prepend('<a class="btn btn-info" href="/node/717/webform-results/table" target="_blank"> اطلاعات تکمیل شده افراد </a>');

/*----------------------------college---------------------------------------*/
$('.node-teaser.node-course .field-name-field-course-step .field-item').each(function(){
	switch ($(this).text()) {
		case 'در حال ثبت نام':
			$(this).addClass("sabtenam");
			break;
		case 'در حال برگزاری':
			$(this).addClass("bargozari");
			break;
		case 'بزودی':
			$(this).addClass("bezodi");
			break;
	}
});
/*-----------------searching in college------------------*/
$(".page-college #edit-populate-wrapper input#edit-populate").attr("placeholder","برای جستجو، کلمات کلیدی خود را وارد کنید و Enter بزنید ...");
$(".page-node-1007 #edit-populate-wrapper input#edit-populate").attr("placeholder","کلمات کلیدی خود را وارد کنید ...");

if($('.page-college').length && $('.view-college .views-exposed-widgets .filters').length == 0){
	$('.page-college .view-college .views-exposed-widgets').append('<button class="filters primary"><span>فیلتر ها</span></button>');
}

$('.view-college .views-exposed-widgets .filters').click(function(e){
	e.preventDefault();
	$(this).parents('.view-filters').toggleClass('open');
	$(this).toggleClass('open');
	$('#edit-field-course-step-value-wrapper, #edit-field-course-type-value-wrapper').slideToggle(400);
});

/*----------------------------------------------مربوط به فروشگاه---------------------------------------------------------*/
// $('#block-mefibs-mefibs-shop-page-ffilter .views-exposed-widget').each(function(){
// 	if($(this).height() > 300){
// 		var temp = $(this).html();
// 		$(this).html(temp + '<div class="klick-for-more side closed"><span></span></div>');
// 		$(this).css({'max-height' : 300 , 'overflow': 'hidden'});
// 	}
// });
// $('#block-mefibs-mefibs-shop-page-ffilter .views-exposed-widget .klick-for-more.side').click(function(){
// 	if($(this).hasClass('closed')){
// 		$(this).parent().css({'max-height' : $(this).parent().children('.views-widget').height() + 200 , 'padding-bottom' : '50px !important' });
// 		$(this).html('<span>بستن</span>');
// 		$(this).removeClass('closed');
// 		$(this).addClass('opend');
// 	}else{
// 		$(this).parent().css({'max-height' : 300  });
// 		$(this).html('<span>مشاهده بیشتر</span>');
// 		$(this).removeClass('opend');
// 		$(this).addClass('closed');
// 	}
/*-----------------------------------------------------------------------------------------------------------------*/
/*-------------- filter button shop ------------*/
$('#block-mefibs-mefibs-shop-page-ffilter #views-exposed-form-shop-page-mefibs-form-ffilter').parent().append('<div class="click-to-open"><button class="primary">فیلتر ها</button></div>');
$('#block-mefibs-mefibs-shop-page-ffilter .click-to-open').click(function(){
	if($(this).parent().hasClass('opened')){
		$('#views-exposed-form-shop-page-mefibs-form-ffilter').slideUp(600);
		$('.block-mefibs.opened').removeClass('opened');
	}else{
		$(this).parent().addClass('opened');
		$('#views-exposed-form-shop-page-mefibs-form-ffilter').slideDown();
	}
});
/* ------------------------mojoodi shop -------------------------*/
$(".page-shop input#edit-mefibs-form-seearch-populate").attr("placeholder","برای جستجو، کلمات کلیدی خود را وارد کنید و Enter بزنید ...");

var temp1 = $('#block-mefibs-mefibs-shop-page-seearch #edit-mefibs-form-seearch-stock-wrapper');
if(temp1.find('input').attr('value') == '1'){
	temp1.append('<span class="stocknotify on"></span>');
}else{
	temp1.append('<span class="stocknotify off"></span>');
}
$('.stocknotify').click(function(){
	if($(this).hasClass('off')){
		$(this).parent().find('input').val(1);
		$(this).removeClass('off');
		$(this).addClass('on');
		$(this).parent().parent().find('.form-submit').click();
	}else{
		$(this).parent().find('input').val(0);
		$(this).html('<span>مشاهده بیشتر</span>');
		$(this).removeClass('on');
		$(this).addClass('off');
		$(this).parent().parent().find('.form-submit').click();
	}
});
/*-------*/
// $(".not-front.not-logged-in.page-waterchallenge #block-system-main .group-footer .field-collection-view .field-name-field-attachment").css({"display" : "none"});
// $(".not-front.not-logged-in.page-waterchallenge #block-system-main .group-footer .field-collection-view .field-name-field-tozihat").html($(".not-front.not-logged-in.page-waterchallenge #block-system-main .group-footer .field-collection-view .field-name-field-tozihat").html() + '<div class="no-permission no-file"><p>شما به این فایل دسترسی ندارید.</p><div><a href="/user/login" class="btn btn-default">وارد شوید</a><a href="/user/register" class="btn btn-primary">عضویت رایگان</a></div></div>');
$(".not-front.not-logged-in.page-waterchallenge #block-system-main .group-footer .field-collection-view .field-name-field-attachment").html('<div class="no-permission no-file"><p>شما به این فایل دسترسی ندارید.</p><div><a href="/user/login" class="btn btn-default">وارد شوید</a><a href="/user/register" class="btn btn-primary">عضویت رایگان</a></div></div>');

/*creating hint for bookmarks*/
if ($('.flag-outer-bookmarks').length){
	$('.flag-outer-bookmarks').append('<div class="flag-hint"><span>این مطلب را به لیست نشان شده ها اضافه کنید</span></div>')
}
/*--------margin right title page media-------- */
$('.not-front.page-media .field-name-title')
	.css({'margin-right':'30px'});
/*-------margin right title page news--------- */
$('.not-front.page-news .group-left .field-name-title')
	.css({'margin-right':'30px'});
/*-------margin right title page news--------- */
$('.not-front.page-college .group-left .field-name-title')
	.css({'margin-right':'30px'});
/*-------margin right title page news--------- */
$('.not-front.page-product .field-name-title')
	.css({'margin-right':'30px'});


// /*-------- tabligh down page -------- */
$('#block-block-8').find('.close-banner').click(function(){
	$(this).parents('#block-block-8').slideUp();
	setCookie('banner', '1', 1);
});
if(getCookie('banner')){
	$('#block-block-8').slideUp();
}
// /*-------- tabligh2 down page -------- */
$('#block-block-9').find('.close-banner').click(function(){
	$(this).parents('#block-block-9').slideUp();
	setCookie('banner', '1', 1);
});
if(getCookie('banner')){
	$('#block-block-9').slideUp();
}














/*-------------------------------end of document ready---------------------------*/
});

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

function pipe(){

	$('#edit-attributes-8').prepend('<div class="tabel-title">کارکنان شرکت های آب منطقه ای در 31 استان</div><div class="form-item checkbox man-child"><span class="name">سمت شرکت کننده</span><span class="allprice">قیمت بدون تخفیف</span><span class="thisprice">قیمت با تخفیف</span><span class="num"> تعداد </span></div>');
	$('#edit-attributes-8 .form-item-attributes-8-70 ').before('<div class="tabel-title">دیگر شرکت کنندگان</div><div class="form-item checkbox man-child"><span class="name">سمت شرکت کننده</span><span class="allprice">قیمت بدون تخفیف</span><span class="thisprice">قیمت با تخفیف</span><span class="num"> تعداد </span></div>');
	$('#edit-attributes-8 .form-item-attributes-8-156 ').before('<div class="tabel-title">کارکنان شرکت های مهندسی آب و فاضلاب در 31 استان</div><div class="form-item checkbox man-child"><span class="name">سمت شرکت کننده</span><span class="allprice">قیمت بدون تخفیف</span><span class="thisprice">قیمت با تخفیف</span><span class="num"> تعداد </span></div>');

	$('#edit-attributes-8 > .form-item:not(:nth-child(1)):not(.man-child):not(:last-child)').each(function(){
		var attrlabel = $(this).find('label').text();
		var attrlabel_t = attrlabel.substr(0, attrlabel.indexOf(','));
		var attrlabel_n = attrlabel.substr(attrlabel.indexOf(',') + 3 );
		$(this).append('<span class="name">'+ attrlabel_t +'</span>');
		$(this).append('<span class="allprice">500,000 تومان </span>');
		$(this).append('<span class="thisprice">'+ attrlabel_n +'</span>');
		$(this).append('<span class="num"> 1 </span>');
	});

	var attribute = {
		o47 : [48,44,45,46,61,62,63,64,60],
		o52 : [53,54,50,51,67,68,69,65,66],
		o70 : [75,79,74,78,73,77,72,76,71],
		o87 : [83,88,84,89,80,85,81,86,82],
		o91 : [96,92,97,93,98,94,99,95,90],
		o102 : [109,103,104,105,106,100,107,101,108],
		o110 : [117,111,118,112,119,113,114,115,116],
		o165 : [161,166,162,167,158,163,159,164,160]
	}
	var key = [];
	$.each(Object.keys(attribute),function(i,val){
		key.push(val.substring(1));
	});
	var attId = '.form-item-attributes-8-';

	for( var i = 0 ; i < 8 ; i++ ){

		var attId_num = Object.keys(attribute)[i].substring(1).trim();
		var att = attId + attId_num;

		$(att + ' span.num').remove();
		$(att).append('<span><select><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select></span>');

		$(att + ' select').attr('disabled','disable').css('cursor','not-allowed');

		for ( var j = 0 ; j < 9 ; j++ ){
			$(attId + attribute[Object.keys(attribute)[i]][j] ).css('display','none');
		}

	}

	$('#edit-attributes-8 .form-item input').change(function(){
		var number = $(this).attr('value');
		var add_o = 'o' + number;
		var check = $.inArray(number , key);
		if(check !== -1){
			var selector = attId + number;
			if( $(selector + ' input').is(":checked") ){
				$(selector + ' select').removeAttr('disabled').css('cursor','default');
			}
			else if( !$(selector + ' input').is(":checked")){
				$(selector + ' select').attr('disabled','disable').css('cursor','not-allowed');
				for ( var j = 0 ; j < 9 ; j++ ){
					$(attId + attribute[add_o][j] +' input').prop( "checked", false);
				}
				$(selector + ' select option:selected').prop( "selected", false);
				$(selector + ' select option:nth-child(1)').prop( "selected", true);
			}
		}
	});
	$('#edit-attributes-8 .form-item select').change(function(){
		var index = $(this).find("option:selected").attr('value');
		var number2 = $(this).parent().parent().find('input').attr('value');
		var add_o2 = 'o' + number2;
		var check2 = $.inArray(number2 , key);
		if(check2 !== -1){
			for ( var j = 0 ; j < 9 ; j++ ){
				$(attId + attribute[add_o2][j] +' input').prop( "checked", false );
			}
			for ( var j = 0 ; j < index-1 ; j++ ){
				$(attId + attribute[add_o2][j] +' input').prop( "checked", true );
			}
		}
	});

	/*
		$(att + ' input').change(function(){
			if($(att + ' input').is(":checked") ){
				$(att + ' select').removeAttr('disabled').css('cursor','default');
			}
			else{
				$(att + ' select').attr('disabled','disable').css('cursor','not-allowed');
				for ( var j = 0 ; j < 4 ; j++ ){
					$(attId + attribute[Object.keys(attribute)[i]][j] +' input').prop( "checked", false );
				}
				$(att + ' select option:selected').prop( "selected", false );
				$(att + ' select option:nth-child(1)').prop( "selected", true );
			}
		});
		$(att + ' select').change(function(){
			var index = $(this).find("option:selected").attr('value');
			for ( var j = 0 ; j < 4 ; j++ ){
				$(attId + attribute[Object.keys(attribute)[i]][j] +' input').prop( "checked", false );
			}
			for ( var j = 0 ; j < index-1 ; j++ ){
				$(attId + attribute[Object.keys(attribute)[i]][j] +' input').prop( "checked", true );
			}
		});
	*/


}

function shop_filter_close(){
	$('#views-exposed-form-shop-page-mefibs-form-ffilter').slideUp();
 }
 function shop_filter_open(){
	$('#views-exposed-form-shop-page-mefibs-form-ffilter').slideDown();
 }
 // Cookies
function setCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
function eraseCookie(name) {setCookie(name, "", -1);}
//

Drupal.behaviors.myBehavior = {attach: function (context, settings) {
  if($('#header_zarfiat').length) {
    $('h1.page-header').remove();
    $('body').addClass('has-tourism-header');
  }
}};





