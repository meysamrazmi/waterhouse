<div id="block-system-main">

  <section id="menu" class="tourism-menu container">
    <?php
    $block = module_invoke('menu', 'block_view', 'menu-tourismmain');
    print render($block['content']);
    ?>
  </section>
  <div style="max-width:1500px;margin:0 auto;">
    <?php if(!empty($node->field_image['und'])):?>
    <section class="main-slider">
      <div class="owl-carousel">
        <?php
        foreach ($node->field_image['und'] as $file) {
          $image = image_style_url('1850x500', $file['uri']);
          print '<img src="'. $image .'">';
        }
        ?>
      </div>
    </section>
    <?php endif;?>

  <section id="media" class="media" style="display:none">
      <div>
        <img src="/sites/all/themes/waterhouse/images/meysam/image/tourism/safar-negar.png" />
      </div>
      <div class="row">
        <a href="/tourism/gallery" target="_blank">
          <div class="col-md-6 col h550">
            <figure class="ax">
              <img src="/sites/all/themes/waterhouse/images/meysam/y1.jpg"/>
              <figcaption>
                <div class="square">
                  <div></div>
                </div>
                <h2>برنامه شماره<span> یک</span></h2>
                <p>یزد</p>
              </figcaption>
            </figure>
          </div>
        </a>
        <a href="/tourism/gallery" target="_blank">
          <div class="col-md-6" style="padding:0">
            <div class="col-md-6 col h220">
              <figure class="ax">
                <img src="/sites/all/themes/waterhouse/images/meysam/k2.jpg"/>
                <figcaption>
                  <div class="square">
                    <div></div>
                  </div>
                  <h2>برنامه شماره<span> دو</span></h2>
                  <p>شمال خوزستان</p>
                </figcaption>
              </figure>
            </div>
        </a>
        <a href="/tourism/gallery" target="_blank">
          <div class="col-md-6 col h220">
            <figure class="ax">
              <img src="/sites/default/files/aras11.JPG"/>
              <figcaption>
                <div class="square">
                  <div></div>
                </div>
                <h2>برنامه شماره<span> سه </span></h2>
                <p>رودخانه ارس</p>
              </figcaption>
            </figure>
          </div>
        </a>
        <div class="col-md-12">
          <div class="item">
            <video width="176" controls>
              <source src="/sites/default/files/manual/tour/Montion-yazd.mp4" type="video/mp4">
              <source src="/sites/default/files/manual/tour/Montion-yazd.mp4" type="video/ogg">
              مرورگر شما از این قابلیت استفاده نمی کند
            </video>
          </div>
        </div>
      </div>
  </section>
  <section class="media2" style="display:none">
    <div class="row">
      <a href="/tourism/gallery" target="_blank">
        <div class="col-md-4 pr">
          <figure class="ax h550">
            <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/sad.jpg"/>
            <figcaption>
              <div class="square">
                <div></div>
              </div>
              <h2>برنامه شماره<span> پنج</span></h2>
              <p>سد امیر کبیر</p>
            </figcaption>
          </figure>
        </div>
      </a>
      <div class="col-md-4 p0">
        <div>
          <video width="176" controls>
            <source src="/sites/default/files/manual/tour/motion-aras.mp4" type="video/mp4">
            <source src="/sites/default/files/manual/tour/motion-aras.mp4" type="video/ogg">
            مرورگر شما از این قابلیت استفاده نمی کند
          </video>
        </div>
        <div>
          <video width="176" controls>
            <source src="/sites/default/files/manual/tour/Montion-ahwaz.mp4" type="video/mp4">
            <source src="/sites/default/files/manual/tour/Montion-ahwaz.mp4" type="video/ogg">
            مرورگر شما از این قابلیت استفاده نمی کند
          </video>
        </div>
      </div>
      <a href="/tourism/gallery" target="_blank">
        <div class="col-md-4 pl">
          <figure class="ax h550">
            <img src="/sites/all/themes/waterhouse/images/meysam/image/lar/daryache.jpg"/>
            <figcaption>
              <div class="square">
                <div></div>
              </div>
              <h2>برنامه شماره<span> چهار</span></h2>
              <p>سد لار</p>
            </figcaption>
          </figure>
        </div>
      </a>
    </div>
  </section>

  <section class="list-city full-width">
    <h3 class="tourism-header" data-aos="fade-up" data-aos-delay="150">جدیدترین فراخوان های سرمایه گذاری در گردشگری</h3>
    <div class="show-city container" data-aos="fade-right" data-aos-delay="450">
      <div class="tab" style="z-index:1">
        <div class="menu">
          <a class="active">
            <div ><span class="light"></span></div>
          </a>
          <a>
            <div><span class="light"></span></div>
          </a>
          <a>
            <div><span class="light"></span></div>
          </a>
        </div>
      </div>
      <div class="tab" style="width: 100%;">
        <ul class="city" style="height:300px">
          <li class="active">
            <div class="image-border" >
              <img title="سدهای استان گلستان" alt="سدهای استان گلستان" src="/sites/default/files/tourism/1-سدهای استان گلستان.jpg"/>
              <div class="img-shape"></div>
            </div>
            <div class="txt">
              <h2 class="city-name">شناسایی سرمایه‌گذار سدهای استان گلستان</h2>
              <p class="city-cap">
                آگهی فراخوان سرمایه گذاری گردشگری آب سدهای مخزنی دانشمند، محمدآباد کتول وتوشن
              </p>
              <span class="city-link swip-right">
                  <a href="/content/3164" target="_blank">مشاهده و کسب اطلاعات بیشتر</a>
                </span>
            </div>
          </li>
          <li>
            <div class="image-border" >
              <img title="سدهای آذربایجان غربی" alt="سدهای آذربایجان غربی"  src="/sites/default/files/tourism/2-سدهای آذربایجان غربی.jpg" />
              <div class="img-shape"></div>
            </div>
            <div class="txt">
              <h2 class="city-name">واگذاری سدهای آذربایجان غربی در راستای فعالیتهای گردشگری</h2>
              <p class="city-cap">
                فراخوان واگــذاری ســدهاي شــهرچای، حســنلو و زولا بــه منظــور اجــرای فعالیتهــای گردشــگری بــه صــورت اجــاره
              </p>
              <span class="city-link swip-right">
                  <a href="/content/3164" target="_blank">مشاهده و کسب اطلاعات بیشتر</a>
                </span>
            </div>
          </li>
          <li>
            <div class="image-border" >
              <img title="سد قلعه چای" alt="سد قلعه چایسفر گردشگری ارس" src="/sites/default/files/tourism/3-سد قلعه چای.jpg" />
              <div class="img-shape"></div>
            </div>
            <div class="txt">
              <h2 class="city-name">فراخوان شناسایی و جذب سرمایه گذار و ایده های برتر جهت توسعه گردشگری سد قلعه چای</h2>
              <p class="city-cap">
                شرکت آب منطقه ای آذربایجان شرقی در نظر دارد سرمایه گذاری در طرح گردشگری و تفریحی پیرامون سد قلعه چای شهرستان عجب شیر را به سرمایه گذاران واجد شرایط و دارای ایده های نو واگذار نماید.
              </p>
              <span class="city-link swip-right">
                  <a href="/content/3164" target="_blank">مشاهده و کسب اطلاعات بیشتر</a>
                </span>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>
  <section class="list-city2" style="direction:rtl">
    <h3 class="tourism-header" data-aos="fade-up" data-aos-delay="150">ظرفیت های گردشگری آب در استانها</h3>
    <div class="show-city2 container" data-aos="fade-left" data-aos-delay="450">
      <div>
        <div class="tab2">
          <div class="menu2">
            <a class="active2">
              <div ><span class="light2"></span></div>
            </a>
            <a>
              <div><span class="light2"></span></div>
            </a>
            <a>
              <div><span class="light2"></span></div>
            </a>
          </div>
        </div>
        <div class="tab2">
          <ul class="city2" style="height:300px">
            <li class="active2">
              <div class="image-border2" >
                <img title="سد امیرکبیر" alt="سد امیرکبیر"  src="/sites/default/files/tourism/1-سد امیرکبیر.jpg" />
                <div class="img-shape"></div>
              </div>
              <div class="txt2">
                <h2 class="city-name2">سد امیرکبیر</h2>
                <p class="city-cap2">
                  سد امیرکبیر واقع بر بر روی رودخانه کرج در ۲۵ کیلومتری جاده کرج به چالوس قرار دارد. این سد، اولین سد چندمنظوره کشور و یکی از منابع تأمین آب شهر تهران است.؛
                </p>
                <span class="city-link2 swip-left">
										<a href="https://waterhouse.ir/tourism/provinces/3229">مشاهده و کسب اطلاعات بیشتر</a>
									</span>
              </div>
            </li>
            <li>
              <div class="image-border2" >
                <img title="سد تبارک قوچان" alt="سد تبارک قوچان"  src="/sites/default/files/tourism/2-سد تبارک.jpg" />
                <div class="img-shape"></div>
              </div>
              <div class="txt2">
                <h2 class="city-name2">سد تبارک قوچان</h2>
                <p class="city-cap2">
                  سد تبارک قوچان از به ارتفاع 74 متر در راستای تامین نیاز آب شرب و کنترل سیلاب های منطقه بنا شده و یکی از جاذبه های گردشگری استان خراسان رضوی محسوب میشود.
                </p>
                <span class="city-link2 swip-left">
										<a href="https://waterhouse.ir/tourism/provinces/3333">مشاهده و کسب اطلاعات بیشتر</a>
									</span>
              </div>
            </li>
            <li>
              <div class="image-border2" >
                <img title="سد گاران مریوان" alt="سد گاران مریوان"  src="/sites/default/files/tourism/3-سد گاران مریوان.jpg" />
                <div class="img-shape"></div>
              </div>
              <div class="txt2">
                <h2 class="city-name2">سد گاران مریوان</h2>
                <p class="city-cap2">
                  سفر اول مجابمون کرد که بازدید از سد امیرکبیر و روستای زیبای واریان توی زمستون لطف دیگه ای دارهسد گاران واقع در مریوان استان کردستان با قابلیت انواع طرح‌های #گردشگری مورد امکان‌سنجی قرار گرفته و پتانسیل تبدیل شدن به یکی از مراکز مهم #گردشگری_آبی منطقه را داراست.
                </p>
                <span class="city-link2 swip-left">
										<a href="https://waterhouse.ir/tourism/provinces/3284">مشاهده و کسب اطلاعات بیشتر</a>
									</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div style="display:none">
    <img src="/sites/all/themes/waterhouse/images/meysam/image/tourism/safar.png" />
  </div>
  <div class="container next" style="direction:ltr;display:none"  >
    <div id="myCarousel8" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <section>
            <h2>جنوب خوزستان</h2>
            <div class="content">
              <p><a href="" target="_blank" class="swip-left">مشاهده بیشتر</a></p>
            </div>
            <div class="img">
              <img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/dilam.jpg" style="min-height:410px"/>
            </div>
          </section>
        </div>

      </div>
    </div>
  </div>

  <div class="Main-timeline none-sami">
    <div>
      <img src="/sites/all/themes/waterhouse/images/meysam/image/tourism/taghvim.png" />
    </div>
    <section class="Tslide">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-sm-10">
            <ul class="box-left">
              <li class="active img trip1">
                <div class="info">
                  <h6>سفر</h6>
                  <h2>زاینده رود</h2>
                  <p><strong style="color:#fdb913">(مهر 99)</strong></p>
                </div>
              </li>
              <li class="img trip2">
                <div class="info">
                  <h6>بازدید یک روزه</h6>
                  <h2>سد لتیان</h2>
                  <p><strong style="color:#fdb913">(آبان 99)</strong></p>
                </div>
              </li>
              <li class="img trip3">
                <div class="info">
                  <h6>سفر</h6>
                  <h2>استان گلستان</h2>
                  <p><strong style="color:#fdb913">(آذر 99)</strong></p>
                </div>
              </li>
              <li class="img trip4">
                <div class="info">
                  <h6>سفر</h6>
                  <h2>خلیج فارس</h2>
                  <p><strong style="color:#fdb913">(دی 99)</strong></p>
                </div>
              </li>
              <li class="img trip5">
                <div class="info">
                  <h6>سفر یک روزه</h6>
                  <h2>بازدید از سد 15 خرداد قم</h2>
                  <p><strong style="color:#fdb913">(بهمن 99)</strong></p>
                </div>
              </li>
              <li class="img trip6">
                <div class="info">
                  <h6>سفر</h6>
                  <h2>کارون</h2>
                  <p><strong style="color:#fdb913">(اسفند 99)</strong></p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-2 col-sm-2">
            <div class="listnumber">
              <a class="active">
                <p>مهر 99</p>
              </a>
              <a>
                <p>آبان 99</p>
              </a>
              <a>
                <p>آذر 99</p>
              </a>
              <a>
                <p>دی 99</p>
              </a>
              <a>
                <p>بهمن 99</p>
              </a>
              <a>
                <p>اسفند 99</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>

    $('.main-slider .owl-carousel').owlCarousel({
      rtl:true,
      loop:true,
      dots: true,
      animateOut: 'fadeOut',
      margin:15,
      nav:false,
      autoplay:  true,
      autoplayTimeout: 15000,
      autoHeight:true,
      responsiveClass:true,
      responsive:{
        0:{
          items:1
        }
      }
    })

  </script>

    <section class="news full-width" data-aos="fade-up" data-aos-delay="600">
      <h3 class="tourism-header"><span>اخبار گردشگری آب</span></h3>
      <?php
      echo views_embed_view('tourism_news', 'block');
      ?>
    </section>

    <section id="trip" class="trip">
      <div class="title-col" data-aos="fade-right" data-aos-delay="600">
        <h3 class="tourism-header">گفتگو، میزگرد و بینارهای آموزشی</h3>
        <p>برگزاری میزگردها و بینارهای آنلاین یکی از اقدامات موثر و مهم در راستای اجرایی شدن سیاستهای تسهیل و توسعه سرمایه‌گذاری در بخش گردشگری و تفریحی پیرامون منابع و تاسیسات آبی می‌باشد.</p>
      </div>
      <div class="purp">
        <?php
        $webinar1 = node_load(3434);
        $webinar2 = node_load(3435);
        $webinars = [$webinar1, $webinar2];
        $i = 1;
        foreach ($webinars as $webinar) :
          ?>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
            <div class="main">
              <div id="myCarousel<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <?php
                  $j = 0;
                  foreach ($webinar->uc_product_image['und'] as $image) :
                    $image = image_style_url('300x400', $image['uri']);
                    ?>
                    <div class="item <?php echo $j == 0 ? 'active' : ''; ?>">
                      <img src="<?php echo $image; ?>"/>
                    </div>
                  <?php endforeach;?>
                </div>
                <ol class="carousel-indicators">
                  <?php
                  $j = 0;
                  foreach ($webinar->uc_product_image['und'] as $image) :
                    ?>
                    <li data-target="#myCarousel<?php echo $i; ?>" data-slide-to="<?php echo $j; ?>" class="<?php echo $j == 0 ? 'active' : ''; ?>"></li>
                    <?php
                    $j++;
                  endforeach;?>
                </ol>
              </div>
              <a href="/node/<?php echo $webinar->nid; ?>" target="_blank"><?php echo $webinar->title; ?></a>
              <a class="button" href="/node/<?php echo $webinar->nid; ?>" target="_blank" class="swip-left">ثبت نام</a>
            </div>
          </div>
          <?php
          $i++;
        endforeach;?>
      </div>
    </section>

    <section class="hamian full-width" data-aos="fade-up" data-aos-delay="600">
      <h3 class="tourism-header">حامیان و سیاستگذاران</h3>
      <div class="logos container">
        <a href="https://www.moe.gov.ir/" target="_blank">
          <img src="/sites/all/themes/waterhouse/images/meysam/image/niro.png"  style="width: 80px;">
        </a>
        <a href="http://www.wrm.ir/" target="_blank">
          <img style="width:150px;" src="/sites/all/themes/waterhouse/images/tourismfooter/Logo.png">
        </a>
        <a href="https://www.mcth.ir/" target="_blank">
          <img src="/sites/all/themes/waterhouse/images/meysam/image/gardeshgari.png" style="width: 120px;">
        </a>
      </div>
    </section>

    <section class="circular-status" data-aos="zoom-in" data-aos-delay="450" style="display: none;">
      <div class="row">
        <div class="col col-lg-3 col-md-3 col-sm-12">
          <div>
            <div class="circle" href="#demo2" class="circle circle-shode" data-toggle="collapse">
              <div class="info">
                <svg height="44pt" viewBox="-32 0 440 440.5" width="44pt">
                  <path d="m326.648438 31.300781h-17.5v-21.300781c0-5.523438-4.476563-10-10-10-5.519532 0-10 4.476562-10 10v21.398438h-201.898438v-21.398438c0-5.523438-4.476562-10-10-10s-10
								      4.476562-10 10v21.398438h-17c-27.609375.011718-49.988281 22.390624-50 50v309.101562c.011719 27.609375 22.390625 49.988281 50 50h276.300781c27.609375-.011719
								      49.988281-22.390625 50-50v-309.199219c0-27.574219-22.324219-49.945312-49.902343-50zm-185.398438 295.097657-43.898438 42c-1.835937 1.816406-4.320312 2.824218-6.902343
								      2.800781-2.652344-.011719-5.199219-1.050781-7.097657-2.898438l-23.902343-23.902343c-3.894531-3.890626-3.894531-10.203126 0-14.097657s10.207031-3.894531 14.101562 0l17
								      17 36.898438-35.199219c1.910156-1.835937 4.46875-2.832031 7.113281-2.777343 2.644531.058593 5.160156 1.164062 6.988281 3.074219 1.832031 1.890624 2.832031 4.433593
								      2.773438 7.0625-.054688 2.632812-1.164063 5.128906-3.074219 6.9375zm0-100-43.898438 42c-1.835937 1.816406-4.320312 2.824218-6.902343
								      2.800781-2.652344-.011719-5.199219-1.050781-7.097657-2.898438l-23.902343-23.902343c-3.894531-3.890626-3.894531-10.203126 0-14.097657s10.207031-3.894531
								      14.101562 0l17 17 36.898438-35.199219c1.910156-1.835937 4.46875-2.832031 7.113281-2.777343 2.644531.058593 5.160156 1.164062 6.988281 3.074219
								      1.832031 1.890624 2.832031 4.433593 2.773438 7.0625-.054688 2.632812-1.164063 5.128906-3.074219 6.9375zm0-100-43.898438 42c-1.835937
								      1.816406-4.320312 2.824218-6.902343 2.800781-2.652344-.011719-5.199219-1.050781-7.097657-2.898438l-23.902343-23.902343c-3.894531-3.890626-3.894531-10.203126
								      0-14.097657s10.207031-3.894531 14.101562 0l17 17 36.898438-35.199219c1.910156-1.835937 4.46875-2.832031 7.113281-2.777343 2.644531.058593 5.160156 1.164062
								      6.988281 3.074219 1.832031 1.890624 2.832031 4.433593 2.773438 7.0625-.054688 2.632812-1.164063 5.128906-3.074219 6.9375zm169.199219
								      223.800781h-115c-5.523438 0-10-4.476563-10-10 0-5.523438 4.476562-10 10-10h115c5.523437 0 10 4.476562
								      10 10 0 5.523437-4.476563 10-10 10zm0-100h-115c-5.523438 0-10-4.476563-10-10 0-5.523438 4.476562-10 10-10h115c5.523437 0 10 4.476562 10 10 0 5.523437-4.476563
								      10-10 10zm0-100h-115c-5.523438 0-10-4.476563-10-10 0-5.523438 4.476562-10 10-10h115c5.523437 0 10 4.476562 10 10 0 5.523437-4.476563 10-10 10zm0 0" />
                </svg>
                <p class="text">سفرهای برگزار شده</p>
              </div>
            </div>
            <div id="demo2" class="collapse">
              <table class="table">
                <tr>
                  <td class="th">نام شهر</td>
                  <td class="th">تاریخ</td>
                  <td class="th"></td>
                </tr>
                <tr>
                  <td>یزد</td>
                  <td>8 آبان 97</td>
                  <td><a href="/tourism/Yazd" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>خوزستان</td>
                  <td>14 اسفند 97</td>
                  <td><a href="/tourism/Khuzestan" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>ارس</td>
                  <td>1 آبان 98</td>
                  <td><a href="/tourism/aras" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>سد لار</td>
                  <td>23 آبان 98</td>
                  <td><a href="/tourism/lar" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>سد امیر کبیر</td>
                  <td>7 آذر 98</td>
                  <td><a href="/tourism/amirkabir" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>طبس</td>
                  <td>2 بهمن 98</td>
                  <td><a href="/tourism/tabas" target="_blank">بیشتر</a></td>
                </tr>
                <tr>
                  <td>سد امیر کبیر 2</td>
                  <td>18 بهمن 98</td>
                  <td><a href="/tourism/amirkabir2" target="_blank">بیشتر</a></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12">
          <div>
            <div href="#demo1" class="circle circle-darhal" data-toggle="collapse">
              <div class="info">
                <svg  xmlns="http://www.w3.org/2000/svg"  height="59px" viewBox="0 0 21.477 21.478">
                  <g>
                    <path d="M17.782,4.736c-2.172-1.708-4.248-1.705-6.36-0.141C9.248,6.203,5.35,4.935,4.904,2.339
		C4.702,1.158,4.373,1.303,3.708,1.802C2.775,2.503,1.91,2.79,1.095,1.652C0.871,1.342,0.623,1.396,0.317,1.618
		c-0.295,0.218-0.37,0.427-0.284,0.771C0.407,3.899,0.62,5.485,1.877,6.6c0.31,0.272,0.466,0.64,0.255,0.893
		C0.765,9.143,2.157,9.903,3.18,10.72c0.579,0.46,0.972,0.84,1.054,1.683c0.05,0.508,0.223,1.724,1.038,1.555
		c1.742-0.364,2.017,0.871,2.751,1.876c0.984,1.351,2.489,2.471,4.113,2.386c1.329-0.066,2.246-0.939,3.266,0.938
		c0.546,1.011,2.75,0.57,4.194,0.867c0.934,0.191,0.398-1.01,0.926-1.305c0.088-0.051,0.171-0.115,0.253-0.174
		c0.402-0.287,0.763-1.446,0.693-1.911c-0.064-0.415-0.307-0.552-0.61-0.773c-0.93-0.668-2.031-1.346-0.711-2.661
		c0.259-0.259,0.379-0.816-0.034-0.912c-1.441-0.326-0.783-1.525-1.035-2.321c-0.365-1.154,0.618-2.102,0.661-3.535
		C20.003,5.2,18.499,5.3,17.782,4.736z"/>
                  </g>
                </svg>
                <p class="text">نقشه گردشگری ایران</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12">
          <div>
            <div href="#demo" class="circle circle-ati" data-toggle="collapse">
              <div class="info">
                <svg height="59px" viewBox="-18 -18 597.33331 597.33331" width="59px" xmlns="http://www.w3.org/2000/svg">
                  <path d="m93.5 80.320312c-5.730469 6.59375-8.324219 15.347657-7.097656 24l18.597656 130c2.1875 14.726563 14.808594 25.644532 29.703125 25.679688h25.296875v-40c0-5.523438
							            4.476562-10 10-10h60c5.523438 0 10 4.476562 10 10v40h80v-40c0-5.523438 4.476562-10 10-10h60c5.523438 0 10 4.476562 10 10v40h25.296875c14.898437-.039062 27.523437-10.96875
							            29.703125-25.699219l18.597656-130c1.222656-8.613281-1.347656-17.332031-7.039062-23.910156-5.695313-6.578125-13.960938-10.367187-22.65625-10.390625h-327.804688c-8.671875.003906-16.914062
							            3.769531-22.597656 10.320312zm0 0" />
                  <path d="m500 420h60v120h-60zm0 0" />
                  <path d="m340 230h40v80h-40zm0 0" />
                  <path d="m80 560h400v-359.226562l-5.199219 36.34375c-3.625 24.570312-24.667969 42.800781-49.503906 42.882812h-25.296875v40c0 5.523438-4.476562 10-10 10h-60c-5.523438
							            0-10-4.476562-10-10v-40h-80v40c0 5.523438-4.476562 10-10 10h-60c-5.523438
							            0-10-4.476562-10-10v-40h-25.296875c-24.839844-.085938-45.878906-18.320312-49.503906-42.890625l-5.199219-36.320313zm60-160c0-5.523438 4.476562-10
							            10-10h260c5.523438 0 10 4.476562 10 10v120c0 5.523438-4.476562 10-10 10h-260c-5.523438 0-10-4.476562-10-10zm0 0" />
                  <path d="m180 230h40v80h-40zm0 0" />
                  <path d="m0 420h60v120h-60zm0 0" />
                  <path d="m160 410h240v100h-240zm0 0" />
                  <path d="m360 50h-20v-30h-120v30h-20v-40c0-5.523438 4.476562-10 10-10h140c5.523438 0 10 4.476562 10 10zm0 0" />
                </svg>
                <p class="text">سفرهای آتی</p>
              </div>
            </div>
            <div id="demo" class="collapse">
              <table class="table">
                <tr>
                  <td class="th">نام شهر</td>
                  <td class="th">تاریخ</td>
                  <td class="th"></td>
                </tr>
                <tr>
                  <td  colspan="3">در حال حاضر سفری وجود ندارد</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col col-lg-3 col-md-3 col-sm-12">
          <div>
            <div href="#demo0" class="circle circle-search" data-toggle="collapse">
              <div class="info">
                <svg x="0px" y="0px" width="60px" height="60px" viewBox="0 0 310.42 310.42">
                  <g>
                    <g>
                      <path d="M273.587,214.965c49.11-49.111,49.109-129.021,0-178.132c-49.111-49.111-129.02-49.111-178.13,0
								                 C53.793,78.497,47.483,140.462,76.51,188.85c0,0,2.085,3.498-0.731,6.312c-16.065,16.064-64.263,64.263-64.263,64.263
								                 c-12.791,12.79-15.836,30.675-4.493,42.02l1.953,1.951c11.343,11.345,29.229,8.301,42.019-4.49c0,0,48.096-48.097,64.128-64.128
								                 c2.951-2.951,6.448-0.866,6.448-0.866C169.958,262.938,231.923,256.629,273.587,214.965z M118.711,191.71
								                 c-36.288-36.288-36.287-95.332,0.001-131.62c36.288-36.287,95.332-36.288,131.619,0c36.288,36.287,36.288,95.332,0,131.62
								                 C214.043,227.996,155,227.996,118.711,191.71z" />
                      <g>
                        <path d="M126.75,118.424c-1.689,0-3.406-0.332-5.061-1.031c-6.611-2.798-9.704-10.426-6.906-17.038
								                     c17.586-41.559,65.703-61.062,107.261-43.476c6.611,2.798,9.704,10.426,6.906,17.038c-2.799,6.612-10.425,9.703-17.039,6.906
								                     c-28.354-11.998-61.186,1.309-73.183,29.663C136.629,115.445,131.815,118.424,126.75,118.424z" />
                      </g>
                    </g>
                  </g>
                </svg>
                <p class="text">جستجو سفرها</p>
              </div>
            </div>
            <div id="demo0" class="collapse">
              <?php $block = module_invoke('views', 'block_view', 'gardesh-block'); print render($block['content']);; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
