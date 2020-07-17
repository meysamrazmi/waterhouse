<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
    <div class="<?php print $container_class; ?>">
        <div class="navbar-header">
            <?php if ($logo): ?>
            <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
            <?php endif; ?>

            <?php if (!empty($site_name)): ?>
            <a class="name navbar-brand" href="<?php print $front_page; ?>"
                title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
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
    <section class="intro">
        <img style="width:100%" src="sites/all/themes/waterhouse/images/meysam/image/swc/swc-baner.jpg">
    </section>
    <section id="top">
        <div class="container">
            <div class="title">
                <h2>ماده 10 قانون تشکیل وزارت جهاد کشاورزی (مصوب 1379)</h2>
            </div>
            <div class="main-text">
                بـه منظـور هماهنگـی سياسـتگذاری در زمينـه تأميـن، توزيع و مصرف آب كشـور، شـورايی بنام شـورای عالی آب
                متشـكل از وزرای نيرو، جهاد كشـاورزی، صنايع و معادن، كشـور و رئيس سـازمان مديريت و برنامه ريزي كشـور،
                رئيس سـازمان حفاظت محيط زيسـت، (رئيـس سـازمان مديريـت بحـران كشـور)، يك نفـر از اعضـاي كميسيون كشـاورزی،
                آب و منابع طبيعـی با انتخاب مجلس شـوراي اسـامي بـه عنـوان ناظـر و دو نفر از متخصصين بخش كشـاورزی به حكم
                رئيس جمهور تشـكيل مي گردد. رياسـت عاليه اين شـورا بـا رئيس جمهـور يـا معـاون اول رياسـت جمهـوری خواهد
                بود. تصميمات اين شـورا بـا تصويب هيـأت وزيران يا كميسـيون مذكور در اصل یکصد و سی و هشتم (138) قانون
                اساسـی بـرای دسـتگاه های ذيربط لازم الاجرا مي باشـد.
            </div>
        </div>
    </section>
    <section id="boxes">

        <div class="container">
            <div class="inner">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-1.png" alt="چشم انداز شورای عالی آب" />
                </div>
                <div class="col-md-8">
                    <h3>چشم انداز شورای عالی آب </h3>
                    <div class="inner-text">
                        شورای عالی آب نهادی است مقتدر برای هماهنگی سیاست های آب کشور در راستاس تحقق حکمرانی خوب و مبتنی
                        بر اصول توسعه پایدار در افق 1405
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner left">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-2.png" alt="مأموریت شورای عالی آب" />
                </div>
                <div class="col-md-8">
                    <h3>مأموریت شورای عالی آب</h3>
                    <div class="inner-text">
                        شورای عالی آب یک نهاد ملی و فرابخشی است که در سال 1379 تشكيل شده است.
                        ماموريـت ايـن نهـاد پايش سياسـت هـای آب كشـور، هماهنگ سـازی اين سياسـت ها و پيگيـری و نظـارت بـر
                        حسـن اجـرای مصوبـات شـورا مي باشـد. با توجـه به هـدف غايی شـورا بـرای حكمرانـی خـوب آب و توسـعه
                        پايـدار كشـور، ايجـاد شـرايط همـكاری بين نهادهـای ذينفـع آب و رهبـری تصميمـات صحيـح آن ها يك
                        وظيفـه اصلی می باشـد. در واقع تسـهيل اين همكاری نهـادی، جهت دهي و همسوسـازی سياسـت ها بـراي
                        رسـيدن بـه وضعيـت ايـده آل در تأميـن، توزيع و مصـرف آب ماموريت شـورا مي باشـد. در راستای این
                        ماموریت، دبیرخانه اقدام به تحلیل راهبردی به روش SWOT کرده که راهبردهای ذیل در برنامه اقدام قرار
                        دارند.
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-3.jpg" alt="استفاده از ظرفیت کارشناسی - پژوهشی کشور براي تصمیم سازی و اجرای موثر تصمیمات شورا" />
                </div>
                <div class="col-md-8">
                    <h3>استفاده از ظرفیت کارشناسی - پژوهشی کشور براي تصمیم سازی و اجرای موثر تصمیمات شورا</h3>
                    <div class="inner-text">
                        <ul>
                            <li> تشـكيل كارگروه هـای تخصصـی فنـی از خبـرگان برای بررسـی موضوعات قابل طـرح در شـورا و مصوبات، از جهت عـدم مغايرت با قوانين و اسـناد بالادسـتی </li>
                            <li> تهيه بانک اطاعات هدفمند از خبرگان (كارشناسان، دانشگاهيان، سمن ها و ...) </li>
                            <li>تشكيل تيم برای نظارت و پيگيری اجرای مصوبات شورا و تهيه دستورالعمل رورش ارزيابی و تعريف معيارهای مربوطه</li>
                            <li>تدويـن نظام نامـه شـورای عالـی آب بـه منظور تقويـت سـازوكار اداري و مالـی دبيرخانه و كارگروه هـای تخصصي شـورا و پرهيز از رفتارهـای سـليقه ای دولت هـا و نهادهای عضو شـورا</li>
                            <li>تهيـه ملزومـات و پيوسـت هاي اجتماعـی، اقتصـادی، محيط زيسـتی پشـتيبان و خاصـه سياسـتی مربوطـه بـرای تصميم سـازی و اجـرای مصوبات شـورا</li>
                            <li> تدوين و اجرای سازوكاری برای تعيين موضوعات سياستی  و بنيادی توسط دبيرخانه شورا برای طرح در شورا</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner left">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-4.jpg" alt="تعارضات در مدیریت آب" />
                </div>
                <div class="col-md-8">
                    <h3>اسـتفاده از جایـگاه منحصـر بـه فـرد فرابخشـی و قانونـی شـورا بـرای حـل تعارضـات در مدیریـت آب و کاهش فشـارهای سیاسـی-اجتماعي و تضمین اجـرای مصوبات </h3>
                    <div class="inner-text">
                        <ul>
                            <li>ارجـاع چالش هـای ملـی و فراملـی آب بـه شـورا با دعـوت از سـاير وزرا و ذينفعـان مرتبط </li>
                            <li>بازنگـری و شفاف سـازی وظايـف و مسـئوليت هاي هر يك از دسـتگاه های اجرايـی براي كاهـش تعارضات</li>
                            <li>تدويـن برنامـه اقـدام بـرای ايجـاد وفـاق در مبانـی آمـار و اطاعـات بخـش آب كشـور</li>
                            <li> اقـدام لازم بـرای اخـذ ماهيت اصـل 138 قانون اساسی  برای مصوبات شـورا </li>
                            <li>اعـلام نظـر درخصـوص برنامه هـا و قوانيـن كلان از جملـه برنامه هـای توسـعه پنج سـاله، قبـل از تصويـب </li>
                            <li>تهيـه پيشـنهاد بـراي تمركز كليـه سياسـت گذاری های آب در شـورا و سـاماندهی و حذف مـوازی  كاری ها</li>
                            <li> تهيـه لايحـه پيشـنهادی برای اصـلاح قوانين و سياسـت های بالادسـتی متناقـض بـا اصول توسـعه پايدار و ظرفيت آبی كشـور</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-5.jpg" alt="تقویـت کارکـرد شـورا بـا تکیـه بـر افزایش سـطح آگاهـی و مطالبـه اجتماعـی" />
                </div>
                <div class="col-md-8">
                    <h3>تقویـت کارکـرد شـورا بـا تکیـه بـر افزایش سـطح آگاهـی و مطالبـه اجتماعـی</h3>
                    <div class="inner-text">
                        <ul>
                            <li>تدوین راهبرد و برنامه ارتباطی و اطلاع رسانی شورا برای افزایش تعامل اجتماعی</li>
                            <li>
                                ارائه گزارش های ادواری از مصوبات، عملکرد و کارکرد شورا در جهت اطلاع رسانی شفاف درباره جایگاه و فعالیت های شورا (شامل، و نه محدود به، آرای اعضا در رابطه با مصوبات) در فضای عمومی جامعه
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner left">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-6.jpg" alt="حکمرانی آب" />
                </div>
                <div class="col-md-8">
                    <h3>رعایت اصول و الزامات حکمرانی خوب برای اصلاح کارکرد و ساختار شورا</h3>
                    <div class="inner-text">
                        <ul>
                            <li>تهیه لایحه پیشنهادی برای عضویت نمایندگان بخش خصوصی و سازمان های مردم نهاد(سمن ها و تشکل های بهره برداران) در شورا</li>
                            <li>پیگیری و ایجاد بسترهای نهادی و سیاستی مناسب برای پیاده سازی حکمرانی محلی ای</li>
                            <li>تهیه و اجرای سازوکار ارتقای شفافیت و پاسخگویی</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner">
                <div class="col-md-4">
                    <img src="sites/all/themes/waterhouse/images/meysam/image/swc/box-7.jpg" alt="تقویت اراده سیاسی حاکمیت برای اصلاحات آبی" />
                </div>
                <div class="col-md-8">
                    <h3>تقویت اراده سیاسی حاکمیت برای اصلاحات آبی</h3>
                    <div class="inner-text">
                        <ul>
                            <li> تهيـه لايحـه پيشـنهادی بـرای عضويـت نماينـدگان قـوه قضائيـه و قـوه مقننـه در شـورا</li>
                            <li>  تهيـه و ارائه تحليل های سياسـتی موثر و مسـتمر به نهادها و مقامـات عالی كشـور (نهاد رهبـری، مجمع تشـخيص مصلحت نظـام و ...) بـرای تبيين ابرچالش بودن مسـئله آب</li>
                            <li>  درخواسـت از رئيـس جمهـور و بالاتريـن مقـام دسـتگاه های عضـو بـرای حضور در جلسـه شـورا </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>




    </section>


    <section id="info">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="sites/all/themes/waterhouse/images/meysam/image/swc/info-cir.png"/>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="sites/all/themes/waterhouse/images/meysam/image/swc/info-arrow.png"/>
            </div>
        </div>
    </section>

    <section id="approv2" class="color">
        <div class="container">
			<div class="col-md-9 owl-carousel">

        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/01.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 1
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/02.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 2
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/03.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 3
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/04.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 4
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/05.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                      جلسه 5
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/06.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 6
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/07.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 7
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/08.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 8
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/09.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 9
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/10.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
					 جلسه 10
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/11.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 11
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/13.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 13
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/14.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 14
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat1/15.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 15
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/16.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 16
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/17.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 17
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/18.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 18
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/20.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 20
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/21.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 21
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/22.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 22
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/23.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                    جلسه 23
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/24.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 24
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/25.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 25
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/26.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 26
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/27.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 27
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/28.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 28
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/29.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                           جلسه 29
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/30.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                          جلسه 30
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/31.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 31
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/32.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 32
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/33.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 33
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/34.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 34
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/36.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 36
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/37.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 37
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/38.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                          جلسه 38
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/39.pdf">
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                        جلسه 39
            </a>
        </div>
        <div class="file item">
            <a href="/sites/default/files/swc/mosavebat/40.pdf"  >
                    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png" />
                         جلسه 40
            </a>
        </div>

			</div>

			<div class="col-md-3">
			    <h3> مصوبات </h3>
			</div>
        </div>
    </section>

    <section id="approv">
        <div class="container">
			<div class="owl-carousel col-md-9">
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/1.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 1
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/2.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 2
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/3.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 3
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/4.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 4
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/5.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 5
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/6.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 6
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/8.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 8
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/9-12.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					      9 و 12
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/10.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 10
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/11.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 11
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/13.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 13
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/14.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 14
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/15.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 15
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/16.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 16
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/17.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 17
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/18.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 18
			        </a>
				</div>
				<div class="file item">
					<a href="/sites/default/files/swc/kargroh98/19.docx">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/swc/word.png"/>
					     جلسه 19
			        </a>
				</div>
			</div>
			<div class="col-md-3">
			    <h3>مصوبات کارگروه کارشناسی 98</h3>
			</div>
        </div>
    </section>


    <section id="approv2">
        <div class="container">
			<div class="col-md-9">
				<div class="file col-md-4">
					<a href="/sites/default/files/swc/aiin/14.pdf">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png"/>
					   آيين نامه اجرايي تبصره (14) ماده واحده قانون بودجه سال 1397
			        </a>
				</div>
				<div class="file col-md-4">
					<a href="/sites/default/files/swc/aiin/komite.pdf">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png"/>
					   ايين_نامه-داخلي-كميته-تخصصي-شوراي-عالي-اب
			        </a>
				</div>
				<div class="file col-md-4">
					<a href="/sites/default/files/swc/aiin/sharh.pdf">
					    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/pdf.png"/>
					   شرح-وظايف-شوراي-عالي-اب
			        </a>
				</div>
			</div>

			<div class="col-md-3">
			    <h3> آیین نامه ها </h3>
			</div>
        </div>
    </section>

    <style>

        .color a{
            color: #f15642;
            font-size: 18px;
            font-weight: bold;
        }
        .color{
             margin-top: 200px !important;
             padding: 50px 0 !important;
        }
        .color .col-md-3{
            margin-top:-110px !important;
        }
        #block-system-main{
            font-family:fanum;
        }
        #top .title {
            text-align: -webkit-center;
        }
        #top .title h2 {
            display: table;
            background: #e7534c;
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
            color: #f2c438;
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
            border-top: 2px solid #e7534c;

        }
        #boxes .inner{
            height: 250px;
            background: white;
            box-shadow: 0 0 5px 0 #ccc;
            margin-bottom: 75px;
            text-align: justify;
        }
        #boxes .left .col-md-4{
            float: right;
        }
        #boxes .inner img{
            transform:translate(0, -25px);
            height: 250px !important;
            width: 100% !important;
        }
        #boxes .inner h3{
            color: #e7534c;
            font-size: 16px;
            margin-top:10px;
        }
        #boxes .inner h3:before {
            content: '\e251';
            font-family: glyphi;
            color: #f2c438;
            position: relative;
            top: 5px;
            margin-left: 3px;

        }
        #boxes ul {
            list-style: none;
        }

        #boxes ul li::before {
            content: "\2022";
            color: #f2c438;
            font-weight: bold;
            display: inline-block;
            width: 1em;
        }
        #approv{
            background: white;
            margin-bottom: 200px;
            margin-top: 150px;
            padding: 50px 0;
            box-shadow:0 0 9px 0 #ccc;
            text-align: -webkit-center;
        }
        .owl-carousel{
            max-width: 75%;
        }
        .owl-carousel .owl-nav div{
            background:none!important;
            box-shadow:none!important;
        }

        #approv .owl-carousel .item {
            text-align:-webkit-center;
        }
        #approv .owl-carousel .item a{
            color: #1565c0;
            font-size: 18px;
            font-weight: bold;
        }
        #approv .container .col-md-3{
            transform: skew(0deg,-6deg);
            background-color: #f2c438;
            height: 400px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            padding: 50px 0;
            position: absolute;
            right: 0;
            font-size: 24px;
            color: #e7534c;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top:-110px;
            box-shadow: 0 0px 5px 0 #aaaaaa;
        }
        #approv .container .col-md-3 h3{
            transform: skew(0deg,6deg);
            margin-right: 25px;
        }
        #approv .col-md-9 img{
            max-width:64px
        }


        #approv2{
            background: white;
            margin-bottom: 200px;
            margin-top: 150px;
            padding: 90px 0;
            box-shadow:0 0 9px 0 #ccc;
            text-align: -webkit-center;
        }

        #approv2 .col-md-4 {
            text-align:-webkit-center;
        }
        #approv2 .col-md-4 a{
            color: #f15642;
            font-size: 18px;
            font-weight: bold;
        }
        #approv2 .container .col-md-3{
            transform: skew(0deg,6deg);
            background-color: #f2c438;
            height: 400px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            padding: 50px 0;
            position: absolute;
            left: 0;
            color: #e7534c;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top:-150px;
            box-shadow: 0 0px 5px 0 #aaaaaa;
        }
        #approv2 .container .col-md-3 h3{
            transform: skew(0deg,-6deg);
            margin-right: 100px;
        }
        #approv2 .col-md-9{
            float:right;
        }
        #approv2 .col-md-9 img{
            max-width:64px;
            display:block;
        }
        #info{
            background: white;
            margin: 50px 0;
            padding: 25px 0;

        }
        #info img{
            margin: 15px 0;
        }
        @media(max-width:768px){
            #top .main-text{
                font-size: 13px;
                line-height: 1.7;
            }
            #top .title h2{
                padding: 5px;
                font-size: 12px;
                top: 25px;
            }
            .inner{
                height:inherit !important
            }
            #approv .col-md-3{
                position: relative !important;
                top: -280px;
                margin-top: 0 !important;
                padding: 0 !important;
                border-radius: 50px !important;
                transform: skew(0deg,0deg) !important;
                height: inherit!important;
            }
            #approv .col-md-3 h3{
                transform: skew(0deg,0deg) !important;
            }
            #approv2 .col-md-3{
                position: relative !important;
                padding: 0 !important;
                border-radius: 50px !important;
                transform: skew(0deg,0deg) !important;
                height: inherit!important;
                top: 25px;
            }

            #approv2 .col-md-3 h3{
                transform: skew(0deg,0deg) !important;
                margin-right:0!important
            }
        }
    </style>
    <script>
        /*----------------------------------*/
        $('.page-node-3132 .pdfs').each(function () {
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
                    autoplayTimeout: 3200,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 3 },
                        1000: { items: 4 }
                    }
                });

                $( ".owl-prev").html(' ');
                $( ".owl-next").html(' ');
            })
        }
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
<footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
</footer>
<?php endif; ?>
