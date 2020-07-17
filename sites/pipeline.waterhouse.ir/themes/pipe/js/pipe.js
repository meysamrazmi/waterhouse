var $ = jQuery;

$(document).ready(function () {

    /*for url redirect*/
    // $('form#company-node-form > div > .vertical-tabs > .vertical-tabs-panes').css({
	// 	'display':'none'
    // });
    // if( $('#company-node-form .group-alltab ul > li.vertical-tab-button.first.active.selected').length ){
	//     $('form#company-node-form > div > .vertical-tabs > .vertical-tabs-panes').css({
	//     	'display':'block'
	//     });
    // }
    // $('#company-node-form .group-alltab ul > li.vertical-tab-button:not(.first)').click(function(){
    //     $('form#company-node-form > div > .vertical-tabs > .vertical-tabs-panes').css({
    //         'display':'none'
    //     });
    // });
    // $('#company-node-form .group-alltab ul > li.vertical-tab-button.first').click(function(){
    //     if( $('#company-node-form .group-alltab ul > li.vertical-tab-button.first.active.selected').length ){
    //         $('form#company-node-form > div > .vertical-tabs > .vertical-tabs-panes').css({
    //             'display':'block'
    //         });
    //     }
    // });

    initialise();
    permissions();

    $('fieldset#edit-group_datatab .panel-body').append($('form#company-node-form > div > .vertical-tabs > .vertical-tabs-panes').html());
    $('form#company-node-form > div > .vertical-tabs').remove();

    $('fieldset#edit-group_datatab').prepend('<div class="tozihat"><span class="icon icon-1"></span><h3>مشخصات کلی</h3><p>در این بخش شما اطلاعات اولیه خود را برای ما ارسال می کنید. پس از وارد کردن اطلاعات خود به تب بعد رفته و ادامه مراحل را طی کنید.</p></div>');

    $('fieldset#edit-group_information').prepend('<div class="tozihat"><span class="icon icon-2"></span><h3>راه های ارتباطی</h3><p>در این بخش آدرس سایت خود به همراه لینک شبکه های اجتماعی را وارد کنید. دقت کنید طبق فرمت خواسته شده اطلاعات وارد شود.</p></div>');

    $('fieldset#edit-group_gallery').prepend('<div class="tozihat"><span class="icon icon-3"></span><h3>گالری</h3><p>فیلم ها و عکس ها را با توجه به راهنمای هر کدام با دقت آپلود کنید.</p></div>');

    $('fieldset#edit-group_uploads').prepend('<div class="tozihat"><span class="icon icon-4"></span><h3>معرفی محصولات</h3><p>این بخش شامل یک پی دی اف از محصولات شما و آپلود یک فایل دلخواه می باشد.</p></div>');

    $('fieldset#edit-group_coworkertab').prepend('<div class="tozihat"><span class="icon icon-5"></span><h3>معرفی اعضا</h3><p>در این قسمت می توانید اعضای شرکت خود را با نام، سمت و عکس پرسنلی معرفی کنید. دقت کنید که در صورت تکمیل بودن اطلاعات برای هر شخص، اطلاعات نمایش داده خواهد شد.</p></div>');
    
    $('.form-item-title input').attr('placeholder','موسسه پژوهشی، آموزشی خانه آب ايران');
    $('.field-name-body textarea').attr('placeholder','آموزش و آگاهی بخشی، كليد حل بحران آب كشور موسسه پژوهشی، آموزشی خانه آب ايران، مجموعه‌ای دانش‌محور، خلاق و متكی بر فناوری، تلاش بر اين دارد كه با برنامه‌ريزی و فعاليت اثربخش در سه عرصه؛آموزش تخصصی و عمومی، اطلاع‌رسانی و آگاهی بخشی و پژوهش در بهبود دانش مديريت بخش آب كشور در راستای حل مسائل و چالش‌های روزافزون آبی كشور، پيشرو و نقش‌آفرين باشد. ');
    $('input#edit-field-sitelink-und-0-url').attr('placeholder','waterhouse.ir');
    $('input#edit-field-telegram-und-0-value,.page-node-add-company input#edit-field-instagram-und-0-value,.page-node-add-company input#edit-field-linkedin-und-0-value').attr('placeholder','username');
    $('input#edit-field-emailadd-und-0-value').attr('placeholder','username@gmail.com');
    $('input#edit-field-telephone-und-0-value').attr('placeholder','۰۹۲۰ - ۲۰۶۰۵۵۲');

    if($('.page-node.node-type-company:not(.page-node-edit)').length){
        company_page();
    }
    
    $(".not-front.page-virtual #edit-populate-wrapper input#edit-populate").attr("placeholder","کلمات کلیدی خود را وارد کنید ...");








});