<!-- footer -->
<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>" style="margin-top: 50px;">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>

</div>
<style>

  /* search block */
  .views-submit-button{width:100%;}
  .views-submit-button button{
    width: 100%;
    border-radius: 30px;
    background: #fdb913;
    border: none;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
  }
  #demo0 .view-filters input {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    border-radius: 30px;
  }
  .views-exposed-form .views-exposed-widget .form-submit{margin-top:0!important}
  .form-submit:hover{
    background:#fdb913;
    outline:none;
  }
  #demo0{
    margin-bottom:50px;
  }
  /* end search block */
  :root {
    --box-x-padding: 2rem;
    --box-y-padding: 2rem;
  }
  @media (min-width: 40em) {
    :root {
      --box-y-padding: 4rem;
    }
  }
  @media (min-width: 60em) {
    :root {
      --box-x-padding: 3rem;
      --box-y-padding: 6rem;
    }
  }
  @media (min-width: 40em) {
    .next  section {
      display: grid;
      grid-template-rows: repeat(3, auto);
      grid-template-columns: 4fr 4fr 5fr;
      grid-template-areas: '. . title' 'img img content' 'img img .';
      max-width: 1000px;
      margin-right: auto;
      margin-left: auto;
    }
    .next section::after {
      content: '';
      grid-column: 2/-1;
      grid-row: 1/3;
      position: relative;
      z-index: -1;
      background: #fff;
      box-shadow: 0 0.2em 1em rgba(61,48,41,0.2);
    }
    .next h2 {
      grid-area: title;
      padding-top: var(--box-y-padding);
      padding-left: var(--box-x-padding);
    }
    .content {
      grid-area: content;
      padding-bottom: var(--box-y-padding);
      padding-left: var(--box-x-padding);
      padding-right: var(--box-x-padding);
    }
    .img {
      grid-area: img;
    }
  }
  @media (min-width: 40em) {
    h2::after {
      left: var(--box-x-padding);
      top: var(--box-y-padding);
    }
  }
  .content {
    color: #4d4d4d;
    margin-bottom: var(--box-y-padding);
  }
  @media (min-width: 40em) {
    .content {
      margin-bottom: 0;
    }
  }
  .next p {
    margin-top: 0;
    margin-bottom: var(--box-y-padding);
    line-height: 1.5;
  }
  .content a {
    text-decoration: none;
    border: 1px solid #b3b3b3;
    border-radius: 1em;
    padding: 1em 2em;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.05em;
    color: inherit;
    display: inline-block;
    background-color: #fff;
  }
  .img {
    position: relative;
  }
  .img a {
    position: absolute;
    left: 0;
    bottom: 0;
  }
  .next img {
    max-width: 100%;
    vertical-align: middle;
    box-shadow: 0 0.2em 1.2em rgba(61,48,41,0.1);
  }
  /*img effect*/
  figure.ax {
    color: #fff;
    position: relative;
    overflow: hidden;
    width: 100%;
    text-align: center;
  }
  figure.ax * {
    transition: all 0.3s ease-in-out;
  }
  figure.ax img {
    width: 100%;
  }
  figure.ax figcaption {
    bottom: 0;
    display: block;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
  }
  figure.ax h2 {
    font-weight: 400;
    left: 0;
    right: 0;
    letter-spacing: -1px;
    margin: 0 auto;
    position: absolute;
    text-transform: uppercase;
    bottom: 50%;
    transform: translateY(50%);
  }
  figure.ax h2 span {
    font-weight: 800;
  }
  figure.ax p {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 50%;
    opacity: 0;
    font-size: 14px;
    transform: translateY(-20%) scale(0.7);
  }
  figure.ax .square {
    height: 78px;
    width: 78px;
    overflow: hidden;
    position: absolute;
    top: 50%;
    left: 50%;
    content: '';
    transform: rotate(45deg) translate(-50%, -50%);
    transform-origin: 0 0;
  }
  figure.ax .square:before,
  figure.ax .square:after,
  figure.ax .square div:before,
  figure.ax .square div:after {
    background-color: #ffffff;
    position: absolute;
    content: "";
    display: block;
    transition: all 0.4s ease-in-out;
  }
  figure.ax .square:before,
  figure.ax .square:after {
    width: 65%;
    height: 2px;
  }
  figure.ax .square div:before,
  figure.ax .square div:after {
    width: 2px;
    height: 65%;
  }
  figure.ax .square:before,
  figure.ax .square div:before {
    left: 0;
    top: 0;
  }
  figure.ax .square:after,
  figure.ax .square div:after {
    bottom: 0;
    right: 0;
  }
  figure.ax a {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
  }
  figure.ax:hover img{
    transform: scale(1.1);
  }
  figure.ax:hover figcaption{
    background:rgba(0,0,0,0.4);
  }
  figure.ax:hover h2 {
    opacity: 1;
    transform: translateY(0px);
  }
  figure.ax:hover p {
    opacity: 1;
    transform: translateY(0px) scale(1);
  }
  figure.ax:hover .square:before {
    width: 38%;
  }
  figure.ax:hover .square div:before {
    height: 38%;
  }
  figure.ax:hover .square:after {
    width: 55%;
  }
  figure.ax:hover .square div:after {
    height: 55%;
  }
