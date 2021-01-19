<div id="block-system-main" style="font-family: fanum !important;">
  <section id="menu" class="tourism-menu container">
    <a href="/tourism" class="menu-logo"><img src="/sites/all/themes/waterhouse/images/tourism-logo.png" class="menu-logo"></a>
    <div class="menu-overlay"></div>
    <div class="menu-button"><i class="mdi mdi-menu"></i></div>
    <?php
    $block = module_invoke('menu', 'block_view', 'menu-tourismmain');
    print render($block['content']);
    ?>
  </section>

  <div id="header_zarfiat">

    <section id="sectionBanner">
      <div class="container" style="padding: 25px 10px;">
        <div class="caption_slide">
          <div class="caption_write">
            <h1>مجموعه ضوابط و قوانین</h1>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section id="top">
    <div class="container">
      <div class="main-text">
        <p class="container">
          وزارت نیرو وظیفه شناسایی و معرفی مکان‌های اطراف بسترهای آبی را دارد. در چنین شرایطی بازار گردشگری بر بستر آبی توسعه خواهد یافت به همین دلیل وزارت نیرو به تدوین شیوه‌نامه اجرایی فعالیت‌های گردشگری و تفریحی در منابع و تاسیسات آبی پیرامون آنها پرداخته است.
        </p>
      </div>
      <div class="ouo">
        <?php
        $node = node_load(3326);
        foreach ($node->field_attachment['und'] as $item):
          ?>
          <div class="colmd-5">
            <div>
              <a href="<?php echo file_create_url($item['uri']);?>">
                <h3><?php echo !empty($item['description'])? $item['description'] : $item['origname'];?></h3>
              </a>
            </div>
          </div>
        <?php endforeach;?>
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
      border-bottom: 2px solid white;
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
      padding: 40px 15px;
      text-align: justify;
      font-size: 15px;
      line-height: 2;
      position: relative;
      width: 100vw;
      right: calc(50% - 50vw);
      background: #fff;
      border-bottom: 1px solid #ddd;
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
    .ouo{
      margin: 50px 0;
    }
    .ouo .colmd-5 div{
      background: #ffffff;
      box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
      border-right: 3px solid #FF9800;
      margin-bottom: 15px;
    }

    .ouo .colmd-5 div h3 {
      font-size: 14px;
      padding: 15px 0;
      margin: 0;
    }
    .ouo .colmd-5 h3:before{
      font-family: glyphi;
      vertical-align: middle;
      font-size: 18px;
      color: #FF9800;
      padding-right: 15px;
      content: "\e025";
      margin-left:10px
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
