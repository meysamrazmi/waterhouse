var $ = jQuery;
$(document).ready(function () {
    $('.admin-menu .shop_self .view-site-sections, .admin-menu .college_self .view-site-sections, .admin-menu .media_self .view-site-sections, .admin-menu .document_self .view-site-sections').each(function () {
        $(this).children('.view-content').addClass('owl-carousel');
    });
    if ($('.owl-carousel').length) {
        $.getScript('/sites/all/themes/waterhouse/js/lib/owl.carousel.min.js', function () {
            $('.owl-carousel').owlCarousel({
                rtl: true,
                loop: true,
                margin: 15,
                responsiveClass: true,
                nav: true,
                autoplay: true,
                autoplayTimeout:3200,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
            $('.owl-prev').text('بعدی')
            $('.owl-next').text('قبلی')
        })
    }
    $('.admin-menu .college_self .view-site-sections .uc-price, .page-academy .views-row .node-teaser .uc-price ').each(function () {
        ($(this).html() == '0 تومان' && $(this).html('<span>برگزار شده</span>'));
    });
    $('.page-media .main-container .region-content .views-submit-button .btn-primary ').each(function () {
        ($(this).html() == 'ارسال' && $(this).html('<span>اعمال فیلتر</span>'));
    });

    $('.page-wsa-edu.wsa-pedia, .page-taxonomy-term-313, .page-taxonomy-term-316, .page-taxonomy-term-317, .page-taxonomy-term-330, .page-taxonomy-term-362, .page-wsa-search').each(function () {
        $(".inline a").attr({
            "href": "/wsa",
            "title": "رویداد ملی سازگاری با کم آبی",
            "target": "_blank"
        });
    });
    $('.page-node-1742').each(function () {
        $('input').keyup(function () {
            var linkHref = "/cart/add/";
            for (var i = 0; i < 3; i++)  if (!($('#edit-attributes-24-30' + i).val() == '' || $('#edit-attributes-24-30' + i).val() == '0'))
                linkHref += 'p1742_q' + $('#edit-attributes-24-30' + i).val() + '_a24o30' + i + '-';
            linkHref = linkHref + ('?destination=cart');
            $('a#link').attr('href', linkHref);
        });
    });

    $('.page-node-2170.page-gavahi').each(function () {
            $('#edit-submitted-main-information-1-1').on('input',function(e){
                $('.tarh').html($('#edit-submitted-main-information-1-1').val());
            });
            $('#edit-submitted-main-information-1-2').on('input',function(e){
                 $('.ostan').html($('#edit-submitted-main-information-1-2').val());
            });
            $('#edit-submitted-main-information-1-3').on('input',function(e){
                $('.name').html($('#edit-submitted-main-information-1-3').val());
            });
    });

    $('.page-taxonomy-term-313 #block-system-main, .page-taxonomy-term-316 #block-system-main, .page-taxonomy-term-317 #block-system-main, .page-taxonomy-term-330 #block-system-main, .page-taxonomy-term-362 #block-system-main').prepend('<a class="btn btn-info" href="/wsa/search" target="_blank"> جستجو پیشرفته </a>');
    $('.page-node-1469').each(function () {
        if ($("body").hasClass("not-logged-in")) {
            $(".file").html('<p class="log">فقط کاربران سایت قادر به مشاهده فایل می باشند<a target="_blank" href="/user/register">عضویت</a> یا <a target="_blank" href="/user">ورود</a></p>');
        }
    });
    $('.page-cart').each(function () {
        $('.table thead tr th ').each(function () {
            ($(this).text() == 'مجموع' && $(this).html('<b>تعداد</b>'));
        });
        $(".table-responsive").prepend("<p>در صورت نیاز میتوانید تعداد را افزوده و سپس بر روی بروزرسانی کلیک نمائید و بعد از آن برای ورود به مرحله بعد بر روی تکمیل سفارش کلیک نمایید</p>");
    });
    //for tourism
    $(".page-node-2921").ready(function () {
        $("#uc-product-add-to-cart-form-2921").hide();
        $("#edit-webform-ajax-submit-2894").click(function () {
            $("#uc-product-add-to-cart-form-2921").show(6000);
        });
    });
    //show login form
    $(".not-logged-in").ready(function () {
        $("#block-user-login").hide(100);
        $(".formshow").click(function () {
            $("#block-user-login").show(100);
        });
        $(".block-title").click(function(){
            $("#block-user-login").hide()
        ;});
    });

    //product kit
    $(".node-type-product-kit .field-name-field-body").append("<div class='parts'><h4>جلسات این دوره</h4></div>");
    /*------------------------------------------------------------------------------------- ----------------------*/

  $(".node-type-product-kit").each(function () {
    $('.field-name-video-course').each(function() {
      $(this).parents('.product-qty').addClass('open')
    })
    $('.field-name-video-course a').click(function(e) {
      e.preventDefault()
      let url = $(this).data('uri')
      let video = $(this).parents('.node-product-kit').find('video')
      video.attr('src', url)
      $(this).parents('.node-product-kit').find('.mediaelement-download-link a').attr('href', url)

      $('html, body').animate({
        scrollTop: (video.offset().top - 0)
      }, 1000);

      let player = new MediaElementPlayer('.node-product-kit video')
      player.pause()
      player.setSrc(url)
      player.media.load()
      setTimeout(() => {player.play()}, 1000)
    })
    $(".collapsible .form-submit").text("خرید کل دوره");
    if ($('.list-price .uc-price').text() < $('.group-prices .sell-price .uc-price').text()){
     $('.group-prices .list-price .uc-price').addClass('deco');
}
  })
  // link to page tourism

    $('.page-taxonomy-term-408 header#navbar, .page-taxonomy-term-407 header#navbar, .page-taxonomy-term-499 header#navbar').prepend($('<img>',{id:'theImg',src:'/sites/all/themes/waterhouse/images/hkuz.png'}))
        // End Of document
});
