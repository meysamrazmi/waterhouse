<div id="block-system-main" style="font-family: fanum !important;">
  <section id="menu" class="tourism-menu container">
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
            <h1>ضوابط و قوانین</h1>
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
      <div class="main-text container">
      <p>
        وزارت نیرو وظیفه شناسایی و معرفی مکان‌های اطراف بسترهای آبی را دارد. در چنین شرایطی بازار گردشگری بر بستر آبی توسعه خواهد یافت به همین دلیل وزارت نیرو به تدوین شیوه‌نامه اجرایی فعالیت‌های گردشگری و تفریحی در منابع و تاسیسات آبی پیرامون آنها پرداخته است.
      </p>
      <?php
      $node = node_load(3326);
      ?>
      <div class="ouo">
        <?php
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
    .ouo{
      margin-top:50px;
    }
    .ouo .colmd-5 div{
    background: #f2f2f2;
    box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
    border: 1px solid #00bcd4;
    border-width: 0px 2px 0px 0px;
    padding: 5px 0;
    margin-bottom: 15px;
    }

    .ouo .colmd-5 div h3{
      font-size:14px
    }
	.ouo .colmd-5 h3:before{
      font-family: glyphi;
    display: inline-block;
    float: right;
    font-size: 18px;
    color: #2bbfbd;
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
