<div id="block-system-main" style="font-family: fanum !important;">
  <section id="menu" style="position: relative">
    <div class="topnav" id="myTopnav">
      <a href="http://waterhouse.ir/tourism" target="_blank">صفحه اصلی</a>
      <a href="http://waterhouse.ir/tourism/ganjineh" target="_blank">گنجینه آب</a>
      <a href="http://waterhouse.ir/content/421" class="hidden-sm hidden-xs">ظرفیت استانها</a>
      <a class="actives" href="#">سرمایه گذاری</a>
      <a href="http://waterhouse.ir/tourism#trip">برنامه های گردشگری آبی</a>
      <a href="http://waterhouse.ir/gallery">گالری</a>
      <a href="http://waterhouse.ir/tourism/news" target="_blank">اخبار گردشگری</a>
      <a class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </section>
  <div id="header_zarfiat">

    <section id="sectionBanner">
      <div class="container" style="padding: 25px 10px;">
        <div class="caption_slide">
          <div class="caption_write">
            <h1>سرمایه گذاری</h1>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section id="top">
    <div class="container">
      <div class="title">
        <h2>دستورالعمل های سرمایه گذاری اطراف مخازن</h2>
      </div>
      <div class="main-text">
        وزارت نیرو وظیفه شناسایی و معرفی مکان‌های اطراف بسترهای آبی را دارد. در چنین شرایطی بازار گردشگری بر بستر آبی توسعه خواهد یافت به همین دلیل وزارت نیرو به تدوین شیوه‌نامه اجرایی فعالیت‌های گردشگری و تفریحی در منابع و تاسیسات آبی پیرامون آنها پرداخته است.
      </div>
    </div>
  </section>
  <section id="top">
    <div class="container">
      <div class="title">
        <h2>ظرفیت های سرمایه گذاری</h2>
      </div>
      <div class="main-text">
        <?php print views_embed_view('zarfiats', 'page','arguments'); ?>

      </div>
    </div>
  </section>
  <section id="top" class="top2">
    <div class="container">
      <div class="title">
        <h2>ثبت اطلاعات سرمایه گذار</h2>
      </div>
      <div class="main-text">

        <?php $block = module_invoke('webform', 'block_view', 'client-block-3165'); print render($block['content']); ?>

      </div>
    </div>
  </section>
  <style>
    #header_zarfiat{
      z-index: 5;
      position: relative;
      background-color: #006bb3;
      background-image: url("https://www.transparenttextures.com/patterns/light-wool.png");
    }
    #sectionBanner .container{
      max-width: 1000px;
    }
    #sectionBanner h1{
      font-size: 26px;
    }
    .block-title{
      display: none;
    }
    .caption_slide {
      min-height: 160px
    }
    [dir] .caption_slide {
      border: 1px solid #fff;
      background-color: rgba(255, 255, 255, .2);
      padding: 2rem 0
    }
    .caption_write {
      display: table;
      color: #fff
    }
    [dir] .caption_write {
      padding: 1.5rem;
    }
    [dir=rtl] .caption_write {
      border-right: 4px solid #fff;
      border-left: 4px solid #fff;
      margin-right: -5px
    }

    #top .title {
      text-align: -webkit-center;
    }
    #top .title h2 {
      display: table;
      background: #006bb3;
      color: white;
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 18px;
      position: relative;
      top: 35px;
    }
    #top .title h2:before {
      content: '\e251';
      font-family: glyphi;
      color: #fff;
      position: relative;
      top: 5px;
      margin-left: 10px;
    }
    #top .main-text {
      margin-bottom: 50px;
      background: #fff;
      box-shadow: 0 0 5px 0 #ccc;
      padding: 35px 20px;
      text-align: justify;
      font-size: 16px;
      line-height: 2;
      border-top: 2px solid #006bb3;
    }
    @media(max-width:768px) {
      #top .main-text {
        font-size: 13px;
        line-height: 1.7;
      }
      #top .title h2 {
        padding: 5px;
        font-size: 12px;
        top: 25px;
      }
    }
    .webform-component-file label, .btn-default{
      margin-right: 15px;
    }
    .form-managed-file{
      display: flex;
      max-width: 47%;
      margin-right: 15px;
    }

    .form-actions {
      text-align: -webkit-center;
    }
    .form-actions #edit-webform-ajax-submit-3165{
      width: 200px;
      font-weight: bold;
      background: green;
      border-color: snow;
    }
    .col-md-6{
      float: right;
    }
    .view-zarfiats #edit-field-ustan-value-wrapper, .view-zarfiats #edit-field-mablaq-value-wrapper, .view-zarfiats .views-submit-button{
        width:33%;
    }
    #edit-submit-zarfiats{
      width: 100%;
      margin-top: 36px;
      background: green;
      font-weight: bold;
      border-color: white;
    }

    /*menu top*/
    .topnav {
      overflow: hidden;
      background-color: #0b103a;
    }
    .topnav a {
      float: right;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      transition:all .45s ease-in-out;
      text-shadow: 2px 1px #7d5f5f;
      font-weight: bold;
      border-left: 1px solid;
    }
    .fa-bars:before{
      content:"\e236";
      font-family:glyphi;
    }
    .topnav a:hover, .topnav .actives {
      color:white;
      box-shadow:inset 0 0 50px 0 #652d92

    }
    .topnav .icon {
      display: none;
    }
    @media screen and (max-width: 768px) {
      .topnav a {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
    }
    @media screen and (max-width: 768px) {
      .topnav.responsive {
        position: relative;
      }
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: center;
      }
    }

    .view-content{
      margin-right: 15px;
      margin-top: 50px;
    }
  </style>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
