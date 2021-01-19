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
            <h1>برنامه های گردشگری</h1>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container" style="margin-top:50px">
      <div class="lable-lbl">
          سفرهای چند روزه
      </div>
  </div>
  <section class="container">
    <div class="few">

    <div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/Yazd">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/y1.jpg"/>
                  <h3>برنامه اول : یزد</h3>
              </div>
            </a>
					</div>
        </div>
				<div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/Khuzestan">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/k2.jpg"/>
                  <h3>برنامه دوم : خوزستان</h3>
              </div>
            </a>
					</div>
        </div>
				<div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/aras">
              <div>
                  <img src="/sites/default/files/aras11.JPG"/>
                  <h3>برنامه سوم : ارس</h3>
              </div>
            </a>
					</div>
        </div>
				<div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/tabas">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/image/tabas/az.jpg"/>
                  <h3>برنامه ششم : طبس</h3>
              </div>
            </a>
					</div>
        </div>
				</div>
    </div>
  </section>

  <div class="container">
      <div class="lable-lbl">
          سفرهای یک روزه
      </div>
  </div>
  <section class="container">
    <div class="one">

    <div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/Yazd">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/image/tourism/lars.jpg"/>
                  <h3>برنامه چهارم : سد لار</h3>
              </div>
            </a>
					</div>
        </div>
				<div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/Khuzestan">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/image/tourism/am1.jpg"/>
                  <h3>برنامه پنجم : سد امیرکبیر 1</h3>
              </div>
            </a>
					</div>
        </div>
				<div class="col-md-4">
					<div class="iner">
            <a href="https://waterhouse.ir/tourism/aras">
              <div>
                  <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/amm2.jpg"/>
                  <h3>برنامه هفتم : سد امیرکبیر 2</h3>
              </div>
            </a>
					</div>
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
    .lable-lbl:after{
      content: "";
      position: absolute;
      z-index: -1;
      width: calc(100% - 140px);
      height: 2px;
      background: #ccc;
      top: 15px;
      margin-right: 10px;
    }
    .lable-lbl{
      display: block !important;
      color: #00247a;
      font-size: 18px;
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
      padding: 0 10px;
    }
    section a img{

      min-height: 250px;
      max-height: 250px;
      width:100%;
    }
    .col-md-4{
        float:right;
        margin-bottom: 20px;
    }
    .iner {
        background: white;
        box-shadow: rgba(0,0,0,0.117647) 0 1px 6px, rgba(0,0,0,0.117647) 0 1px 4px;
        background-image: url(https://www.transparenttextures.com/patterns/light-wool.png)
    }
    h3, .h3 {
        font-size: 18px !important;
        padding: 0 20px 15px 0;
    }

  </style>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