function company_page(){
    $('.group-header').css('background-image','url('+ $('.page-node.node-type-company .field-name-field-background img').attr('src') +')');

    $('.field-name-field-telegram .field-item').html('<a target="_blank" rel="me nofollow" href="https://telegram.me/' + $('.field-name-field-telegram .field-item').text() + ' "></a>');

    $('.field-name-field-instagram .field-item').html('<a target="_blank" rel="me nofollow" href="https://instagram.com/' + $('.field-name-field-instagram .field-item').text() + ' "></a>');

    $('.field-name-field-linkedin .field-item').html('<a target="_blank" rel="me nofollow" href="https://linkedin.com/in/' + $('.field-name-field-linkedin .field-item').text() + ' "></a>');

    $('.group-header').append('<div class="gerdali"> >> </div>');
    $('.gerdali').click(function(){
        $('.group-header').toggleClass('openit');
    });

    if(window.matchMedia("(max-width: 992px)").matches){
        $('.group-header').addClass('miniscreen');
    } else{
        $('.group-header').removeClass('miniscreen');
    }
    $(window).resize(function() {
        if(window.matchMedia("(max-width: 992px)").matches){
            $('.group-header').addClass('miniscreen');
        } else{
            $('.group-header').removeClass('miniscreen');
        }
    });
}

function loop(){
    if($('.gerdali').hasClass('thats-right')){
        $('.gerdali').animate({padding:'0 10px 0 0'},1000).toggleClass('thats-left').toggleClass('thats-right');
        loop();
    }
    if($('.gerdali').hasClass('thats-left')){
        $('.gerdali').animate({padding:'0 0 0 10px'},1000).toggleClass('thats-right').toggleClass('thats-left');
        loop();
    }
}

/*for firing some scripts after ajax */
Drupal.behaviors.myBehavior = {attach: function (context, settings) {
    initialise();
}};

$(window).resize(function() {
    initialise();
});

$(window).load(function(){
    initialise();
});

function initialise(){
	//var boot_file_selector = $('input#edit-picture-upload, #user-profile-form .form-item input.form-file, input.form-file');
	//if(boot_file_selector.length){
	//	$.getScript('/sites/pipeline.waterhouse.ir/themes/pipe/js/lib/bootstrap-filestyle.min.js', function(){
	//	$(":file").filestyle({buttonText: "انتخاب فایل", buttonName: "btn-primary",placeholder: "فایلی انتخاب نشده"});
	//	});
    //}
    
    if(!$('.field-name-field-films  .help-block .gallery-film-info').length){
        $('.field-name-field-films  .help-block').prepend('<span class="gallery-film-info">شما متناسب با پلنی که خریداری کرده اید امکان افزودن فیلم به این بخش دارید. پس از وارد کردن یک فیلم برای شما امکان اضافه کردن فیلم دوم فراهم می شود. در صورت وارد کردن بیش از حد مجاز فیلم ها به انتخاب مدیر وبسایت حذف خواهند شد. پلن A امکان اضافه کردن 5 فیلم و پلن B می تواند 2 فیلم وارد کند.</span><br>');
    }

    if(!$('.field-name-field-pictures  .help-block .gallery-picture-info').length){
        $('.field-name-field-pictures  .help-block').prepend('<span class="gallery-picture-info">شما متناسب با پلنی که خریداری کرده اید امکان افزودن عکس به این بخش دارید. پس از وارد کردن یک عکس برای شما امکان اضافه کردن عکس دوم فراهم می شود. در صورت وارد کردن بیش از حد مجاز، به انتخاب مدیر وبسایت تعداد اضافی حذف خواهند شد. پلن A امکان اضافه کردن 60 عکس، پلن B 30 عکس و پلن C می تواند 20 عکس اضافه کند.</span><br>');
    }
}

function permissions(){
    var planB = ["field-name-field-onefile" , "field-name-field-coworkers"];
    var planC = ["field-name-field-films" , "field-name-field-catalog" , "field-name-field-onefile" , "field-name-field-coworkers"];
    var planD = ["field-name-field-pictures" , "field-name-field-films" , "field-name-field-catalog" , "field-name-field-onefile" , "field-name-field-coworkers"];

    if($('.page-node-add,.page-node-edit.node-type-company').hasClass('role-B')){
       hiding(planB);
    }
    if($('.page-node-add,.page-node-edit.node-type-company').hasClass('role-C')){
       hiding(planC);
    }
    if($('.page-node-add,.page-node-edit.node-type-company').hasClass('role-D')){
       hiding(planD);
    }
}
function hiding(classes){
    classes.forEach(function(element){
        $('.' + element).addClass('hideit');
        $('.' + element).find('input').attr('disabled','disable');
    });

}