</style>
<script>

  $('.view-tourism-news .view-content').addClass('owl-carousel')
  $('.view-tourism-news .view-content').owlCarousel({
    rtl:true,
    loop:false,
    margin:15,
    dots: false,
    animateOut: 'fadeOut',
    nav:true,
    autoplay:  true,
    autoplayTimeout: 10000,
    autoHeight:true,
    responsiveClass:true,
    responsive:{
      0:{
        items:2
      },
      992:{
        items:3
      },
      1200:{
        items:4
      },
      1500:{
        items:5
      }
    }
  })
  //popup
  $("#popup").toggleClass('open');
  //TAB
  setInterval(moveCitySlide, 10000);
  setInterval(moveCitySlide2, 10000);


  function moveCitySlide(){
    var len = $('.show-city .menu a');
    var i=1;
    $('.show-city .menu a').each(function () {
      i++;
      var numberIndex = $(this).index();

      if($(this).attr('class')=="active"){
        $(this).removeClass('active');
        $(".show-city ul").find("li:eq(" + numberIndex + ")").removeClass("active");
        $('.show-city ul li').removeClass('active');
        $(this).next('.show-city .menu a').addClass('active');
        $(this).next('.show-city ul li').addClass('active');
        $(".show-city ul").find("li:eq(" + numberIndex + ")").addClass("active");
        return false;
      }

      if(len.length==i){
        $('.show-city .menu a:nth-child(1)').addClass('active');
        $('.show-city ul li:nth-child(1)').addClass('active');
        $(".show-city:nth-child(1)").find("li:eq(" + numberIndex + ")").addClass("active");
      }
      numberIndex--;

    });

  }



  $(document).on("click", ".show-city .menu a", function () {
    var numberIndex = $(this).index();
    if (!$(this).is("active")) {
      $(".show-city .menu a").removeClass("active");
      $(".show-city ul li").removeClass("active");
      $(this).addClass("active");
      $(".show-city ul").find("li:eq(" + numberIndex + ")").addClass("active");
    }
  });
  //TAB2

  function moveCitySlide2(){
    var len = $('.show-city2 .menu2 a');
    var i=1;
    $('.show-city2 .menu2 a').each(function () {
      i++;
      var numberIndex = $(this).index();

      if($(this).attr('class')=="active2"){
        $(this).removeClass('active2');
        $(".show-city2 ul").find("li:eq(" + numberIndex + ")").removeClass("active2");
        $('.show-city2 ul li').removeClass('active2');
        $(this).next('.show-city2 .menu2 a').addClass('active2');
        $(this).next('.show-city2 ul li').addClass('active2');
        $(".show-city2 ul").find("li:eq(" + numberIndex + ")").addClass("active2");
        return false;
      }

      if(len.length==i){
        $('.show-city2 .menu2 a:nth-child(1)').addClass('active2');
        $('.show-city2 ul li:nth-child(1)').addClass('active2');
        $(".show-city2:nth-child(1)").find("li:eq(" + numberIndex + ")").addClass("active2");
      }
      numberIndex--;

    });

  }


  $(document).on("click", ".show-city2 .menu2 a", function () {
    var numberIndex = $(this).index();
    if (!$(this).is("active2")) {
      $(".show-city2 .menu2 a").removeClass("active2");
      $(".show-city2 ul li").removeClass("active2");
      $(this).addClass("active2");
      $(".show-city2 ul").find("li:eq(" + numberIndex + ")").addClass("active2");
    }
  });

  $(document).on("click", ".Tslide .listnumber a", function () {
    var numberIndex = $(this).index();
    if (!$(this).is("active")) {
      $(".Tslide .listnumber a").removeClass("active");
      $(".Tslide ul li").removeClass("active");
      $(this).addClass("active");
      $(".Tslide ul").find("li:eq(" + numberIndex + ")").addClass("active");
    }
  });
  //AOS
  AOS.init({
    offset: 0,
    duration: 700,
    easing: 'ease-in-sine',
    delay: 500,
    once:true,
  });
  //menu top
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  if (matchMedia('(max-width: 768px)').matches) {
    $(".page-node-1548#block-system-main.trip.col-md-4").append($("hr"));
  }

</script>
