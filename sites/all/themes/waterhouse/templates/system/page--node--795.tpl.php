<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div id="block-system-main">
    <section id="intro" class="panel main" data-section-name="main">
	    <div class="inner">
	        <header data-aos="fade-up" data-aos-delay="1000">
	        	<h1></h1>
	        	<p class="tagline">در بخش آب کشور</p>
	        </header>
            <p data-aos="fade-up" data-aos-delay="1100" class="desc" style="word-spacing:1px; margin-top: 31px; font-family: fanum;"> گزارش نشست و نمایشگاه تخصصی؛  ستاد وزارت نیرو  </p>
            <p data-aos="fade-up" data-aos-delay="1100" class="desc" style="word-spacing:1px; margin-top: 24px; font-family: fanum;"> برگزار شده در تاریخ 21 و 22 آذرماه 1396 </p>
            <a href="#navigat"  data-aos-delay="1800"  class="scroll" data-aos="zoom-out" data-aos-anchor-placement="top-bottom"></a> 
        </div>
        <div class="newlogo" data-aos-delay="2400" data-aos="zoom-out">
            <img src="./sites/all/themes/waterhouse/images/land/loole.png" width="90" height="90" alt="نشست و نمایشگاه تخصصی توانمندی های داخلی تولید و کاربرد انواع لوله در بخش آب کشور" title="نشست و نمایشگاه تخصصی توانمندی های داخلی تولید و کاربرد انواع لوله در بخش آب کشور">
            <img src="./sites/all/themes/waterhouse/images/land/vezaratniroo.png" width="90" height="auto" alt="وزارت نیرو جمهوری اسلامی ایران" title="وزارت نیرو جمهوری اسلامی ایران">
        </div>
    </section>

    <section id="navigat" class="panel" style="background: linear-gradient(to bottom left, #ffffff ,#ccdee9);">
        <div class="wh" style="padding: 60px 0px 60px; max-width: 1400px;">
            <h4 data-aos="zoom-in-up" data-aos-delay="600"> دسترسی سریع </h4>
            <div  style="padding-bottom: 25px;">
               <a href="#moarrefi" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span> فیلم معرفی همایش </span>
               </a>
               <a href="#sandika" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span>برگزارکنندگان همایش</span>
               </a>
               <a href="#timing" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span>  دستاوردهای نشست تخصصی </span>
               </a>
               <a href="#statement" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span> بیانیه همایش </span>
               </a>                
               <a href="#virtual" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span>نمایشگاه مجازی</span>
               </a>
               <a href="#vijename" class="navi"  data-aos="fade-up" data-aos-delay="950">
                   <span> مشارکت در ویژه نامه </span>
               </a>
               <a href="#gallery-film" class="navi" data-aos="fade-up" data-aos-delay="950">
                   <span> گالری فیلم </span>
               </a>
               <a href="#gallery-picture" class="navi" data-aos="fade-up" data-aos-delay="950" >
                   <span> گالری تصاویر </span>
               </a>
            </div>
        </div>
    </section>

    <section id="moarrefi" class="panel" data-aos="fade-left" data-aos-delay="2100" style="background-color: transparent;text-align: center;padding: 60px 0 110px 0;" >
        <h2 style="position: relative;"> فیلم معرفی همایش </h2>
        <?php
        //pipe-landing.webm
        $video_attrs = array(
        	'src' => '/sites/default/files/field/video/pipe-landing.webm',
        	'width' => '840px',
        	'height' => '447px',
        	'videoWidth' => '840px',
        	'videoHeight' => '447px',
        	'controls' => true,
        );
        $video_sett =  array(
        	'download_link' => true,
        	'download_text' => 'دانلود',
        );
        print theme('mediaelement_video', array('attributes' => $video_attrs, 'settings' => $video_sett));
        ?>
    </section>

    <!-- <section id="section1" class="panel" data-aos="fade-up" data-aos-delay="2100"  style="background-color: #f7f7f7;">
        <div class="wh" style="padding: 60px 15px;">
            <h2 data-aos="zoom-in-up" data-aos-delay="400"> گزارش تحلیلی نشست و نمایشگاه تخصصی توانمندی های داخلی تولید و کاربرد انواع لوله در بخش آب کشور </h2>
            <div class="aboutus">
                <p data-aos="fade-up" data-aos-delay="900"> به منظور آشنايی مديران، مجريان طرح و كارشناسان صنعت آب كشور با توانمندی های توليدكنندگان داخلی در توليد و تامين انواع لوله مورد نياز جهت اجرای طرح های بزرگ انتقال آب، نمایشگاه و نشست تخصصی با عنوان "نمايشگاه و نشست تخصصی توانمندی های توليد و كاربرد انواع لوله در بخش آب" با حمایت شرکت مدیریت منابع آب ایران و همچنین با حضور سنديكاها و انجمن های صنفی متشكل از توليدكنندگان انواع لوله در نیمه دوم آذرماه در محل ساختمان اصلی وزارت نیرو برگزار می گردد. </p>
                <strong data-aos="fade-left" data-aos-delay="1200">اهداف و کارکردهای شرکت در این برنامه: </strong>
                <ul data-aos="fade-up" data-aos-delay="1250">
                    <li>آشنايی بخش صنعت با نيازمندی های بخش آب كشور</li>
                    <li>آشنايی با آخرين دستاوردها، توانمدی ها و نوآوری ها در حوزه توليد و كاربرد لوله و اتصالات در صنعت آب (پروژه های بزرگ انتقال آب)</li>
                    <li>آشنايی با توانمندی های شرکت های توليدكننده داخلی لوله و پوشش های مربوطه</li>
                    <li>آشنايی با پروژه های برتر انتقال آب كشور و تجارب حاصل از اجرای آن ها</li>
                    <li>تبادل دانش و بهره مندی از تجارب كاربردی نخبگان و کارشناسان برتر صنعت لوله و خطوط انتقال آب كشور (حوزه های توليد، اجرا و بهره برداری)</li>
                </ul>
            </div>
        </div>
    </section> -->

    <section id="sandika" class="panel">
        <div class="wh">
           <h2 data-aos="fade-down-left" data-aos-delay="850">برگزارکنندگان همایش، انجمن ها و سندیکاهای شرکت های تولیدکننده</h2>
               <!--<img src="../conf/images/logo-bg.jpg" alt="logo-pipeline" width="100%" height="auto" >!-->
            <div>
               <a data-aos="fade-up" data-aos-delay="900" class="logo" href="http://waterhouse.ir/sandika/steel" target="_blank">
                   <!--<img src="./images/logo1.png" width="90" height="90" alt="سندیکای تولیدکنندگان لوله و پروفیل فولادی ایران" title="سندیکای تولیدکنندگان لوله و پروفیل فولادی ایران"> -->
                   <span>تولیدکنندگان لوله های فولادی</span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>
               <a data-aos="fade-up" data-aos-delay="900" class="logo" href="http://waterhouse.ir/sandika/pe" target="_blank">
                   <!--<img src="./images/logo2.png" width="90" height="90" alt="انجمن صنفی تولیدکنندگان لوله و اتصالات پلی اتیلن" title="انجمن صنفی تولیدکنندگان لوله و اتصالات پلی اتیلن"> -->
                   <span>تولیدکنندگان لوله های پلی اتیلن</span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>
               <a data-aos="fade-up" data-aos-delay="900" class="logo" href="http://waterhouse.ir/sandika/composite" target="_blank">
                   <!--<img src="./images/logo3.png" width="90" height="90" alt="انجمن کامپوزیت ایران" title="انجمن کامپوزیت ایران">-->
                   <span>تولیدکنندگان لوله های کامپوزیت </span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>
               <a data-aos="fade-up" data-aos-delay="1200" class="logo" href="http://waterhouse.ir/sandika/cast-iron" target="_blank">
                   <span>تولیدکنندگان لوله های چدنی</span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>                
               <a data-aos="fade-up" data-aos-delay="1200" class="logo" href="http://waterhouse.ir/sandika/pvc" target="_blank">
                   <span>تولید کنندگان لوله و اتصالات پی وی سی</span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>
               <a data-aos="fade-up" data-aos-delay="1200" class="logo" href="http://waterhouse.ir/sandika/transfer" target="_blank">
                   <span>تولید کنندگان پوشش لوله خطوط انتقال</span>
                   <span class="more"><span>صفحه اختصاصی</span></span>
               </a>
            </div>
        </div>
    </section>

    <section id="timing" class="panel">
        <div class="kharid" data-aos="flip-right" data-aos-delay="1100"></div>
        <div class="wh">
            <h2 data-aos="flip-right" data-aos-delay="1100" >  دستاوردهای نشست تخصصی </h2>
            <div data-aos="fade-up" data-aos-delay="1100" style="padding-bottom: 30px;">
                <div class="tab tab1 active"> برنامه روز اول </div>
                <div class="tab tab2"> برنامه روز دوم </div>
            </div>
            <div class="bought-package" data-aos="zoom-in-up" data-aos-delay="1100" >
                <div class="muted">
                    برای خرید پکیج فایل ها و فیلم ها با تخفیف ویژه به <span class="to-end" to-id="discount-box" >انتهای بخش</span> مراجعه کنید. 
                </div>
            </div>
            <!-- tab1 -->
            <div class="tab-section tab1-section active">
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>مراسم افتتاحیه</h4>
                        <span class="name">جناب آقای علی اکبر شفیعی</span>
                        <p></p>
                        <span class="topic">معاون طرح و توسعه شرکت مدیریت منابع آب ایران</span>
                    </div>
                    <div class="left">
                        <h3 class="title">چالش ها و چشم انداز استفاده از انواع لوله در طرح های بزرگ بخش آب کشور</h3>
                        <p class="description">چشم‌انداز بخش آب وزارت نیرو رعايت حقوق کليه ذی نفعان و دسترسی عادلانه همگان به آب سالم و کافی و ماموريت بخش آب مديريت پايدار کمی و کيفی منابع و مصارف آب، عرضه آب مطمئن، کافی و قابل مصرف متناسب با ظرفيت‌های ملی در جهت ارتقاء بهداشت، رفاه اجتماعی و توسعه پايدار است که در این ارتباط برنامه های عملیاتی را به اجرا در می آورند از جمله اجرای طرح های انتقال آب از دیدگاه توسعه پایدار، با رعایت حقوق ذی‌نفعان و برای تامین نیازهای مختلف مصرف، مشروط به توجیهات فنی، اقتصادی، اجتماعی و منافع ملی.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <a class="colorbox-time" href="http://waterhouse.ir/iframe/873" target="_self">
                                   پیش نمایش فیلم سخنرانی   
                                </a>
                                <a class="download-time buybox-hover" href="/sites/default/files/Dr%20shafie_x264_1_0.mp4" target="_self" title="دانلود فیلم"download="Film Sokhanrani Dr.shafiee"> </a>
                            </div>
                            <div class="buybox-part">
                                <a class="colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f01-EngShafei.pdf" target="_self">
                                   پیش نمایش فایل سخنرانی   
                                </a>
                                <a class="download-time buybox-hover" href="/sites/default/files/manual/pipe-landing/pdf/01-EngShafei.pdf" target="_self"title="دانلود فایل" download="File Sokhanrani Dr.shafiee"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>مراسم افتتاحیه</h4>
                        <span class="name">جناب آقای علیرضا دائمی </span>
                        <p></p>
                        <span class="topic"> قائم‌مقام وزیر نیرو در امور بین‌الملل </span>
                    </div>
                    <div class="left">
                        <h3 class="title">سخنرانی افتتاحیه</h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part"> 
                                <a class="colorbox-time" href="http://waterhouse.ir/iframe/874" target="_self">
                                  پیش نمایش فیلم سخنرانی  
                                </a>
                                <a class="download-time buybox-hover" href="/sites/default/files/Daemi_x264_1_0.mp4" title="دانلود فایل"  target="_self" download="Film Sokhanrani Dr.Daemi"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200"class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>مراسم افتتاحیه</h4>
                        <span class="name">جناب آقای نعمت حسنی</span>
                        <p></p>
                        <span class="topic"> رئیس پژوهشکده عمران، آب و محیط زیست   </span>
                    </div>
                    <div class="left">
                        <h3 class="title"><strong>سخنرانی کلیدی: </strong> انتخاب مناسب لوله های انتقال آب و پساب  (چالش ها  و معیارها) </h3>
                        <p class="description">وضعيت طرح های اجرايی، بهره برداری و در دست مطالعه انتقال آب و نيازمندی های كنونی و آتی انواع لوله</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <a class="colorbox-time" href="http://waterhouse.ir/iframe/875" target="_self">
                                   پیش نمایش فیلم سخنرانی  
                                </a>
                                <a class="download-time buybox-hover" href="http://waterhouse.ir/sites/default/files/Dr.hasani_x264_1_0.mp4" title="دانلود فیلم"target="_self"  download="Film Sokhanrani Dr.Hasani">  </a>
                            </div>
                            <div class="buybox-part">
                                <a class="colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f03-Dr.hasani.pdf" target="_self">
                                   پیش نمایش فایل سخنرانی  
                                </a>
                                <a class="download-time buybox-hover" href="/sites/default/files/manual/pipe-landing/pdf/03-Dr.hasani.pdf" target="_self"title="دانلود فایل" download="File Sokhanrani Dr.Hasani">  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row titr">
                    <h4>معرفی توانمندی های داخلی تولید انواع لوله</h4>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name">  بابک دیانت پی </span>
                    </div>
                    <div class="left">
                        <h3 class="title">انجمن تولیدکنندگان لوله های پلی اتیلن</h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-173 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-173">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-173" name="attributes[11][173]" value="173" class="form-checkbox">
                                           خرید فیلم ارائه بابک دیانت پی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/847" title="پیش نمایش فایل" target="_self"> </a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-220 form-type-checkbox checkbox"> 
                                    <label  class="control-label" for="edit-attributes-11-220">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-220" name="attributes[11][220]" value="220" class="form-checkbox">
                                        خرید فایل ارائه بابک دیانت پی: 5,000+ تومان
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f04-Mr.Babak%20Dianatpey.pdf" title="پیش نمایش فایل" target="_self">  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>ارائه دوم:</h4>
                        <span class="name"> فرزانه خرمیان</span>
                    </div>
                    <div class="left">
                        <h3 class="title">انجمن تولیدکنندگان لوله های پی وی سی</h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-174 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-174">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-174" name="attributes[11][174]" value="174" class="form-checkbox">
                                           خرید فیلم ارائه فرزانه خرمیان: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/848" title="پیش نمایش فیلم" target="_self">  </a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-209 form-type-checkbox checkbox">
                                    <label class="control-label" for="edit-attributes-11-209">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-209" name="attributes[11][209]" value="209" class="form-checkbox">
                                        خرید فایل ارائه فرزانه خرمیان: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f05-Pages-from-PVC-Anjoman.pdf" title="پیش نمایش فایل" target="_self"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه سوم: </h4>
                        <span class="name"> رهام رفیعی</span>
                    </div >
                    <div class="left">
                        <h3 class="title">انجمن کامپوزیت ایران</h3>
                        <p class="description">در این مقاله، ابتدا انجمن کامپوزیت ایران و کمیته لوله انجمن کامپوزیت معرفی می شود، سپس به معرفی لوله کامپوزیت و بیان خصوصیات فنی لوله کامپوزیت و ویژگی ها و مزایای آن پرداخته می شود، در ادامه روش-های تولید لوله GRP و تولیدکنندگان داخلی این لوله معرفی می شوند و ظرفیت تولید داخلی مورد بررسی واقع می شود. درنهایت، چالش های صنعت لوله کامپوزیت در سه بخش چالش های طراحی و بهره برداری، چالش های کیفیتی و چالش های تولیدکنندگان بیان می شود و نقاط قابل بهبود‌ در حوزه این فناوری به صورت کلان معرفی می گردند.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-175 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-175">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-175" name="attributes[11][175]" value="175" class="form-checkbox">
                                        خرید فیلم ارائه رهام رفیعی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/849" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-207 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-207">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-207" name="attributes[11][207]" value="207" class="form-checkbox">
                                        خرید فایل ارائه رهام رفیعی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f06-Pages-from-RMR-COMP-WAT03.pdf" title="پیش نمایش  فایل" target="_self"> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه چهارم: </h4>
                        <span class="name"> عبدالحمید قدیمی</span>
                    </div >
                    <div class="left">
                        <h3 class="title">تولیدکنندگان لوله های چدنی</h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-176 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-176">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-176" name="attributes[11][176]" value="176" class="form-checkbox">
                                        خرید فیلم ارائه عبدالحمید قدیمی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/850" title="پیش نمایش فیلم" target="_self">  </a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-234 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-234">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-234" name="attributes[11][234]" value="234" class="form-checkbox">
                                        خرید فایل ارائه عبدالحمید قدیمی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f07-Pages-from-Cast-Iron.pdf" title="پیش نمایش فایل" target="_self">  </a>
                            </div>
                        </div>
                    </div>
                </div>
				<div data-aos="fade-up" data-aos-delay="1200" class="row titr">
                    <h4><span style="font-weight : bold">پنل اول : </span>اثرات متقابل لوله با آب، پساب و عوامل محیطی</h4>
                    <div class="panel-bosses"><span style="font-weight : 500">هیئت رئیسه پنل اول : </span> دکتر نعمت حسنی، دکتر رهام رفیعی، مهندس محمدرضا امیری، دکتر کامران یوسفی، مهندس محمد مداح </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name"> پریسا جهانمرد</span>
                    </div >
                    <div class="left">
                        <h3 class="title"> اثرات متقابل لوله های پی وی سی با آب، پساب و عوامل محیطی </h3>
                        <p class="description">لوله های پلیمری به دلیل مزیت های قابل توجهشان مانند دوام خوب، مقاومت به خوردگی، قیمت پایین، نصب آسان و غیره، به طور گسترده ای جایگزین لوله های فلزی قدیمی برای آب آشامیدنی شده اند. در طول این پیشرفت و تغییر، انواع مختلفی از لوله های پلاستیکی مانند PVC، PE و PP عمدتاً در شبکه های توزیع آب آشامیدنی در سراسر دنیا استفاده شده اند. بر اساس تخمین آژانس حفاظت محیط زیست آمریکا(EPA) ؛ در طول 20 سال آینده، آمریکا بین 20 تا 22 میلیون دلار برای تعمیر و جایگزینی زیرساخت های سیستم های آب آشامیدنی هزینه خواهد کرد و قابل ذکر است که در شمال آمریکا معروف ترین لوله های پلیمری؛ PVC و PE می باشند. در برنامه ملی پنج ساله دهم چین، لوله های پلاستیکی در شبکه های آب آشامیدنی شهری استفاده شدند و در سال 2015، 80% از کل لوله های مورد مصرف در سیستم توزیع آب را به خود اختصاص دادند. بنابراین، استفاده از مواد پلیمری در انتقال آب از واحدهای تصفیه آب به محل های مصرف آب آشامیدنی رو به افزایش است.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-177 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-177">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-177" name="attributes[11][177]" value="177" class="form-checkbox">
                                        خرید فیلم ارائه پریسا جهانمرد: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/851" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-224 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-224">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-224" name="attributes[11][224]" value="224" class="form-checkbox">
                                        خرید فایل ارائه پریسا جهانمرد: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f08-Pages-from-PVC-Panel01.pdf" title="پیش نمایش فایل"target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه دوم: </h4>
                        <span class="name">  روزبه آقامجیدی </span>
                    </div >
                    <div class="left">
                        <h3 class="title"> اثرات متقابل لوله های (GRP) با آب، پساب و عوامل محیطی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-178 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-178">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-178" name="attributes[11][178]" value="178" class="form-checkbox">
                                        خرید فیلم ارائه روزبه آقامجیدی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/852" title="پیش نمایش فیلم" target="_self"></a>
                            </div>    
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-212 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-212">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-212" name="attributes[11][212]" value="212" class="form-checkbox">
                                       خرید فایل ارائه روزبه آقامجیدی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f09-PANEL1ROOZBEH-AGHAMAJIDI.pdf"  title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه سوم: </h4>
                        <span class="name">  سجاد مقتدر </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> اثرات متقابل لوله های چدنی با آب، پساب و عوامل محیطی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-179 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-179">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-179" name="attributes[11][179]" value="179" class="form-checkbox">
                                        خرید فیلم ارائه سجاد مقتدر: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/853" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-227 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-227">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-227" name="attributes[11][227]" value="227" class="form-checkbox">
                                       خرید فایل ارائه سجاد مقتدر: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f10-Pagesfrom-Cast-Iron-Panel 01.pdf"   title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه چهارم: </h4>
                        <span class="name">  حامد جباری </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> اثرات متقابل لوله های پلی اتیلن با آب، پساب و عوامل محیطی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-180 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-180">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-180" name="attributes[11][180]" value="180" class="form-checkbox">
                                        خرید فیلم ارائه حامد جباری: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/854" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-232 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-232">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-232" name="attributes[11][232]" value="232" class="form-checkbox">
                                        خرید فایل ارائه حامد جباری: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f11-POLYETHYLENE-PANEL1-MR HAMED-JABBARI.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> پرسش و پاسخ </h4>
                        <span class="name"> </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> پرسش و پاسخ </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-181 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-181">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-181" name="attributes[11][181]" value="181" class="form-checkbox">
                                        خرید فیلم پرسش و پاسخ پنل اول: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview"  href="" title="پیش نمایش فیلم"  target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div data-aos="fade-up" data-aos-delay="1200" class="row titr">
                    <h4><span style="font-weight : bold">پنل دوم : </span> مقاومت لوله در مقابل عوامل محیطی و ملاحظات طراحی </h4>
                    <div class="panel-bosses"><span style="font-weight : 500">هیئت رئیسه پنل دوم : </span> دکتر نعمت حسنی، مهندس اسماعیل مسگرپور، مهندس داود گیلک، مهندس امید زارعی منش، مهندس حمید شکرالهی </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name"> مهندس عصایی</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> مقاومت لوله های کامپوزیتی (GRP) در مقابل عوامل محیطی و ملاحظات طراحی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-182 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-182">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-182" name="attributes[11][182]" value="182" class="form-checkbox">
                                        خرید فیلم ارائه عصایی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/855" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-214 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-214">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-214" name="attributes[11][214]" value="214" class="form-checkbox">
                                        خرید فایل ارائه عصایی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f13-Flood-Panel2-dr-asayee.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه دوم: </h4>
                        <span class="name"> فریبا تشکری </span>
                    </div >
                    <div class="left">
                        <h3 class="title"> مقاومت لوله های چدنی در مقابل عوامل محیطی و ملاحظات طراحی </h3>
                        <p class="description">كشور ايران بر روي كمربند زلزله واقع شده است، بنابراين پرداختن به برنامه هاي پدافند غيرعامل و مديريت بحران و آماده سازي جهت مقابله با اين شرايط بسيار حائز اهميت است. از اين منظر مقاوم سازی شبكه های آبرسانی و آبرسانی در بحران داراي اهميت ويژه ايست كه شركت لوله و ماشين سازی ايران هم محصولاتی را با همين اهداف به توليد رسانده است: لوله هاي چدن نشكن مقاوم به زلزله و مخازن چدن نشكن مقاوم به زلزله محصولاتی هستند كه در زمينه ايمن سازی شبكه های آبرسانی و آبرسانی در شرايط بحرانی كاربرد دارند.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-183 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-183">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-183" name="attributes[11][183]" value="183" class="form-checkbox">
                                        خرید فیلم ارائه فریبا تشکری: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/856" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-221 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-221">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-221" name="attributes[11][221]" value="221" class="form-checkbox">
                                        خرید فایل ارائه فریبا تشکری: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f14-Pages-from-Cast-Iron-Panel02.pdf"  title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه سوم: </h4>
                        <span class="name"> هوسپ هارطونیان</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> مقاومت لوله های پلی اتیلن در مقابل عوامل محیطی و ملاحظات طراحی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-184 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-184">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-184" name="attributes[11][184]" value="184" class="form-checkbox">
                                        خرید فیلم ارائه هوسپ هارطونیان: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/857" title="پیش نمایش فیلم" target="_self"></a>
                            </div>    
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-208 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-208">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-208" name="attributes[11][208]" value="208" class="form-checkbox">
                                        خرید فایل ارائه هوسپ هارطونیان: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f15-POLYETHYLENE-PANEL2-MR-HOSEP-HARTUNIAN.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="1200" class="row" >
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه چهارم: </h4>
                        <span class="name"> دکتر صباغی</span>
                    </div >
                    <div class="left">
                        <h3 class="title">  مقاومت لوله های پی وی سی در مقابل عوامل محیطی و ملاحظات طراحی </h3>
                        <p class="description">لوله و اتصالات پی وی سی سخت قدیمی ترین لوله پلیمری در صنعت آب و فاضلاب در سطح بین الملل و ایران است. این لوله ها پس از جنگ جهانی دوم در کشورهای آلمان و آمریکا برای اصلاح خسارت های وارد شده به زیر ساخت ها استفاده شده است. لوله های پی وی سی سخت در ایران نیز قدمتی شصت ساله دارد. با توجه به بهینه سازی روش های اتصال این لوله ها و همچنین اصلاح خواص لوله، پیش بینی می گردد میزان تولید و استفاده از این لوله ها در آینده افزایش خواهد داشت. در این مقاله پس از معرفی تاریخچه و ویژگی های لوله و اتصالات پی وی سی به بررسی سوابق کشورهای مختلف صنعتی دنیا در استفاده از این لوله ها و تاثیرات عوامل محیطی بر روی شبکه های لوله گذاری شده پرداخته می شود.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-185 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-185">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-185" name="attributes[11][185]" value="185" class="form-checkbox">
                                        خرید فیلم ارائه دکتر صباغی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/858" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-216 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-216">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-216" name="attributes[11][216]" value="216" class="form-checkbox">
                                        خرید فایل ارائه دکتر صباغی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f16-Pages-from-PVC-Design_Earthquake-Final.pdf"      title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="discount-box" data-aos="fade-up" data-aos-delay="1200" class="row" >
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> پرسش و پاسخ </h4>
                        <span class="name"></span>
                    </div >
                    <div class="left">
                        <h3 class="title"> پرسش و پاسخ  </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-186 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-186">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-186" name="attributes[11][186]" value="186" class="form-checkbox">
                                        خرید فیلم پرسش و پاسخ پنل دوم: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href=""  title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- tab2 -->
            <div class="tab-section tab2-section">
                <div class="row titr">
                    <h4><span style="font-weight : bold">پنل سوم : </span> مقاومت لوله در مقابل عوامل محیطی و ملاحظات طراحی </h4>
                    <div class="panel-bosses"><span style="font-weight : 500">هیئت رئیسه پنل سوم : </span> مهندس علیرضا شفیعی، دکتر نعمت حسنی، دکتر داودرضا عرب، مهندس حسین اسدی، مهندس کیومرث قره آبادی ، مهندس سمندگانی </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name"> علی حسین معیدی نیا</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> کاربرد لوله های پلی اتیلن مسلح (SRPE) در انتقال پساب  </h3>
                        <p><strong>مطالعه موردی: </strong>انتقال پساب تصفیه خانه فاضلاب جنوب تهران به ورامین به روش BOT</p>
                        <p><strong> ارائه کنندگان: </strong>رضا مومنی وصالیان، علی حسین معیدی نیا</p>
                        <p class="description"> امروزه در دنیا انواع و اقسام لوله برای انتقال آب و پساب تولید می شوند که هر کدام از آنها می بایست دقیقاً متناسب با نیازهای طرح سفارش و مورد استفاده قرار گیرند. در سال های اخیر کاهش بسیار شدید اعتبارات عمومی دولتی جهت اجرای طرح های عمرانی، ضرورت و نیاز به استفاده از ظرفیت های سرمایه گذاری بخش خصوصی جهت تامین مالی و سرمایه گذاری و اجرای طرح احداث خط دوم انتقال پساب تصفیه خانه جنوب تهران به دشت ورامین را بوجود آورد. کلیات طرح استفاده از یک خط لوله پلی اتیلن تقویت شده با ورق های فولادی و با قطر 3 متر و با دبی 9 متر مکعب بر ثانیه در طول 36 کیلومتر بوده است. سامانه انتقال سالانه 280 میلیون متر مکعب از پساب های تصفیه خانه جنوب تهران را به دشت های ورامین، پاکدشت و شهر ری تحت رژیم کم فشار منتقل نماید. حجم سرمایه گذاری صرفاً برای خط انتقال بالغ بر 1300 میلیارد ریال بر اساس قیمت های سال 92 بوده و حداکثر هشتاد درصد هزینه مذکور می تواند ازجانب موسسات پولی و بانک هـا در قالب تسهیلات تـامین گردد. از آنجا که انجام کار به روش bot مد نظر بوده است سرمایه گذار به شرط رعایت الزامات فنی مختار بوده که نوع لوله را خود انتخاب نماید. استفاده از این لوله ها و در این قطر برای نخستین بار در کشور در حال اجرا می باشد. در این طرح باستناد ماده 142 قـانون بـرنامه پنجم توسعه، بهـره برداری از 30 میلیون متر مکعب از کل پساب انتقالی طی مدت 15 سال به سرمایه گذار برنده مناقصه واگذار و از این طریق عمده سرمایه و سود انتظاری سرمایه گذار بازیافت می گردد. سالانه 250 میلیون متر مکعب از پساب انتقالی طی مدت 15 سال بصورت تضمینی از سرمایه گذار خریداری می شود تا مشوقی برای سرمایه گذار باشد.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-187 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-187">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-187" name="attributes[11][187]" value="187" class="form-checkbox">
                                        خرید فیلم ارائه علی حسین معیدی نیا: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/859"  title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-217 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-217">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-217" name="attributes[11][217]" value="217" class="form-checkbox">
                                        خرید فایل ارائه علی حسین معیدی نیا: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f18-Pages-from-SRPE-moaidi-nia.pdf"  title="پیش  نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه دوم: </h4>
                        <span class="name"> حسین جمشیدی</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> بررسی عملکرد و نحوه اجرای لوله های چدن داکتیل کلاس C </h3>
                        <p><strong> مطالعه موردی: </strong> پروژه خط انتقال آب از محور گرمابدشت به گرگان</p>
                        <p><strong> ارائه کنندگان: </strong> حسین جمشیدی، داود گیلک حکیم آبادی </p>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-188 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-188">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-188" name="attributes[11][188]" value="188" class="form-checkbox">
                                        خرید فیلم ارائه حسین جمشیدی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/860" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-219 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-219">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-219" name="attributes[11][219]" value="219" class="form-checkbox">
                                        خرید فایل ارائه حسین جمشیدی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f19-Pages-from-02.Golestan-Cast-iron.pdf"      title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه سوم: </h4>
                        <span class="name">  منا امیدواری نیا </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> تجربیات حاصل از از بررسی  کیفیت لوله های GRP پس از ساخت و ذکر نکات قراردادی و بازرسی </h3>
                        <p class="description">با توجه به اینکه در فرآیند تولید لوله های فایبرگلاس از مواد اولیه متفاوت با کیفیت های مختلف و از طرف دیگر از روش های تولید و ماشین آلات و تجهیزات متفاوتی استفاده می گردد، لذا لوله های تولید شده از کیفیت یکسانی برخوردار نبوده و ضروری است تست های ثانویه ای بعد از تولید لوله ها انجام گردد تا از تطابق لوله های تولید شده با استانداردهای موجود اطمینان حاصل شود. جهت این امر کارفرما یا خریدار می تواند سیستم یا شخصی را به عنوان سیستم بازرسی در محل کارخانه تولید مستقر نماید، از سوی دیگر می توان آزمایشات تکمیلی را در مراحل پس از تولید و حتی در حین اجرا جهت اطمینان از کیفیت لوله ها انجام داد. در این مقاله به بررسی آزمایشات فیزیکی، مکانیکی و شیمیایی که پس از تولید لوله ها قابل انجام است پرداخته می-شود و طبق ارایه استاندارد ها و معیارها برای هر کمیت، یک سری نکات قراردادی مشخص در ساخت لوله های فایبرگلاس نیز ذکر می گردد. چرا که برای برخی کمیت ها مقدار خاصی در استانداردهای موجود ذکر نشده است و ضروری است، کارفرمای طرح در زمان انعقاد قرارداد میزان و مقدار برخی کمیت ها را با توجه به مشخصات فنی طرح مورد نظر، ذکر نماید تا سازنده ملزم به رعایت آنها گردد.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-189 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-189">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-189" name="attributes[11][189]" value="189" class="form-checkbox">
                                        خرید فیلم ارائه منا امیدواری نیا: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/861" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-228 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-228">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-228" name="attributes[11][228]" value="228" class="form-checkbox">
                                        خرید فایل ارائه منا امیدواری نیا: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f20-Pages-from-final-seminar-presentation.pdf"   title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه چهارم: </h4>
                        <span class="name"> امید طاهری زاده </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> تجربیات اجرای خطوط فولادی در مناطق کویری و مرکزی کشور </h3>
                        <p><strong> ارائه کنندگان: </strong>امید طاهری زاده، علی اکبر رضایی، روح ا.. کریم زاده اصفهانی، مهسا نوری</p>
                        <p class="description">با افزایش جمعیت و گسترش شهرنشینی، بحران آب هر روز شدید و شدیدتر می‌گردد. در حال حاضر در کشور ما با اقلیم نیمه صحرائی خشک تأمین آب برای مصارف شهری با مشکلات فراوانی روبرو شده است. 
                        شهر کرمان به عنوان مرکز استان کرمان از قدیمی‌ترین شهرهای ایران است که به عنوان یکی از قطب‌های مهم تاریخی، توریستی، جمعیتی، صنعتی، معدنی و اقتصادی کشور در منطقه ویژه جغرافیایی قرار گرفته است که به لحاظ مرکزیت و دارا بودن فرصت‌های فراوان اقتصادی و اجتماعی به سرعت در حال توسعه است. چاره‌جویی برای تأمین آب میان مدت و بلند مدت شهر کرمان و مناطق صنعتی اطراف، از دیرباز مطابق با سیاست‌های توسعه‌ای مطرح بوده و با طرح تأمین آب از سرشاخه‌های هلیل رود در دهه هفتاد اوج گرفت. منبع تامین آب فعلی شهر کرمان چاه های موجود در اطراف شهر و تعدادی چاه در منطقه قریه العرب می باشد. با توجه به برداشت های دائم و بیش از حد از چاه های دشت کرمان و خشکسالی های اخیر، آب سفره های زیرزمینی این منطقه کاهش یافته است و شهر را دچار کمبود آب نموده است. در چنین شرایطی طرح های آبرسانی اهمیت دو چندان پیدا می-کند. برای حل بخش عمده‌ای از مشکلات شهر کرمان طرح انتقال آب از سد صفارود (شهیدان تیموری) به شهر کرمان در نظر گرفته شد و طرح تامین آب شرب شهر کرمان در جلسات متعدد در شرکت منابع آب ایران و همچنین شرکت مهندسی آب و فاضلاب کشور و در بالاترین سطوح وزارت نیرو مطرح و کلیات آن به تصویب رسیده است.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-190 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-190">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-190" name="attributes[11][190]" value="190" class="form-checkbox">
                                        خرید فیلم ارائه امید طاهری زاده: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/862" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-211 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-211">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-211" name="attributes[11][211]" value="211" class="form-checkbox">
                                       خرید فایل ارائه امید طاهری زاده: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f21-Pages-from-final-ppt.rayab.co.pdf"  title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه پنجم: </h4>
                        <span class="name">  هوشنگ ملایی </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> نوسازی خط اول آبرسانی از میناب به بندرعباس و نوسازی و به سازی شبکه اصلی آبیاری و زهکشی میناب </h3>
                        <p><strong> ارائه کنندگان: </strong>هوشنگ ملایی، محمد میرزایی، شهروز شجاعی، سید هدایت حسینی</p>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-191 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-191">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-191" name="attributes[11][191]" value="191" class="form-checkbox">
                                        خرید فیلم ارائه هوشنگ ملایی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/863" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-226 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-226">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-226" name="attributes[11][226]" value="226" class="form-checkbox">
                                        خرید فایل ارائه هوشنگ ملایی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f22-Pages-from-power-point-hormozghanl-96.pdf"   title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه ششم: </h4>
                        <span class="name">  دانش ستاری </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> تجارب استفاده از لوله های با قطر بالا در اجرای سیفون </h3>
                        <p><strong>مطالعه موردی: </strong> طرح خدا آفرین</p>
                        <p><strong> ارائه کنندگان: </strong>دانش ستاری، کاظم عزیزمقدم</p>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-192 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-192">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-192" name="attributes[11][192]" value="192" class="form-checkbox">
                                        خرید فیلم ارائه دانش ستاری: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-218 form-type-checkbox checkbox">
                                    <label class="control-label" for="edit-attributes-11-218">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-218" name="attributes[11][218]" value="218" class="form-checkbox">
                                        خرید فایل ارائه دانش ستاری: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f23-Pages-from-Sattari-Siphon-F.pdf"  title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> پرسش و پاسخ </h4>
                        <span class="name">  </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> پرسش و پاسخ </h3>
                        <p></p>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-193 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-193">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-193" name="attributes[11][193]" value="193" class="form-checkbox">
                                        خرید فیلم پرسش وپاسخ پنل سوم: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row titr">
                    <h4><span style="font-weight : bold">پنل چهارم : </span> روش های اجرا، بهره برداری و ملاحظات پدافند غیرعامل </h4>
                    <div class="panel-bosses"><span style="font-weight : 500">هیئت رئیسه پنل چهارم : </span> دکتر نعمت حسنی، دکتر سیامک نیلچیان، مهندس علی ربوبی، مهندس آرش اخوان، مهندس آقابیگی </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name"> سعید عبدی</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> روش های اجرا، بهره برداری و ملاحظات پدافند غیرعامل لوله های چدنی </h3>
                        <p class="description">
                            •  ساخت ترانشه بصورت شيبدار يا قائم (تقويت ديواره): ديوراه های ترانشه بايستي يا شيبدار باشند يا توسط پشت بند تقويت گردند.</br>
                            •  برداشتن پاره سنگ ها و کلوخه ها از ديواره ها</br>
                            •  رعايت فاصله مواد حاصل از گودبرداری از لبه ترانشه</br>
                            •  در نظر گرفتن ارتفاع خاك بالاي لوله</br>
                            •  تخليه آب ترانشه</br>
                            •  در نظر گرفتن عرض ترانشه</br></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-194 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-194">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-194" name="attributes[11][194]" value="194" class="form-checkbox">
                                        خرید فیلم ارائه سعید عبدی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/864" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-206 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-206">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-206" name="attributes[11][206]" value="206" class="form-checkbox">
                                       خرید فایل ارائه سعید عبدی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f25-Pages-from-Cast-Iron-Panel-04.pdf"  title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه دوم: </h4>
                        <span class="name"> پیمان زندیه</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> روش های اجرا، بهره برداری و ملاحظات پدافند غیرعامل لوله های پلی اتیلنی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-195 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-195">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-195" name="attributes[11][195]" value="195" class="form-checkbox">
                                        خرید فیلم ارائه پیمان زندیه: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/865" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-210 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-210">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-210" name="attributes[11][210]" value="210" class="form-checkbox">
                                       خرید فایل ارائه پیمان زندیه: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f26-POLYETHYLENE-PANEL4-MR-ZANDIYEH.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه سوم: </h4>
                        <span class="name"> عباس ابهجی</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> روش های اجرا، بهره برداری و ملاحظات پدافند غیرعامل لوله های پی وی سی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-196 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-196">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-196" name="attributes[11][196]" value="196" class="form-checkbox">
                                        خرید فیلم ارائه عباس ابهجی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/866" title="پیش نمایش فیلم" target="_self">   </a>
                            </div>
                            <div class="buybox-part">    
                                <div class="form-item form-item-attributes-11-225 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-225">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-225" name="attributes[11][225]" value="225" class="form-checkbox">
                                        خرید فایل ارائه عباس ابهجی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f27-UPVC-Pipe-installation-service.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>   
                        </div>
                        <h4>ارائه چهارم:</h4>
                        <span class="name"> دهقان</span>
                    </div>
                    <div class="left">
                        <h3 class="title"> روش های اجرا، بهره برداری و ملاحظات پدافند غیرعامل لوله های کامپوزیتی (GRP) </h3>
                        <p class="description">در این مقاله، ابتدا روش (CLSM: Controlled Low Strength Material) به عنوان روشی جدید برای نصب لوله های دفنی در مناطقی که دسترسی مناسب به خاک جانشین نظیر شن شکسته وجود ندارد معرفی شده است. سپس، مراحل اجرایی نصب میدانی لوله GRP به دو روش CLSM و شن شکسته تشریح گردیده است. تغییر شکل لوله در مراحل مختلف نصب اندازه گیری و گزارش شده است. نتایج نصب لوله به دو روش ارائه و ارزیابی شده است و در نهایت مزایا و چالش های نصب به روش CLSM بیان شده است.</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-197 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-197">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-197" name="attributes[11][197]" value="197" class="form-checkbox">
                                        خرید فیلم ارائه دهقان: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/867"  title="پیش نمایش فیلم" target="_self"></a>
                            </div>    
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-229 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-229">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-229" name="attributes[11][229]" value="229" class="form-checkbox">
                                        خرید فایل ارائه دهقان: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f28-Pages-from-farassan-Dr.dehghan-panel4.pdf"   title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> پرسش و پاسخ </h4>
                        <span class="name"> </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> پرسش و پاسخ </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-198 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-198">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-198" name="attributes[11][198]" value="198" class="form-checkbox">
                                        خرید فیلم پرسش وپاسخ پنل چهارم: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row titr">
                    <h4><span style="font-weight : bold">پنل پنجم : </span> ابعاد اقتصادی و محیط زیستی </h4>
                    <div class="panel-bosses"><span style="font-weight : 500">هیئت رئیسه پنل پنجم : </span> دکتر نعمت حسنی، مهندس داود نجفیان،دکتر شهروز شجاعی، دکتر اکبر امامی، مهندس مهرداد حاج زوار </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه اول: </h4>
                        <span class="name"> علی مظفریان </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> تجربه انتقال پساب برای مصارف صنعتی </h3>
                        <p><strong> مطالعه موردی: </strong> انتقال پساب تصفیه خانه کرج BOT</p>
                        <p><strong> ارائه کنندگان: </strong>علی مظفریان، محمدحسن مبشری</p>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-199 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-199">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-199" name="attributes[11][199]" value="199" class="form-checkbox">
                                        خرید فیلم ارائه علی مظفریان: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/868" title="پیش نمایش فیلم" target="_self"></a>
                            </div>    
                            <div class="buybox-part">    
                                <div class="form-item form-item-attributes-11-233 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-233">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-233" name="attributes[11][233]" value="233" class="form-checkbox">
                                       خرید فایل ارائه علی مظفریان: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f30-Pages-from-Pasab-Alborz.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4> ارائه دوم: </h4>
                        <span class="name">  علیرضا صحاف امین </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> ابعاد اقتصادی و محیط زیستی لوله های پلی اتیلنی </h3>
                        <p class="description">مسئله آلودگی محیط زیست، گرمایش کره زمین و انتشار رو به رشد گازهای گلخانه ای در چند سال اخیر یکی از دغدغه های اصلی مهندسان و طراحان انواع محصولات صنعتی بوده و هر سال در کنفرانس ها و سمینارهای مختلف، استانداردهای جدیدی در این زمینه تدوین می گردد.
                        ایران بعنوان امضا کننده پروتکل پاریس موظف به کاهش گازهای گلخانه ای می باشد، متاسفانه رتبه ایران در شاخص محیط زیستی  EPI در دنیا در سال 2016 و با 21 پله سقوط رتبه 105 دنیا می باشد که اصلا جایگاه مناسبی نمی باشد. در بین شاخص های محیط زیستی بدترین رتبه ایران (154) مربوط به تمایل کشورها به کاهش گاز CO2 می باشد که لذا اهمیت تغییر نگاه تصمیم گیران برای بهبود این شاخص بیش از پیش مهم و حیاتی می باشد. قطعا لزوم اضافه نمودن یک شاخص محیط زیستی برای انتخاب جنس لوله ها در پروژه ها می تواند گام مهمی در این زمینه  باشد .</p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-200 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-200">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-200" name="attributes[11][200]" value="200" class="form-checkbox">
                                        خرید فیلم ارائه علیرضا صحاف امین: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/869" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-213 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-213">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-213" name="attributes[11][213]" value="213" class="form-checkbox">
                                       خرید فایل ارائه علیرضا صحاف امین: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f31-POLYETHYLENE-PANEL5-MR-ALIREZA-SAHAF-AMIN.pdf" title="پیش نمایش فایل"  target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>ارائه سوم:</h4>
                        <span class="name">  احمدرضا پاکزاد </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> ابعاد اقتصادی و محیط زیستی لوله های پی وی سی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-201 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-201">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-201" name="attributes[11][201]" value="201" class="form-checkbox">
                                        خرید فیلم ارائه احمدرضا پاکزاد: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/870" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-222 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-222">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-222" name="attributes[11][222]" value="222" class="form-checkbox">
                                       خرید فایل ارائه احمدرضا پاکزاد: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f32-Pages-from-PVC-Panel05.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>ارائه چهارم:</h4>
                        <span class="name">  محمد منصوری و احمدی </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> ابعاد اقتصادی و محیط زیستی لوله های کامپوزیتی (GRP) </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-202 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-202">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-202" name="attributes[11][202]" value="202" class="form-checkbox">
                                        خرید فیلم ارائه محمد منصوری و احمدی: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/871" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-223 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-223">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-223" name="attributes[11][223]" value="223" class="form-checkbox">
                                       خرید فایل ارائه محمد منصوری و احمدی: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f33-Panel5-mansuri-mohammad.pdf"     title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="discount-box">
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>ارائه پنجم:</h4>
                        <span class="name"> معصومه کاظمی مقدم </span>
                    </div>
                    <div class="left">
                        <h3 class="title"> ابعاد اقتصادی و محیط زیستی لوله های چدنی </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-203 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-203">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-203" name="attributes[11][203]" value="203" class="form-checkbox">
                                        خرید فیلم ارائه معصومه کاظمی مقدم: 10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="http://waterhouse.ir/iframe/872" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-230 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-230">
                                        <input mablagh="5000" type="checkbox" id="edit-attributes-11-230" name="attributes[11][230]" value="230" class="form-checkbox">
                                       خرید فایل ارائه معصومه کاظمی مقدم: 5,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2f34-Cast-Iron-Panel5.pdf" title="پیش نمایش فایل" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row" >
                    <div class="right no-icon">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>پرسش و پاسخ</h4>
                        <span class="name"></span>
                    </div>
                    <div class="left">
                        <h3 class="title"> پرسش و پاسخ </h3>
                        <p class="description"></p>
                        <div class="buybox">
                            <div class="buybox-part">
                                <div class="form-item form-item-attributes-11-204 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="edit-attributes-11-204">
                                        <input mablagh="10000" type="checkbox" id="edit-attributes-11-204" name="attributes[11][204]" value="204" class="form-checkbox">
                                        خرید فیلم پرسش وپاسخ پنل پنجم:10,000+ تومان 
                                    </label>
                                </div>
                                <a class="colorbox-time preview" href="" title="پیش نمایش فیلم" target="_self"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- discount -->
            <div class="discount" style="font-family: fanum;margin-top: 70px;" data-aos="zoom-in-up" data-aos-delay="1100">
                <div class="form-item form-item-attributes-11-235 form-type-checkbox checkbox"> 
                    <label class="control-label" for="edit-attributes-11-235">
                        <input mablagh="250,000" type="checkbox" id="edit-attributes-11-235" name="attributes[11][235]" value="235" class="form-checkbox">
                            خرید کل پکیج با تخفیف: 250,000+ تومان
                    </label>
                </div>
            </div> 
        </div>
    </section>
    
    <section id="statement" class="panel">
        <div class="wh">
            <h2 data-aos="flip-right" data-aos-delay="400"> بیانیه همایش </h2>
            <div data-aos="zoom-out" data-aos-delay="900" class="aboutus">                      
                <div class="sec-li li">
                    <div>
                        <p>در سال "اقتصاد مقاومتی؛ توليد و اشتغال"، با ميزبانی و مشاركت فعال انجمن‌ها، سنديكاها و توليدكنندگان داخلی انواع لوله و با حمايت و پشتيبانی معاونت طرح و توسعه شركت مديريت منابع آب ايران، اولين نمايشگاه و نشست تخصصی توانمندی های داخلی توليد و كاربرد انواع لوله در بخش آب كشور، توسط موسسه پژوهشی آموزشی خانه آب ايران در تاريخ 21 و 22 آذرماه 1396 در محل ستاد وزارت نيرو برگزار گرديد. همچنين تجارب ارزشمندی توسط شركت‌های آب منطقه‌ای در خصوص كاربرد انواع لوله در طرح‌های بزرگ بخش آب كشور ارائه گرديد. بر اساس جمع‌بندی صورت گرفته توسط كميته راهبری، كميته علمی و همچنين اخذ نقطه‌نظرات نمايندگان توليدكنندگان، موارد زير مورد تاكيد قرار گرفت:</p>
                        <ol style = "font-size: .95rem;">
                            <li>حمايت از صنايع داخلی و توليدات كيفی انواع لوله و بررسی مسائل و چالش‌های صنايع توليدی </li>
                            <li>رقابت سالم بين توليدكنندكان داخلی در جهت ارتقای كيفی و كمی توليدات </li>
                            <li>ضرورت ايجاد واحدهای تحقيق و توسعه توسط توليدكنندگان بزرگ و احصاء و شناسايی نياز مصرف‌كنندگان </li>
                            <li>ضرورت استفاده عملی از انواع فناوری های نوين ساخت، اجرا، بهره‌برداری و نگهداری و تأمين منابع مالی </li>
                            <li>ضرورت توجه جدی به طولانی نمودن عمر مفيد لوله‌ها و تعهد قراردادی توليدكنندگان به عمر مفيد واقعی و تضمين عملكرد توليدات در اين دوره </li>
                            <li>ضرورت توجه بيشتر و عميق به پوشش‌های كيفی سازگار با نوع مصارف آب يا پساب</li>
                            <li>ضرورت توجه به توليد و استفاده از اتصالات ضدزلزله، و مقاوم در برابر رانش و نشست زمين </li>
                            <li>تاكيد و توجه به انتخاب نوع و جنس لوله با توجه به استانداردهای مختلف در زمينه شرب، صنعت و ...</li>
                            <li>ضرورت مستندسازی دقيق تجربيات طراحی، اجرا، بهره‌برداری و نگهداری خطوط انتقال آب و پساب به‌صورت مستمر توسط دستگاه‌های اجرايی و شركت مادر تخصصی مديريت منابع آب با همكاری سنديكاها، انجمن‌های توليدكننده</li>
                            <li>ضرورت توجه به حفظ سلامت و محيط‌زيست در پروژه‌های انتقال آب و پساب با تاكيد بر كاهش مصرف انرژی و توليد كمتر گازهای گلخانه‌ای، قابليت بازيافت و برگشت سريع‌تر به طبيعت</li>
                            <li>ضرورت توجه به اقدامات پدافند غيرعامل در خطوط انتقال آب با تأكيد بر صعوبت دسترسی، مقاومت در مقابل سوراخ‌شدگی و شكستگی عمدی، تحمل زياد در مقابل حرارت و آتش‌ سوزی و مقاومت در برابر انفجار احتمالی</li>
                            <li>ضرورت تهيه بانك اطلاعاتی جامع و مستند از توليدكنندگان و سازندگان انواع مختلف لوله و به‌روزرسانی مستمر آن </li>
                            <li>ضرورت رتبه‌بندی توليدكنندگان هر نوع لوله با معيارهای مستند، معتبر و شفاف</li>
                            <li>لحاظ شرايط واقعی پروژه‌ها در انتخاب و تامين لوله‌های مورد نياز و پرهيز از كپي‌برداري‌های ناقص در زمينه انتخاب لوله و توجه ويژه به هزينه طول عمر در اجرای پروژه‌ها</li>
                            <li>استفاده كارفرمايان و مشاوران از بازرسان مجرب در مراحل مختلف توليد لوله و استقبال توليدكنندگان از نظارت كيفی كارفرمايان و مغتنم دانستن نظريات ايشان </li>
                            <li>آموزش مستمر منابع انسانی دخيل در توليد، نصب، اجرا و بهره‌برداری از انواع لوله</li>
                            <li>ايجاد ارتباط متقابل بين انجمن‌ها و تشكل‌های با كارفرمايان و همچنين شركت‌های مشاور و پيمانكار فعال در حوزه‌های مرتبط </li>
                            <li>بسترسازی برای صدور خدمات فنی و مهندسی و محصولات توليدی و امكان‌پذيری رقابت بين‌المللی با افزايش كيفيت محصولات</li>
                            <li>ايجاد دبيرخانه دائمی برای نشست و نمايشگاه تخصصی توانمندی های داخلی توليد و كاربرد انواع لوله در بخش آب كشور با مشاركت سنديكاها و انجمن‌های صنفی توليدكننده انواع لوله و برگزاری ادواری همايش‌ها به صورت سالانه با محورها و موضوعات تخصصی</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="virtual" class="panel" >
        <div class="wh">
            <h2 data-aos="flip-right" data-aos-delay="400">نمایشگاه مجازی چیست ؟</h2>
            <div data-aos="zoom-out" data-aos-delay="900" class="aboutus">                 
                <div class="sec-li li">
                    <span class="icon-laptop">
                        <img src="../sites/all/themes/waterhouse/images/land/laptop.png" width="530" height="auto" alt="نمایشگاه مجازی چیست" title="نمایشگاه مجازی چیست">
                    </span>
                    <div>
                        <p> هدف "دیده شدن" است.دنیای مجازی پدیده ایست نوظهور و با توجه به قابلیت های عمیق و موثرآن چشم پوشی از آن در این عصر منجر به سبقت رقیبان در هر زمینه ای میگردد.با توجه به عرصه فعالیتی "خانه آب ایران" و به منظور تعامل بهتر تولیدکنندگان بخش صنعت لوله سازی کشور با مخاطبان خاص خود اعم از مدیران و کارشناسان دولتی،مشاوران و مجریان فعال در حوزه آب کشور؛ فضایی نو در نظر گرفته شده است.نمایشگاه مجازی این امکان را در اختیار فعالان حوزه آب قرار میدهد که محصولات،توانمندیها و فعالیت های خود را به روز در معرض دید مخاطبان خود قرار دهند و باز خوردی بسیار بیشتر از میزان فعالیت های تبلیغاتی خود داشته باشند. </p>
                        <a class="poster view" href="http://pipeline.waterhouse.ir/waterhouse" target="_blank"> مشاهده نمونه </a>
                        <a class="poster view" href="http://waterhouse.ir/node/730" target="_blank"> ثبت نام در نمایشگاه مجازی </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <section id="vijename" class="panel" >
        <div class="wh" style="padding: 50px 0px 20px 0px;">
            <h2 data-aos="flip-right" data-aos-delay="700" style="color: #fff;text-shadow: none;padding: 0px 0 10px 0px;margin: 20px 0 0 0px;"> مشارکت در ویژه نامه </h2>
            <div data-aos="zoom-out" data-aos-delay="1100" class="aboutus">                 
                <div class="sec-li li">
                    <div style="background-color: transparent; box-shadow: none;"> 
                        <div>
                            <p style="text-align: justify; margin-bottom: 55px; font-size:1em; color:#fff; font-family: fanum;"> همانگونه كه مستحضر هستيد، لوله از جمله پركاربردترين توليدات صنعتی در  صنعت آب می باشد و تجارب مرتبط با استفاده گسترده از انواع آن، نشان‌دهنده ضرورت ارتقاء دانش عوامل اجرايی طرح‌ها، اطلاع از آخرين فناوری ها و    دستاوردهای توليد‌كنندگان داخلی و همچنين ايجاد هماهنگی و همكاری مستمر بين مديران و تصميم‌گيران اين صنعت با توليد‌كنندگان می باشد. در اين راستا  "نشست تخصصی و نمايشگاه توانمندی های توليد و كاربرد انواع لوله در بخش آب كشور" در روزهای 21 و 22 آذرماه در محل وزارت نيرو با همكاری سندیکاها و    انجمن‌های صنفی تولیدکننده انواع لوله و تحت حمايت معاونت طرح و توسعه شركت مديريت منابع اب ايران طراحی و برگزار گردید. به همین منظور در راستای   برنامه‌های اعلامی مقام عالی وزارت در خصوص حمايت از توليد داخل، بهبود محيط كسب و كار و توانمندسازی بخش خصوصی، توسعه طرح‌های بهره‌برداری از پساب    و رعايت اصول زيست‌ محيطی و همچنین در جهت اجرایی نمودن مفاد بیانیه و نشر یافته‌های همايش مذكور، ویژه‌نامه‌ای در حال تدوین می‌باشد. از این‌رو     پویایی این اثر در گرو مشارکت مجموعه‌های فعال در این حوزه می‌باشد و نیز فرصتی متقابل را برای معرفی توانمند‌ی های علمی و تجاری کلیه مجموعه‌های    حاضر در نشست و سایر مجموعه‌هایی که در نشست حضور نداشته‌اند با تخصیص صفحات ویژه و اختصاصی، برای ايشان فراهم می‌آورد. </p>
                            <!-- <a class="poster view colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2ffehrest-vijename-v1.1.pdf" target="_self">فهرست مطالب</a>
                            <a class="poster view colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2ftarefe-vijename-v1.1.pdf" target="_self">الزامات فنی و فرصت های سرمایه گذاری</a>
                            <a class="poster view colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2flist-gostare-vijename-v1.1.pdf" target="_self"> گستره    توزیع</a>
                            <a class="poster view colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2fBinder1.1.pdf"   target="_self">مشاهده نمونه ویژه نامه</a> -->
                            <a class="poster view" href="../sites/default/files/manual/pipe-landing/pdf/fehrest-vijename-v1.1.pdf" target="_self">فهرست مطالب</a>
                            <a class="poster view" href="../sites/default/files/manual/pipe-landing/pdf/tarefe-vijename-v1.1.pdf" target="_self">الزامات فنی و فرصت های سرمایه گذاری</a>
                            <a class="poster view" href="../sites/default/files/manual/pipe-landing/pdf/list-gostare-vijename-v1.1.pdf" target="_self"> گستره    توزیع</a>
                            <a class="poster view" href="../sites/default/files/manual/pipe-landing/pdf/Example-vijename.pdf"   target="_self">مشاهده نمونه ویژه نامه</a>
                        </div>
                        <div>
                            <a class="poster view sabt-vije" href="http://waterhouse.ir/vijename" target="_blank"> ثبت نام در ویژه نامه </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
	</section>

    <section id="gallery-film" class="panel" data-aos="fade-up" data-aos-delay="2200" style="background: transparent;">
        <div class="wh">
            <h2> گالری فیلم </h2>
            <?php print views_embed_view('report_landing','block'); ?>
        </div>
    </section> 

    <!-- <script type="text/javascript" src="/sites/all/themes/waterhouse/js/lib/masonry.pkgd.min.js"></script>-->
    <section id="gallery-picture" class="panel">
        <div class="wh">
            <h2 data-aos="flip-right" data-aos-delay="1200"> گالری تصاویر </h2>
            <div>
                <div data-aos="fade-up" data-aos-delay="1500" class="page-aks">
                    <span class="icon"></span>
                    <div class="esm">تصاویر قبل همایش</div>
                    <a class="link-pageaks" href="http://waterhouse.ir/waterchallenge/report-landing/820" target="_blank">مشاهده</a>
                </div>
                <div data-aos="fade-up" data-aos-delay="1500" class="page-aks">
                    <span class="icon"></span>
                    <div class="esm">تصاویر همایش</div>
                    <a class="link-pageaks" href="http://waterhouse.ir/waterchallenge/report-landing/1055" target="_blank">مشاهده</a>
                </div>
                <div data-aos="fade-up" data-aos-delay="1500" class="page-aks">
                    <span class="icon"></span>
                    <div class="esm">تصاویر غرفه ها</div>
                    <a class="link-pageaks" href="http://waterhouse.ir/waterchallenge/report-landing/1056" target="_blank">مشاهده</a>
                </div>
                <div data-aos="fade-up" data-aos-delay="1500" class="page-aks">
                    <span class="icon"></span>
                    <div class="esm"> تصاویر پشت صحنه</div>
                    <a class="link-pageaks" href="http://waterhouse.ir/waterchallenge/report-landing/1058" target="_blank">مشاهده</a>
                </div>
                <div style="margin: 50px 0 -20px 0;" data-aos="fade-up" data-aos-delay="1600">
                    <!-- <a class="companylist colorbox-time" href="https://docs.google.com/gview?embedded=true&url=http%3A%2F%2Fwaterhouse.ir%2Fsites%2Fdefault%2Ffiles%2Fmanual%2Fpipe-landing%2Fpdf%2fCompony-list.pdf" title="پیش نمایش فایل" target="_self"> لیست شرکت های حاضر در نمایشگاه </a> -->
                    <a class="companylist" href="../sites/default/files/manual/pipe-landing/pdf/Compony-list.pdf" title="دانلود فایل" target="_self"> لیست شرکت های حاضر در نمایشگاه </a>
                </div>
            </div>
        </div>
    </section> 

    <style>
        #navigat h4{
            border: 1px solid #f00;
            border-width: 1px 0px 1px 0px;
            border-radius: 16px;
            width: fit-content;
            margin: auto auto 75px auto;
            padding: 10px;
        }
        #navigat .navi {
            padding: 15px;
            border-radius: 25px;
            margin: 10px;
            transition: all 0.4s;
            /* box-shadow: 0px 2px 7px 1px #eee; */
            background: #fff;
            font-size: 1.1em;
            display: inline-block;
        }
        #navigat .navi:hover {
            background: #faf8f8;
            border: 0px solid #f84c4e;
            border-width: 0px 1px 0px 1px;
        }
        #vijename{
            background: url(../sites/default/files/manual/pipe-landing/image/vijename2.jpg);
            background-size: cover;
            position: relative;
        }
        #vijename:before {
            content: "";
            position: absolute;
            width: 101%;
            height: 100%;
            right: 0;
            top: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        #vijename a.sabt-vije{
            border-radius: 50px;
            margin: 50px 0 1px 0;
            padding: 10px 45px;
            font-size: 1.2em;
            font-weight: bold;
        }
        #vijename a.sabt-vije:before{
            content : "" !important;
        }
        @-webkit-keyframes arrow {
        	0%,100% {
        		top:10px;
        	}
        	50% {
        		top:30px;
        	}
        }
        @keyframes arrow {
        	0%,100% {
        		top:10px;
        	}
        	50% {
        		top:30px;
        	}
        }
        .panel{
            margin-bottom : 0;
            border: 1px solid #ECEBF7;
        }
        #navbar{
            margin : 0;
            border : 0;
        }
        #block-system-main{
            position: relative;
        }
        section.panel.main {
            background: url(/sites/all/themes/waterhouse/images/land/pipe.jpg);
            background-size: cover;
            width: 101%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            font-family: ordi;
            font-size: 2.5rem;
            position: relative;
            min-height: 100vh;
            padding-bottom: 50px;
        }
        section.panel.main:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            right: 0;
            top: 0;
            background: rgba(0, 0, 0, 0.51);
        }
        #intro.panel.main .inner {
            z-index: 1;
            width: 90%;
            max-width: 600px;
            position: relative;
        }
        section.panel.main h1 {
            background: url(/sites/all/themes/waterhouse/images/land/h2.png);
            background-repeat: no-repeat;
            font-size: 0;
            width: 530px;
            height: 275px;
            margin: auto;
            max-width: 100%;
            background-size: contain;
            background-position: bottom;
            margin-bottom: 50px;
        }
        p.tagline {
            margin: 0;
            border-bottom: 2px solid #fff;
            position: relative;
            padding: 41px 10px 0px 0;
            word-spacing: 1px;
            text-shadow: 0 0px 14px #F44336;
            font-size: 2.1rem;
            text-align: center;
            font-family: irans;
        }
        p.tagline:before {
            content: "";
            width: 400px;
            height: 4px;
            background: #C62828;
            position: absolute;
            bottom: -3px;
            right: 0;
            right: calc(50% - 195px);
        }
        p.desc {
            font-size: 1.5rem;
            text-align: center;
            word-spacing: 2px;
            font-family: fanum;
        }
        .scroll{
            position: relative;
            font-size: 0.3em;
            margin: 12px auto;
            display: block;
            height: 37px;
            text-align: center;
            width: 130px;
        }
        .scroll:after {
            content: '';
            width: 30px;
            height: 30px;
            position: absolute;
            margin: auto;
            bottom: -100px;
            right: 0;
            left: 0;
            -webkit-animation: 3s arrow infinite ease;
            animation: 3s arrow infinite ease;
            border-right: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        #intro .newlogo {
            position: absolute;
            top: 28px;
            right: 28px;
            font-size: 12px;
            width: 187px;
            height: 114px;
        }
        #intro .newlogo img:nth-child(1) {
            width: 60px;
            height: auto;
            vertical-align: top;
            margin-left: 20px;
        }
        #intro .newlogo img:nth-child(2) {
            width: 60px;
        }
        #sandika{
            background: url(../sites/all/themes/waterhouse/images/land/logo-bg-blur.jpg);
            background-size: cover;
            position: relative;
            /*height: 610px; */
        }
        #sandika:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            right: 0;
            top: 0;
            background: rgba(256, 256, 256, 0.2);
        }
        #sandika .wh {
            padding: 5.5% 0 6% 0;
        }
        #sandika .wh h2 {
            margin-bottom: 43px;
        }
        #sandika a.logo{
            display: inline-block;
            width: 290px;
            text-align: right;
            vertical-align: top;
            margin: 2%;
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 20px;
            padding: 5px 10px;
            text-align: center;
        }
        #sandika a.logo > span:nth-child(1) {
            display: block;
            margin: 20px auto;
            font-size: 17px;
            color: black;
            /* text-shadow: 0px 2px 3px #fff; */
            line-height: 33px;
            text-align: center;
        }
        #sandika a.logo:hover span.more {
            background-color: #2095f2;
        }
        #sandika a.logo:hover .more > span {
            color: white;
        }
        #sandika a.logo:hover .more:after {
            border-right: 2px solid white;
            border-bottom: 2px solid white;
        }
        .more:after {
            content: '';
            width: 10px;
            height: 10px;
            margin: auto;
            border-right: 2px solid #2196f3;
            border-bottom: 2px solid #2196f3;
            -ms-transform: rotate(135deg);
            -webkit-transform: rotate(135deg);
            transform: rotate(136deg);
            display: inline-block;
            vertical-align: middle;
            transition: all ease 0.5s;
        }
        span.more {
            display: inline-block;
            margin: 0 0 16px 0;
            padding: 5px 19px;
            border: 1px solid #2196f3;
            border-radius: 15px;
            transition: all ease 0.5s;
        }
        .more > span {
            color: #2196f3;
            font-size: 14px;
            margin-left: 10px;
            transition: all ease 0.5s;
        }
        /*---------*/
        #virtual .wh{
            padding: 8vh 0 16vh 0;
        }
        #virtual img{
            position: absolute;
            left: -90px;
            bottom: -19px;
            width: 530px;
        }
        #virtual .sec-li > div,
        #vijename .sec-li > div{
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: rgba(0, 0, 0, 0.156863) 0px 1px 6px, rgba(0, 0, 0, 0.227451) 0px 1px 6px;
            max-width: 1067px;
            width: 100%;
            margin: auto;
            box-sizing: border-box;
            padding: 23px 3.5% 36px 37%;
            text-align: center;
        }
        #vijename .sec-li > div{
            padding: 28px;
        }
        #virtual .sec-li > div > p{
            text-align: justify;
        }
        #virtual a.poster{
            width: auto;
        }
        .aboutus a,
        a.poster {
            border-radius: 2px;
            line-height: 36px;
            text-align: center;
            padding: 0 10px 0 16px;
            display: inline-block;
            font-size: 14px;
            transition: all 0.2s;
            box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
            outline: none;
            color: #2196f3 !important;
            border: 1px solid #2196f3;
            margin: 8px 8px;
            box-sizing: border-box;
            vertical-align: top;
            background: #fff; 
            /* width: 131px; */
        }
        .aboutus a:hover, a.poster:hover {
            background: #eee;
        }
        a.poster:before{
            content: ' ';
            font-family:  mat;
            padding: 0 0 0 5px;
            font-size: 18px;
            display: inline-block;
            vertical-align: bottom;
        }
        /*-------------*/
        .wh {
            width: calc(100% - 30px);
            max-width: 1160px;
            margin: auto;
            text-align: center;
            padding: 80px 15px;
            z-index: 1;
            position: relative;
        }
        #section1 .wh h2 {
            color: #2196F3;
            border-bottom: 1px solid #03A9F4;
            display: inline-block;
            padding: 0 0 19px 0;
            font-size: 1.9rem;
            margin-bottom: 38px;
            text-shadow: 0px 2px 6px #eee;
        }
        .wh h2 , #moarrefi h2 {
            border-bottom: 1px solid #03A9F4;
            display: inline-block;
            padding: 0 0 19px 0;
            font-size: 1.9rem;
            margin-bottom: 38px;
            text-shadow: 0px 2px 6px #eee;
        }
        #timing h2 {
            max-width: 860px;
            border-color: #00BCD4;
            margin-bottom: 13px;
            display: block;
            margin: auto;
        }
        .aboutus {
            text-align: right;
            font-size: 1.1rem;
            line-height: 30px;
            display: inline-block;
            width: 100%;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .aboutus p{
            margin-bottom: 20px;
            font-size: 1rem;
        }
        section#timing {
            position: relative;
        }
        #timing .tab{
            display: inline-block;
            padding: 6px 19px;
            background-color: #f2f2f2;
            vertical-align: top;
            margin: 10px 10px -3px 10px; 
            transition: all 0.2s;
            box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
            cursor: pointer;
            border: 3px solid #f2f2f2;
            border-width: 0 3px;
        }
        #timing .tab.active{
            border: 3px solid #00bcd4;
            border-width: 0 3px;
        }
        #timing .tab-section.active {
            display: block !important;
        }
        #timing .tab-section {
            display: none;
        }        
        section#timing:before {
            background-image: url(/sites/all/themes/waterhouse/images/land/slimvideo.png);
            opacity: 0.15;
            content: '';
            width: 100%;
            position: absolute;
            background-repeat: repeat;
            top: 0px;
            bottom: 0px;
            height: 100%;
        }
        .buybox .buybox-part{
            padding: 6px 12px;
            border: 1px solid #e9e9e9;
            border-width: 0px 2px 2px 0px;
            border-radius: 15px;
            background: #f9f9f9;;
            cursor: pointer;
            margin-bottom: 10px;
            font-size: 0.8em;
        }
        .buybox .checkbox{
            float : right;
            margin: 1px;
        }
        .row {
            text-align: right;
            display: inline-block;
            display: flex;
            align-items: stretch;
            border-bottom: 1px dotted #00BCD4;
            max-width: 860px;
            width: 100%;
            margin: auto;
            clear: both;
        }
        .row:last-child {
            border-bottom: 0;
        }
        .right {
            width: 199px;
            padding: 20px 20px 6px 10px;
            border-left: 1px solid #00BCD4;
            font-family: fanum;
            text-align: center;
            position: relative;
            display: inline-block;
            float: right;
        }
        .right h4 {
            margin-top: 5px;
            font-weight: bold;
            color: #00BCD4;
            font-size: 13px;
        }
        .name{
            font-weight: bold;
            font-size: 10pt;
        }
        .topic{
            font-size: 9pt;
        }
        .right:before {
            content: "";
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #00BCD4;
            position: absolute;
            top: 38px;
            right: calc(100% - 6px);
        }
        div.row:nth-of-type(1) .right:after {
            content: "";
            width: 3px;
            height: 38px;
            background-color: #ffffff;
            top: 0px;
            left: -2px;
            position: absolute;
        }
        .icon-dot {
            position: relative;
        }
        .icon {
            width: 50px;
            height: 50px;
            background-color: #f2f2f2;
            text-align: center;
            margin: auto;
            border-radius: 50%;
            line-height: 50px;
            margin-bottom: 12px;
        }
        .icon:before {
            content: "\f23b";
            font-family: mat;
            font-size: 28px;
        }
        .dot {
            position: absolute;
            top: 24px;
            left: -6px;
            width: 50%;
            height: 0;
            z-index: -1;
            border-bottom: 1px dashed #00BCD4;
        }
        .left {
            padding: 20px 20px 20px 20px;
            width: calc(100% - 200px);
            display: inline-block;
            position: relative;
        }   
        h3.title {
            font-size: 17px;
            margin-top: 10px;
        }
        #statement{
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
        }
        .list{
            text-align: right;
            font-size: 1.1rem;
            line-height: 30px;
            display: inline-block;
            width: 100%;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .buybox{
            position: relative;
            font-family: fanum;
            padding: 5px 0px;
            font-size: 1.2em;
            display: block;
            width: fit-content;
            width: -moz-fit-content;
            
        }
        input[type="checkbox"]{
            margin-left: 5px !important;
        }
        .titr{
            padding: 10px 20px;
            color: #00BCD4;
            font-weight: bold;
            display: block;
            text-align: center;
            line-height: 2.7em;
        }
        .titr h4{
            margin: auto;
            padding: 5px;
        }
        #statement .li{
            background-color: rgba(255, 255, 255, 0.85);
            padding: 41px 5% 0 5%;
            font-family: fanum;
            line-height: 2.3em;
            box-shadow: rgba(0, 0, 0, 0.156863) 0px 1px 6px, rgba(0, 0, 0, 0.227451) 0px 1px 6px;
            width: 100%;
            margin: auto;
            text-align: justify;
            max-width: 1000px;
        }
        /*--------*/
        .kharid {
            position: absolute;
            font-size: 17px;
            top: 0;
            z-index: 22;
            left: 2.5%;
            text-align: center;
        }
        p.mablagh {
            border-bottom: 1px solid #a9a9a9;
            padding-bottom: 4px;
            margin-bottom: 11px !important;
            font-family: fanum;
            font-size: 20px;
        }
        a.add-all-to-cart {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        a.add-all-to-cart:before {
            content: "\f00c";
            font-family: aw;
            vertical-align: middle;
            margin-left: 10px;
        }
        .mediaelement-download-link a {
            float: right;
        }
        /* .mediaelement-download-link a:after {
            content: 'دانلود';
            vertical-align: middle;
            padding-bottom: 5px;
            display: inline-block;
        } */
        .panel-bosses{
            font-weight: normal;
            color: #000;
            padding: 5px 0;
        }
        .buybox a.colorbox-time,
        .buybox a.download-time{
            position: relative; 
        }
        .buybox a.colorbox-time:focus,
        .buybox a.download-time:focus{
            outline: none;
        }
        .buybox a.colorbox-time:hover,
        .buybox a.download-time:hover{
            opacity: inherit;
        }
        .buybox a.download-time{
            padding-right: 10px;
        }
        .buybox a.download-time:before,
        .buybox a.preview:before{
            content: '\f162';
            font-family: mat;
            padding: 0 5px;
            font-size: 19px;
            display: inline-block;
            vertical-align: bottom;
        }
        .buybox a.preview:before{
            content: '\f349';
            font-size: 22px;
            padding: 0;
        }
        .upfix {
            position: fixed;
            top: 50px;
            left: 40px;
            transition: all ease 1s !important;
        }
        .bought-package {
            margin: 15px 10px;
            text-align: center;
        }
        .bought-package .muted,
        #timing .discount{
            padding: 15px 20px;
            border-radius: 5px;
            background: #f2f2f2;
            box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
            font-size: 15px;
            border: 1px solid #00bcd4;
            border-width: 0px 5px 0px;
            margin: auto;
            width: 77%;
        }
        #timing .discount{
            border: 1px solid #df0000;
            border-width: 0px 5px 0px;
        }
        .bought-package .muted:before {
            content: "\f3d3";
            font-family: mat;
            font-size: 30px;
            vertical-align: middle;
            margin: -10px 0px -10px 20px;
            border: 1px solid #aaa;
            border-radius: 50%;
            width: 56px;
            display: inline-flex;
            height: 56px;
            color: #F44336;
            align-items: center;
            justify-content: center;
        }
        #gallery-picture{
            position: relative;
            background-image: url(/sites/all/themes/waterhouse/images/landax3.JPG);
            background-attachment: fixed;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center bottom;
            padding: 30px 0 60px 0;
            width: 101%;
        }
        #gallery-picture:before{
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.4);
            content: '';
        }
        #gallery-picture img{
            border-radius : 50%;
            margin: 20px;
        }
        #gallery-picture img:focus,
        #gallery-picture a:focus{
            outline:none;

        }
        #timing input[type="checkbox"]:checked {
            border-color: #00bcd4;
        }
        #timing input[type="checkbox"]:before {
            color: #00bcd4;
        }
        .buybox-hover .buybox-hint{
            right: -4% !important;
        }
        .buybox-hover .buybox-hint,
        .preview .buybox-hint{
            position: absolute;
            width: 202px;
            margin-top: 15px;
            background-color: #ffffff;
            box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
            color: #000;
            line-height: 2;
            text-align: center;
            border-radius: 2px;
            padding: 10px 15px;
            font-size: 12px;
            visibility: hidden;
            display: none;
            top: 40%;
            right: -56%;
            z-index: 999;
        }
        .buybox-hover .buybox-hint:after,
        .preview .buybox-hint:after{
            position: absolute;
            content: '';
            top: -13%;
            right: 9%;
            width: 15px;
            height: 15px;
            background-color: white;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
            border: solid #eee;
            border-width: 1px 0px 0px 1px;
        }
        .buybox-hover:hover .buybox-hint,
        .preview:hover .buybox-hint{
            visibility: visible;
            display: block;
        }
        .description{
            text-align: justify;
            font-family: fanum;
        }
        .page-aks{
            display: inline-block;
            width: 200px;
            background-color: #eee;
            border-radius: 50%;
            height: 200px;
            margin: 20px 30px;
        }
        .page-aks span.icon:before {
            font-size: 49px;
            margin-top: 25px;
            display: block;
            color: #2196f3;
        }
        .page-aks:nth-child(1) span.icon:before {
            content: '\f517';
        }
        .page-aks:nth-child(2) span.icon:before {
            content: '\f45e';
        }
        .page-aks:nth-child(3) span.icon:before {
            content: '\f3dc';
        }
        .page-aks .esm {
            font-size: 15px;
            margin: 16px 0 17px 0;
        }
        .page-aks a.link-pageaks {
            border-radius: 2px;
            line-height: 30px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            transition: all 0.2s;
            box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
            outline: none;
            color: #2196f3 !important;
            border: 1px solid #2196f3;
            margin: 0 8px;
            box-sizing: border-box;
            vertical-align: top;
            width: 110px;
        }
        #gallery-picture a.companylist {
            width: 341px;
            background: white;
            padding: 7px 18px;
            font-family: fanum;
            font-weight: bold;
            font-size: 20px;
            color: #2196f3 !important;
            border: 1px solid #2196f3;
            line-height: 36px;
            text-align: center;
            box-sizing: border-box;
        }
        #gallery-picture a.companylist:before,
        #vijename a.poster:before{
                /* content: '\f349'; */
                content: '\f1da';
                font-family: mat;
                padding: 0 0 0 5px;
                font-size: 23px;
                display: inline-block;
                vertical-align: bottom;
        }
        #gallery-picture h2{
            color: white;
            text-shadow: none;
        }
        #timing .to-end{
            cursor: pointer;
            color: #F44336;;
        }


        /* --Media-- */
        @media (max-width: 1200px){
            .card-style .views-row{
            	width: 100%;
                margin: 15px auto;
                float: none;
            }
            .inner{
                width: 100%;
                padding: 25px;
            }
            #virtual img{
                position: absolute;
                left: 2%;
                width: 45%;
                top: 2vw;
            }
            #virtual .sec-li > div{
                padding: 24px 3.5% 36px 46%;
            }
        }

        @media (max-width: 992px){
            .upfix {
                top: 0;
                left: 0;
                width: 100%;
                background: #fff;
                box-shadow: rgba(0,0,0,0.117647) 0px 1px 6px, rgba(0,0,0,0.117647) 0px 1px 4px;
                padding: 6px;
            }
            p.mablagh{
                width: 90%;
                margin: auto;
            }
            #virtual img {
                position: absolute;
                width: 400px;
                top: -43px;
                right: calc(50% - 200px);
            }
            #virtual .sec-li > div {
                padding: 37px 5%;
                margin-top: 215px;
            }
        }

        @media (max-width: 768px) {
            ul.navigat{display:none;}
            .right {
            	width: 149px;
            	padding-right: 0;
            }
            .left {
            	padding: 20px 20px 20px 0px;
            	width: calc(100% - 180px);
            }
            #presenter .wh {
            	flex-direction: column;
            }
            .bought-package .muted:before {
                margin: 0px 0px 0px 10px;
            }
        }

        @media (max-width: 500px) {
            .right {
            	border-left: 0;
            	width: 100%;
            	padding-left: 0;
            }
            .right:before {
            	right: -6px;
            }
            .row {
            	border-right: 1px solid #00BCD4;
            	flex-direction: column;
            	border-bottom: 0;
            }
            .left {
            	padding: 0px 15px 20px 0px;
            	width: calc(100% - 15px);
            }
            div.row:nth-of-type(1) .right:after {
            	right: -2px;
            	left: initial;
            	height: 35px;
            	top: 3px;
            }
            .dot {
            	right: 0px;
            	left: inherit;
            }
            .row:last-child .right {
            	height: initial;
            }
            #gallery-picture .wh {
                padding-top: 0;
            }
            #gallery-picture a.companylist {
                font-size: 12px;
            }
            #virtual .sec-li > div {
                margin-top: 159px;
            }
            #virtual img{
                width: 300px;
                top: -23px;
                right: calc(50% - 150px);
            }
            #navigat .navi{
                width: 75%;
            }
        }
        /* ---End Media--- */
    </style>
    
    <script>
    	AOS.init({
    	    offset: 0,
    	    duration: 700,
    	    easing: 'ease-in-sine',
    	    delay: 500,
            // once:true,
        });
        /*----------------select day timing------------------*/
        $('#timing .tab1').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab1-section').addClass('active');
                $('#timing .tab2').removeClass('active');
                $('#timing .tab2-section').removeClass('active');
            }
        });
        $('#timing .tab2').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab2-section').addClass('active');
                $('#timing .tab1').removeClass('active');
                $('#timing .tab1-section').removeClass('active');
            }
        });
        /*----------------------------------*/
        $('.page-node-795 .view-id-report_landing').each(function(){
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
        /*
        * for adding multiple products to car at the same time
        * http://waterhouse.ir/cart/add/p798_a11o30
        */
        var mablagh = 0;
        $('#timing .kharid').append('<p class="mablagh">'+mablagh+'</p><a href="http://waterhouse.ir/cart/add/" class="add-all-to-cart">افزودن به سبد خرید</a>');
        $('#timing input').change(function(){
            var href = $('.add-all-to-cart').attr('href');
            if ($(this).is( ":checked" )) {
                if($(this).attr('value') == 235){
                    $('#timing input[type="checkbox"]').not(this).prop("checked", false).attr('disabled',true);
                    mablagh = $('.form-item-attributes-11-235 input').attr("mablagh");
                    $('.add-all-to-cart').attr('href', 'http://waterhouse.ir/cart/add/p798_a11o235');
                }else {
                    if(href.indexOf('p798_a11o') > 0){
                        $('.add-all-to-cart').attr('href', href +'-');
                    }
                    $('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href') +'p798_a11o'+ $(this).attr('value'));
                    mablagh = mablagh + parseInt($(this).attr('mablagh'),10);
                }
            }
            else{
                if($(this).attr('value') == 235){
                    $('#timing input[type="checkbox"]').not(this).attr('disabled', false);
                    mablagh = 0;
                    $('.add-all-to-cart').attr('href', 'http://waterhouse.ir/cart/add/');
                }
                else{
                    var j = href.indexOf('p798_a11o' + $(this).attr('value'));
                    if(j > 0){
                        if( href.indexOf('p798_a11o' + $(this).attr('value') + '-') > 0){
                            //dar eteha nist
                            $('.add-all-to-cart').attr('href', href.substring(0, j) + href.substring(j + 13));
                        }else{
                            //dar entehast ya yekist
                            $('.add-all-to-cart').attr('href', href.substring(0, j));			
                        }
                        if($('.add-all-to-cart').attr('href').slice(-1) == '-'){
                            $('.add-all-to-cart').attr('href', $('.add-all-to-cart').attr('href').substring(0, $('.add-all-to-cart').attr('href').length - 1));				
                        }
                    }
                    mablagh = mablagh - parseInt($(this).attr('mablagh'),10);
                }
            }
            $('.mablagh').text(mablagh.toLocaleString());
        });
        $('.add-all-to-cart').click(function(e){
            e.preventDefault();
            window.location.href = $(this).attr('href') + "?destination=cart";
        });
        /*--------------------------- ColorBox & Masonry ---------------------------------*/       
        // $('#gallery-picture').find( 'a' ).colorbox({rel:'gal',width:'auto',height:'100%',close:'close'});
        $("a.colorbox-time").colorbox({width:"75%", height:"85%",iframe:"true",fixed:"true"});        
        // $('.grid').masonry({
        //     // options
        //     itemSelector: '.grid-item',
        //     columnWidth: 200  
        // });
        /* -------------------------------- fix position add cart ------------------------------*/
        var to_top = $('#timing > div.kharid').offset().top;
        var to_end = $('#statement').offset().top;
	    var nav = $('#timing > div.kharid');
	    $(window).scroll(function () {
            if($(this).attr('class') == ".tab2.active"){
        	    if ($(this).scrollTop() > to_top -17 && $(this).scrollTop() < to_end +800) {
                	nav.addClass("upfix");
        	    }else{
                	nav.removeClass("upfix");
                }
            }
            else{
                if ($(this).scrollTop() > to_top -17 && $(this).scrollTop() < to_end  ) {
                	nav.addClass("upfix");
        	    }else{
                	nav.removeClass("upfix");
                }
            }
        });
        /* ---------------------------- hover download-time -------------------------------- */
        if ($('.buybox-hover').length){
            $('.buybox-hover').append('<div class="buybox-hint"><span> با کلیک، فایل را دانلود کنید. </span></div>')
        }

        if ($('.preview').length){
            $('.preview').append('<div class="buybox-hint"><span> با کلیک، پیش نمایش فایل را مشاهده نمایید. </span></div>')
        }
        /*----------------------------------- animate ------------------------------------- */
        $(".scroll").click(function(e) {
	    	e.preventDefault();
	    	$('html, body').animate({
	    		scrollTop: ($($(this).attr('href')).offset().top)
	    	}, 700);
        });	
        
        $("#timing .to-end").click(function(e) {
	    	e.preventDefault();
	    	$('html, body').animate({
	    		scrollTop: ($('#'+ $(this).attr('to-id')).offset().top)
	    	}, 1000);
        });	
        
        $('#navigat a.navi').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top - 50
            }, 700); 
        });
        /*برای بخش کوتاه کردن متن های بلند، جی اس در فایل اصلی زده شد */
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>

