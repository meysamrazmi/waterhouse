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
	<ul class="navigat">
		<li to-id="intr"><span>معرفی</span></li>
		<li to-id="negah"><span>سفر در یک نگاه</span></li>
		<li to-id="place"><span>مقاصد علمی و سیاحتی</span></li>
		<li to-id="timing"><span>زمانبندی برنامه</span></li>
		<li to-id="sign"><span>ثبت نام</span></li>
		<li to-id="pooster"><span>نمایش پوستر</span></li>
		<li to-id="tours"><span>سفرهای پیشین</span></li>
	</ul>
	<section id="image">
		<img src="/sites/all/themes/waterhouse/images/tour/khuzestan/banner2.jpg" width="100%"/>
	</section>
	<section id="intr">
		<div class="row">
			<div class="col col-lg-6 show-video">
		 		<video width="400" controls>
					<source src="/sites/default/files/manual/tour/motion-khuzestan2.mp4" type="video/mp4">
					<source src="/sites/default/files/manual/tour/motion-khuzestan2.mp4" type="video/ogg">
					مرورگر شما از این قابلیت استفاده نمی کند
				</video>
			</div>
			<div class="matn col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="text">

					<h1>معرفی سفر به شرق و جنوب خوزستان و مارون </h1>
					ما بچه‌های خانه آب، دوباره عزم سفر کردیم و می‌خوایم شما رو هم به این سفر دعوت کنیم! یه سفر با محوریت آب و محیط زیست توی مام وطنمون ایران؛ البته که از فرهنگ هم توی این سفر غافل نیستیم.
					اين دفعه مسافر سرزمین آب و آفتاب! سرزمين رودهای خروشان! سرزمین هزاره‌های پیش از تاریخ هستیم! بله! درست حدس زدید،جنوب خوزستان!
					<br/>
						جاذبه‌های علمی و گردشگری :
						- سد و نیروگاه مارون - مرکز دیسپاچینگ آب خوزستان - سد تنظیمی آریو برزن	- کانال و ایستگاه پمپاژ مارد	- سد سلولی بهمنشیر	- کارخانه فولاد خوزستان
						- گشت زنی در پلاژ ساحلی سد مارون	- تشکوه و چشمه های قیر جوشان مامتین	- بند دیلم و جاده ساحلی 	- قایق سواری در تالاب شادگان	- بازار مرزی هندیجان	- اسکله بندر امام	- منطقه آزاد اروند	- جزیره مینو	- لنج سواری در اروند	- نخلستان های کارون	- شبگردی در کوچه های آبادان و خرمشهر	- امام زاده سید عباس
					<br/>
					پس بازم شعار "هم فال و هم تماشا" ی ما پابرجاست.
						راستی باز هم چند تا مهمون ویژه داریم که قراره همسفرمون باشن و از همسفری و هم صحبتی باهاشون کلی درس یاد بگیریم، درس آب و زندگی؛ مشتاقانه منتظرتونیم که یه تجربه ناب دیگه رو با هم بسازیم	 
				</div>
			</div>
		</div>
	</section>
	<section id="negah">
		<div class="container">
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/calendar.png"/>
					<h3>تاریخ و مدت :</h3>
					<p>4/5 روزه - 14 تا 19 اسفند</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/pin.png"/>
					<h3>زمان و محل حرکت :</h3>
					<p>چهارشنبه اسفند ساعت 14 - راه آهن</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/train.png"/>
					<h3>وسیله نقلیه اصلی :</h3>
					<p>قطار</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/food.png"/>
					<h3> وعده های غذایی :</h3>
					<p></p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/car.png"/>
					<h3>وسیله نقلیه محلی :</h3>
					<p>وسیله نقلیه محلی</p>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/hotel.png"/>
					<h3> اقامت :</h3>
					<p></p>
				</div>
			</div>
		</div>
	</section>
	<section id="place">
		<div class="row">
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/talab.jpg" alt="تالاب شادگان"/>
					<p>تالاب شادگان</p>
					<div class="more">
						تالاب شادگان، یک تالاب بین المللی است که در خوزستان واقع شده است.
						<br/>
						این تالاب در جنوب غربی ایران در جنوب شهر شادگان و در استان خوزستان قرار دارد
						<br/>
						این تالاب بین المللی و مهم، تنوع زیستی غنی دارد و همین امر است که آن را خاص و متمایز می‌کند.
						<br/>
						قایق سواری در این تالاب تفریح برجسته و به نام است. تمام گردشگران برای حس تالاب و تجربۀ آن سوار قایق می‌شوند و در آن گردش می‌کنند
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/sad-m.jpg" alt="سد مخزنی مارون"/>
					<p>سد مخزنی مارون</p>
					<div class="more">
						یک سد خاکی است که بر روی رود مارون در ۱۵ کیلومتری شمال بهبهان در استان خوزستان قرار دارد
						<br/>
						این سد آب مورد نیاز کشاورزی و نیروی برق‌آبی را تأمین می‌کند
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/foolad.jpg" alt="کارخانه فولاد خوزستان"/>
					<p>فولاد خوزستان</p>
					<div class="more">
						بزرگترین عرضه کننده شمش فولاد و دومین قطب تولید فولاد خام در کشور میباشد
						<br/>
						یکی از بنگاه های پیشرو اقتصادی  که در عرصه های ملی و منطقه ای صنعت فولاد حضوری فعال دارد
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/ghir.jpg" alt="چشمه قیر جوشان مامتین"/>
					<p>چشمه قیر جوشان </p>
					<div class="more">
						چشمه‌های جوشان قیر طبیعی ماماتین از جاذبه‌های دیدنی و حیرت‌آور شهرستان رامهرمز به شمار می‌رود که گاهی طلای سیاه از آن‌ها به بیرون می‌جهد
						<br/>
						در نزدیکی این چشمه‌های قیر، کوره‌هایی وجود دارد که از دوران قدیم به جای مانده‌اند و هنوز کاملا سالم هستند. این کوره‌ها در دوران گذشته مخصوص تفکیک قیر از آب و املاح بوده اند.
						<br/>
						در منطقه ماماتین، ۱۰ چشمه قیر طبیعی به صورت تنورهای نانوایی وجود دارد که با مصالحی از قبیل قلوه‌سنگ و ملات ساروج در دو طرف یک مسیل کم‌آب قرار گرفته‌اند. هنگامی که این چشمه‌ها فوران می‌کنند در بستر رودخانه قرار می‌گیرند.
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/dilam.jpg" alt=" بندر دیلم بوشهر"/>
					<p>بندر دیلم</p>
					<div class="more">
						منطقه گردشگری و تفریحی جریزه بندرحماد از جاذبه‌های توریستی بندر دیلم می‌باشد.
						<br/>
						ازجاذبه‌های دیگر دیلم: دریای ساحلی بکر ودست نخورده درمیان دریاهای استان، اسکله دیلم - بازار ماهی فروشان، قبرسید، قبورشهدای گمنام، بازارها (کویتی‌ها - بازارچه ساحلی - پاساردریم لند)، جنگل‌ها (بیدو - عامری - سیاهمکان)، امامزاده جعفر، امام زاده حسن درشهر امام حسن، تپه‌های صخره ای ساحل امام حسن، روستای هدف گردشگری حصار
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/minoo.jpg" alt="آبادان گردی"/>
					<p>آبادان گردی</p>
					<div class="more">
							آبادان گردی می‌تواند یکی از لذت‌بخش‌ ترین تفریحات ایرانگردی باشد
						<br/>

					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/emam.jpg" alt="اسکله بندر امام"/>
					<p>اسکله بندر امام</p>
					<div class="more">
						بندر امام خمینی بعد از بندر شهید رجایی بزرگترین بندر تجاری ایران است که راه آهن سراسری آن را به پایتخت پیوند می‌دهد. طول اسکلهٔ تجاری مجتمع بندری امام حدود هفت کیلومتر است و سالانه سی میلیون تن کالا را پذیرش می‌کند. از این رو از بزرگترین و مهمترین پایانه تجارتی دریایی کشور است.
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="place">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/karun.jpg" alt="نخلستانهای کارون"/>
					<p>نخلستانهای کارون</p>
					<div class="more">
						به جرات مي‌توان گفت درختان نخل زيبايي كارون را دو چندان كرده‌اند و حس و حال خوبي به اين شهرستان بخشيده‌اند، اما در كنار اين نخلستان ها وجود تاكستان هاي سرسبز تصوير جذابي را براي هر گردشگري ايجاد مي‌كند.
						<br/>
						شهرستان كارون يكي از قطب هاي توليد انگور به شمار مي رود و روستاهاي غزاويه بزرگ، اسلام آباد و چميان از ديگر توليد كنندگان انگور در اين شهرستان هستند.
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="timing">
		<div class="wh">
		    <div>
		        <div class="tab tab1 active">چهارشنبه 14 اسفند </div>
		        <div class="tab tab2">  پنجشنبه 15 اسفند </div>
		        <div class="tab tab3"> جمعه 16 اسفند </div>
		        <div class="tab tab4"> شنبه 17 اسفند </div>
		        <div class="tab tab5"> یک شنبه  18 اسفند </div>
		    </div>
            <div class="tab-section tab1-section active">
                <div class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4 class="name">شروع سفر</h4>
						<span class="name">14:۰۰</span>
                    </div>
                    <div class="left">
                        <h3 class="title">حرکت از تهران به سمت اهواز</h3>
                        <p class="description">داخل قطار: آشنایی همسفران - عصرانه – بازی های جمعی - شام </p>
                    </div>
                </div>
            </div>
		    <div class="tab-section tab2-section">
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>راه آهن اهواز</h4>
						<span class="name">۶:۰۰</span>
		            </div>
		            <div class="left">
		                <h3 class="title">اهواز</h3>
                        <p class="description">رسیدن به ایستگاه راه آهن</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>اهواز</h4>
						<span class="name">7:3۰ - 12:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید های علمی و صنعتی </h3>
		                <p class="description">مرکز دیسپاچینگ آب خوزستان – کارخانه فولاد خوزستان</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>اهواز</h4>
						<span class="name">12:00 - 14:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">ناهار و نماز</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>جاده اهواز - رامهرمز</h4>
						<span class="name">14:00 - 18:۰0</span>
		            </div>
		            <div class="left">
		                <h3 class="title"> به سمت رامهرمز</h3>
		                <p class="description">بازدید از تشکوه و چشمه های قیر جوشان مامتین</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4> مهمانسرای سد جره</h4>
						<span class="name">18:۰۰ - 22:۰۰</span>
		            </div>
		            <div class="left">
		                <h3 class="title">استقرار در مهمانسرا (شام و شب نشینی)</h3>
		            </div>
		        </div>
		    </div>
		    <div class="tab-section tab3-section">
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  بهبان</h4>
						<span class="name">8:00 - 12:30:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت از رامهرمز به سمت بهبان و بازدیدهای علمی و سیاحتی</h3>
		                <p class="description">سد و نیروگاه مارون – سد تنظیمی آریو برزن – جاذبه های طبیعی</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  بهبان </h4>
						<span class="name">12:30 - ۱4:۰0</span>
		            </div>
		            <div class="left">
		                <h3 class="title">صرف ناهار و اقامه نماز</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4> جاده بهبهان - آبادان</h4>
						<span class="name">14:00 - 20:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title"> به سمت خرمشهر</h3>
		                <p class="description">بندر دیلم - جاده ساحلی – بازار مرزی هندیجان – اسکله بندر امام</p>
		            </div>
		        </div>

		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>   خرمشهر</h4>
						<span class="name">20:۰۰ - 23:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">خرمشهرگردی</h3>
		                <p class="description">شام و شبگردی (پل قدیم و جدید خرمشهر) و قایق سواری </p>
		            </div>
		        </div>
		    </div>
            <div class="tab-section tab4-section">
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4> آبادان و خرمشهر </h4>
						<span class="name">8:00 - 12:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید ها</h3>
		                <p class="description">رودخانه اروند و بهمنشیر – نخلستان ها – سدهای سلولی – کانال مارد و ایستگاه پمپاژ – امامزاده سید عباس</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  جزیره مینو </h4>
						<span class="name">12:30 - ۱4:۰0</span>
		            </div>
		            <div class="left">
		                <h3 class="title">صرف ناهار و اقامه نماز</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  آبادان – خرمشهر - اروند</h4>
						<span class="name">14:00 - 20:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">آبادان – خرمشهر – منطقه آزاد اروند</h3>
						<p class="description">لنج سواری – بازار گردی - گشت و گذار در منطقه آزاد</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>   آبادان </h4>
						<span class="name">20:00 - 22:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">آبادان گردی (شام و شبگردی)</h3>
		            </div>
		        </div>
            </div>

            <div class="tab-section tab5-section">
                <div class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4 class="name">تالاب شادگان</h4>
						<span class="name">7:30 - 10:00</span>
                    </div>
                    <div class="left">
                        <h3 class="title">حرکت از آبادان به سمت تالاب شادگان</h3>
                        <p class="description">بازدید و قایق سواری در تالاب شادگان </p>
                    </div>
                </div>
                <div class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4 class="name">اهواز</h4>
						<span class="name">10:00 - 11:30</span>
                    </div>
                    <div class="left">
                        <h3 class="title">حرکت از شادگان به سمت اهواز</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon"></div>
                            <span class="dot"></span>
                        </div>
                        <h4 class="name">ایستگاه راه آهن اهواز</h4>
						<span class="name">12:00</span>
                    </div>
                    <div class="left">
                        <h3 class="title">حرکت به سمت تهران ؛ بازی ، گفت و گو و شام داخل قطار</h3>
                        <p class="description">رسیدن به تهران ساعت 4 بامداد دوشنبه 19 اسفند </p>
                    </div>
                </div>
            </div>
		</div>
	</section>
	<section id="sign">
		<a href="/tourism/sign" target="_blank">
			<img src="/sites/all/themes/waterhouse/images/meysam/image/maroon/sign.png" alt="سفر به خوزستان">
		</a>
	</section>
	<section id="tours">
		<div class="row">
			<div class="tour one">
				<a href="/tourism/yazd" target="_blank">
					<div class="over">
						<h3>یزد</h3>
						<p>8 تا 11 آبان 97</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour two">
				<a href="/tourism/khuzestan" target="_blank">
					<div class="over">
						<h3>شمال خوزستان</h3>
						<p>14 تا 17 اسفند 97</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour three">
				<a href="/tourism/aras" target="_blank">
					<div class="over">
						<h3>رودخانه ارس</h3>
						<p>1 تا 4 آبان 98</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour four">
				<a href="/tourism/lar" target="_blank">
					<div class="over">
						<h3>سد لار</h3>
						<p>23 آبان 98</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour five">
				<a href="/tourism/amirkabir" target="_blank">
					<div class="over">
						<h3>سد امیرکبیر</h3>
						<p>14 آذر 98</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
		</div>
	</section>

	<style>

		@keyframes swing{
			0%{
				transform:rotate(5deg)
			}
			50%{
				transform:rotate(-5deg)
			}
			100%{
				transform:rotate(5deg)
			}
		}
		.one{
			background:url(/sites/all/themes/waterhouse/images/meysam/y2.jpg)
		}
		.two{
			background:url(/sites/all/themes/waterhouse/images/meysam/k1.jpg)
		}
		.three{
			background:url(/sites/default/files/aras5.JPG)
		}
		.four{
			background:url(/sites/all/themes/waterhouse/images/meysam/image/lar/daryache.jpg)
		}
		.five{
			background:url(/sites/all/themes/waterhouse/images/meysam/image/karaj/sad.jpg)
		}
		#tours .row{
			margin:0;
			display:flex;
			text-align:-webkit-center;
		}
		.op{
			border: 2px solid;
    		color: white;
    		background: #e7534c;
			opacity:0;
		    transition: all .6s ease-in-out;
			margin:0 25px;
		}
		.over{
			width: 100%;
    		height: 300px;
    		margin: 0;
    		background: #e7534c45;
    		padding: 100px 25px;
    		color: white;
		    transition: all .5s ease-in-out;
  		    font-weight: bold;
		}
		.tour{
			background-position: center;
    		background-size: cover;
    		height: 300px;
    		padding: 0;
			width:20%
		}
		@media (max-width:768px){
			.tour{
				width:100%
			}
		}
		.tour:hover .over {
			opacity:0;
			transform:scale(0)
		}
		.tour:hover .op{
			opacity:1;
			transform:translateY(-150px)
		}
		//موقتی
		.tab2-section .row:nth-of-type(1) .icon, .tab2-section .row:nth-of-type(2) .icon,.tab2-section .row:nth-of-type(3) .icon,.tab2-section .row:nth-of-type(4) .icon
		.tab2-section .row:nth-of-type(5) .icon, {
		    background:#e7534c !important;

		}
	</style>
    <script>

	$('#timing .tab1').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab1-section').addClass('active');
                $('#timing .tab2').removeClass('active');
                $('#timing .tab2-section').removeClass('active');
                $('#timing .tab3').removeClass('active');
                $('#timing .tab3-section').removeClass('active');
                $('#timing .tab4').removeClass('active');
                $('#timing .tab4-section').removeClass('active');
                $('#timing .tab5').removeClass('active');
                $('#timing .tab5-section').removeClass('active');
            }
        });
        $('#timing .tab2').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab2-section').addClass('active');
                $('#timing .tab1').removeClass('active');
                $('#timing .tab1-section').removeClass('active');
                $('#timing .tab3').removeClass('active');
                $('#timing .tab3-section').removeClass('active');
                $('#timing .tab4').removeClass('active');
                $('#timing .tab4-section').removeClass('active');
                $('#timing .tab5').removeClass('active');
                $('#timing .tab5-section').removeClass('active');
            }
        });
        $('#timing .tab3').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab3-section').addClass('active');
                $('#timing .tab1').removeClass('active');
                $('#timing .tab1-section').removeClass('active');
                $('#timing .tab2').removeClass('active');
                $('#timing .tab2-section').removeClass('active');
                $('#timing .tab4').removeClass('active');
                $('#timing .tab4-section').removeClass('active');
                $('#timing .tab5').removeClass('active');
                $('#timing .tab5-section').removeClass('active');
            }
        });
        $('#timing .tab4').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab4-section').addClass('active');
                $('#timing .tab1').removeClass('active');
                $('#timing .tab1-section').removeClass('active');
                $('#timing .tab2').removeClass('active');
                $('#timing .tab2-section').removeClass('active');
                $('#timing .tab3').removeClass('active');
                $('#timing .tab3-section').removeClass('active');
                $('#timing .tab5').removeClass('active');
                $('#timing .tab5-section').removeClass('active');
            }
        });
        $('#timing .tab5').click(function(){
            if(!$(this).hasClass('active')){
                $(this).addClass('active');
                $('#timing .tab5-section').addClass('active');
                $('#timing .tab1').removeClass('active');
                $('#timing .tab1-section').removeClass('active');
                $('#timing .tab2').removeClass('active');
                $('#timing .tab2-section').removeClass('active');
                $('#timing .tab3').removeClass('active');
                $('#timing .tab3-section').removeClass('active');
                $('#timing .tab4').removeClass('active');
                $('#timing .tab4-section').removeClass('active');
            }
        });
	   /*-------------------------برای ارام پایین رفتن دسترسی سریع کنار صفحه------------------------------*/
        $("ul.navigat li").click(function(e) {
	    	e.preventDefault();
	    	$('html, body').animate({
	    		scrollTop: ($('#'+ $(this).attr('to-id')).offset().top)
	    	}, 1000);
        });
    </script>
</div>
<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
