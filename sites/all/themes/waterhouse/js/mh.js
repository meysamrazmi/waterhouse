var $ = jQuery;
$(document).ready(function () {
  $('[for="edit-panes-payment-payment-method-other"]').html($('[for="edit-panes-payment-payment-method-other"]').html() + '(کارت به کارت، انتقال به حساب، شبا ، چک و ...)' + '<div>در صورت انتخاب این روش، الزامی است برای تکمیل سفارش خود پس از پرداخت مبلغ به حساب مورد نظر، فاکتور مربوطه را به شماره 09190692856 یا آی دی <a href="http://t.me/z_azizi" target="_blank">z_azizi@</a> در تلگرام بفرستید، یا برای صدور چک یا روش های دیگر پرداخت با همین شماره تماس بگیرید. <p><strong>شماره حساب :</strong> 1 - 1345137 - 8000 - 344</p> <p><strong>شماره کارت :</strong> 0527 - 6769 - 2910 - 5022</p> <p><strong>شبا :</strong> IR060570034480001345137101</p> <p>  به نام عفت مجید زاده، نزد بانک پاسارگاد، شعبه کوی نصر شمالی کد 344 </p></div>');

  $('[id*="edit-panes-payment-payment-method-other"]').change(function(){
		$('[id*="edit-panes-payment-payment-method-other"] ~ div').slideDown();
  });


/*-------------page users-----------*/
$('th.active img').each(function(){
	if($(this).attr('title') == 'نزولی'){
		$(this).parent().addClass('desc');
	}
	if($(this).attr('title') == 'صعودی'){
		$(this).parent().addClass('incr');
	}
});
/*-------------slide show home--------------*/
// var slidehome = $(' #block-system-main .view-slideshow-home .view-content ' );
// slidehome.html('<div class="carousel-inner" role="listbox">' + slidehome.html() + '</div>');
// $(' #block-system-main .view-content > .carousel-inner > .item:first-child').addClass('active');
// if($('.carousel-inner').children().length){
// 	var html = '';
// 	for(var i = 1 ; i < $('.carousel-inner').children().length ; i++){
// 		html += '<li data-target="#carousel-example-generic" data-slide-to="'+ i +'"></li>';
// 	}
// }
// slidehome.html('<ol class="carousel-indicators"><li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>'+ html +'</ol>' + slidehome.html() + '<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>' );
// slidehome.html('<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">' + slidehome.html() + '</div>');

/*----------------------------------------------*/
$(".front .panels-flexible-region-1-shop.front-docs .field-name-file-count .without-file2").replaceWith( "<span> 168 فایل </span>" );
/*------------------------- آپلود تصویر کارت دانشجویی ---------------------*/
 $('.page-node-3030 #uc_product_add_to_cart_form-3030-attributes').html($('.page-node-3030 #uc_product_add_to_cart_form-3030-attributes').html() + '<div class="kart-upload"><a class="upload-file btn-defult" href="/upload" target="_self">آپلود کارت دانشجویی</a></div>');

 $('.page-node-1532 #uc_product_add_to_cart_form-1532-attributes').html($('.page-node-1532 #uc_product_add_to_cart_form-1532-attributes').html() + '<div class="kart-upload"><a class="upload-file btn-defult" href="/upload2" target="_self">آپلود کارت دانشجویی</a></div>');
 $('.page-node-1656 #uc_product_add_to_cart_form-1656-attributes').html($('.page-node-1656 #uc_product_add_to_cart_form-1656-attributes').html() + '<div class="kart-upload"><a class="upload-file btn-defult" href="/upload2" target="_self">آپلود کارت دانشجویی</a></div>');

/*----------------------------------------------*/
$('.page-node-1656 #edit-attributes-3-241--2').click(function(){
    if ($(this).is(':checked'))
    {
        $('#edit-attributes-3--2').html($('#edit-attributes-3--2').html() + '<div>"خبرنگار محترم، جهت هماهنگی های  مربوط به ورود و حضور در برنامه، ضمن ثبت نام در سایت، لطفا برای درج نام و ثبت نام قطعی با شماره تلفن 02177000907 تماس حاصل فرمائید."</div>');
	  $('.page-node-1656 #edit-attributes-3-241--2').prop( "checked", true );
	}
});


});
