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
	<div>
		<ul class="navigat">
			<li to-id="moarefi"><span>معرفی</span></li>
			<li to-id="we"><span>تیم برنامه ریزی</span></li>
			<li to-id="information"><span>سفر در یک نگاه</span></li>
			<li to-id="roads"><span>مقاصد علمی و سیاحتی</span></li>
			<li to-id="timeline"><span>زمانبندی برنامه</span></li>
			<li to-id="rec"><span>لوازم ضروری و پیشنهادی</span></li>
			<li to-id="sabt"><span>ثبت نام</span></li>
			<li to-id="pish"><span>سفرهای پیشین</span></li>
		</ul>
		<section>
		    <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/final-taleghan.jpg" width="100%" height="auto">
		</section>
		<h3 id="moarefi" class="h3"><img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-moarefi.png"/></h3>
		<section id="map">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/map.png"  title="نقشه طالقان" alt="نقشه طالقان"/>
				</div>
				<div class="matn col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<p>طالقان یکی از مناطق خوش آب و هوا و ییلاقی استان البرز است که در میان رشته کوه البرز و در ۱۲۰ کیلومتری شمال غربی تهران قرار گرفته‌است.</p>
					<p>شهر طالقان از به هم پیوستن چهار محله بنام‌های <strong>شهرک</strong>، <strong>گلینک</strong>، <strong>کولچ</strong> و <strong>پردسر</strong> تشکیل شده است.</p>
					<p>از جاذبه‌ های گردشگری طالقان می‌توان به طبیعت فوق العاده جذاب، کوه‌های زیبا و دریاچه بزرگ آن اشاره کرد.</p>
				</div>
			</div>
		</section>
		<h3 class="h3">موشن گرافیک برنامه</h3>
		<section id="video">
			<div class="row">
				<div class="col col-lg-3"></div>
				<div class="col col-lg-6 show-video">
		 			<video width="400" controls>
						<source src="/sites/default/files/manual/tour/motion-taleghan.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/tour/motion-taleghan.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
				</div>
				<div class="col col-lg-3"></div>
			</div>
		</section>
		<h3 id="we" class="h3"><img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-tem.png"/></h3>
		<section id="team">
			<div class="container">
			    <div class="card col-lg-4">
			        <div class="image">
			            <img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/armin.jpg" />
			        </div>
			        <div class="details">
			            <div class="center">
			                <h2>آرمین نوربخش<br><span>مسئول خانه آب ایران و مدیر سفر</span></h2>
			                <p>ما رویایی داریم. زیبا و امیدبخش. وقتی بهش فکر میکنیم چشمامون برق میزنه و دلگرم میشیم:
								</br>
								به تصویر کشیدن تعامل مردم سرزمین مون با آب در طول تاریخ ؛ و شکل دادن خانواده آب ایران در سفرهایی بیاد ماندنی</p>
			            </div>
			        </div>
			    </div>
			    <div class="card col-lg-4">
			        <div class="image">
			            <img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/hashem.jpg" />
			        </div>
			        <div class="details">
			            <div class="center">
			                <h2>هاشم افضلی<br><span>مسئول برنامه ریزی محتوای آموزشی و بازدیدهای علمی سفر</span></h2>
			                <p>هاشم هستم، قراره تو این سفر با بازدید و معرفی جاذبه های گردشگری  طالقان در حوزه آب در کنارتون باشیم. ازتون دعوت می کنم همراهمون باشید</p>
			            </div>
			        </div>
			    </div>
			    <div class="card col-lg-4">
			        <div class="image">
			            <img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/ehsan.jpg" />
			        </div>
			        <div class="details">
			            <div class="center">
			                <h2>احسان نیری<br><span>مسئول روابط عمومی و امور چندرسانه‌ای سفر</span></h2>
			                <p>احسان هستم قراره تو این سفر در کنارتون باشم تا لحظات و خاطرات خوبی رو در قاب ها و تصاویر ماندگار ثبت کنیم.</p>
			            </div>
			        </div>
			    </div>
			</div>
		</section>
		<h3 id="information" class="h3"><img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-0safar.png"/></h3>
		<section id="travel">
			<div class="container">
				<div class="plan hidden-sm hidden-xs" style="margin: -50px 0;">
					<img alt="پرواز هواپیما" src="/sites/all/themes/waterhouse/images/meysam/icons/airplane.png">
				</div>
				<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6">
					<div>
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/datetime.png"/>
						<h4>تاریخ و مدت </h4>
						<p>  4 مهر (یک روزه)</p>
					</div>
				</div>
				<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6 two">
					<div>
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/location.png"/>
						<h4>محل و زمان حرکت</h4>
						<p>ساعت 6:30 -  تهران</p>
					</div>
				</div>
				<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6 three">
					<div>
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/train.png"/>
						<h4>وسیله نقلیه اصلی</h4>
						<p>اتوبوس VIP</p>
					</div>
				</div>
				<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6 five">
					<div>
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/food.png"/>
						<h4>وعده های غذایی</h4>
						<p>پذیرایی فول برد (کلیه وعده های غذایی)</p>
					</div>
				</div>
			</div>
		</section>
		<h3 id="roads" class="h3 hidden-sm hidden-xs"><img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-place.png"/></h3>
		<section id="road" class="hidden-sm hidden-xs">
			<div class="container">
				<div class="col-lg-3">
					<div class="kli">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/tal0.jpg"/>
						<p>روستای کلیرد منزل آیت الله طالقانی</p>
					</div>
					<div class="sad">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/sad2.jpg"/>
						<p>مجموعه سد طالقان</p>
					</div>
				</div>
				<div class="col-lg-6">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/roads.png"/>
				</div>
				<div class="col-lg-3">
					<div class="ahmad">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/mos3.jpg"/>
						<p>منطقه احمد آباد  آرامگاه مرحوم مصدق </p>
					</div>
					<div class="kar">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/kar2.jpg"/>
						<p>آبشار کرکبود</p>
					</div>
				</div>
			</div>
		</section>
		<h3 class="h3">مقاصد علمی و سیاحتی</h3>
		<section id="places">
			<div class="row one">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					     <div class="carousel-inner">
					         <div class="item active">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/sad1.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/sad2.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/sad3.jpg">
					         </div>
					     </div>
						 <ol class="carousel-indicators">
						 	<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
						 	<li data-target="#myCarousel1" data-slide-to="1"></li>
						 	<li data-target="#myCarousel1" data-slide-to="2"></li>
						 </ol>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>سد طالقان
						<br>
						<small style="color:white">(بدنه و دریاچه)</small>
					</h2>
					<p>
						<strong>موقعیت : </strong>
						شهر طالقان، 135 کیلومتری تهران
					</p>
					<p class="padding">
						<strong>معرفی : </strong>
						سد طالقان جزو سدهای خاکی کشور و با هدف تامین آب بخشهای کشاورزی، شرب و همچنین تولید انرژی برقابی احداث گردیده است.
					</p>
					<p>
						<strong>دسترسی : </strong>
						ماشین‌رو (شهر طالقان)
					</p>
				</div>
			</div>
			<div class="row two" style="background:#e1b743">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>نیروگاه برقابی سد طالقان</h2>
					<p class="padding">
						<strong>معرفی : </strong>
						تنها نیروگاهی در جهان است که زیر دریاچه سد ساخته شده است.


					</p>
					<p>
						<strong>هدف از ساخت : </strong>
						هدف اصلی از ساخت این نیروگاه , کنترل فشار جریان به درون تونل انتقال آب زیاران است.
					</p>
					<p>
						<strong>ظرفیت : </strong>
						ظرفیت طراحی نیروگاه برقابی طالقان 17/8مگا وات است و متوسط تولید سالیانه آن 61 گیگا وات ساعت خواهد بود.
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="myCarousel6" class="carousel slide" data-ride="carousel">
					     <div class="carousel-inner">
					         <div class="item active">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/gah.jpg">
					         </div>
					     </div>
						 <ol class="carousel-indicators">
						 	<li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
						 </ol>
					</div>
				</div>
			</div>
			<div class="row two">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					     <div class="carousel-inner">
					         <div class="item active">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/kar1.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/kar2.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/kar3.jpg">
					         </div>
					     </div>
						 <ol class="carousel-indicators">
						 	<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						 	<li data-target="#myCarousel2" data-slide-to="1"></li>
						 	<li data-target="#myCarousel2" data-slide-to="2"></li>
						 </ol>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>آبشار کرکبود</h2>
					<p>
						<strong>موقعیت : </strong>
						روستای کرکبود، 14 کیلومتری طالقان
					</p>
					<p class="padding">
						<strong>معرفی : </strong>
						این آبشار 5 متری، از ارتفاعات حصارچال مازندران سرچشمه گرفته و به رودخانه شاهرود میریزد.
					</p>
					<p>
						<strong>دسترسی : </strong>
						دسترسی: پیاده روی از روستای کرکبود تا محل آبشار (20 دقیقه پیاده روی)
					</p>
					<p>
						<strong>درجه سختی دسترسی : </strong>
						سبک
					</p>
				</div>
			</div>
			<div class="row three">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>منزل آیت‌الله طالقانی</h2>
					<p>
						<strong>موقعیت : </strong>
						روستای گلیرود، 15 کیلومتری طالقان
					</p>
					<p class="padding">
						<strong>معرفی : </strong>
						  روستای گلیرود به بالا طالقان تعلق دارد و زادگاه آیت‌الله طالقانی، از شخصیت‌های بزرگ انقلاب است. خانه وی هنوز پابرجا و مورداحترام اهالی طالقان و گردشگران است در جوار منزل آیت‌الله طالقانی، یک حمام تاریخی نیز واقع‌شده است.
					</p>
					<p>
						<strong>دسترسی : </strong>
						 مسیر ماشین‌رو از طالقان تا روستا(25 دقیقه)
					</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="myCarousel3" class="carousel slide" data-ride="carousel">
					     <div class="carousel-inner">
					         <div class="item active">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/tal0.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/tal2.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/tal3.jpg">
					         </div>
					     </div>
						 <ol class="carousel-indicators">
						 	<li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
						 	<li data-target="#myCarousel3" data-slide-to="1"></li>
						 	<li data-target="#myCarousel3" data-slide-to="2"></li>
						 </ol>
					</div>
				</div>
			</div>

			<div class="row four">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div id="myCarousel4" class="carousel slide" data-ride="carousel">
					     <div class="carousel-inner">
					         <div class="item active">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/mos11.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/mos12.jpg">
					         </div>
					         <div class="item">
					             <img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/mos3.jpg">
					         </div>
					     </div>
						 <ol class="carousel-indicators">
						 	<li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
						 	<li data-target="#myCarousel4" data-slide-to="1"></li>
						 	<li data-target="#myCarousel4" data-slide-to="2"></li>
						 </ol>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2>آرامگاه دکتر مصدق</h2>
					<p>
						<strong>موقعیت : </strong>
						روستای احمد آباد، 50 کیلومتری طالقان
					</p>
					<p class="padding">
						<strong>معرفی : </strong>
						خانه دکتر مصدق، قلعه‌ای خشتی در دهستان احمدآباد است. این خانه در مجاورت روستاهای حسین‌آباد و حسن بکول و قازپوزآباد در بخش مرکزی شهرستان نظرآباد استان البرز است و در ۷٫۵ کیلومتری جنوب غرب شهر آبیک، جای گرفته است. آرامگاه دکتر مصدق در این مکان واقع است.
					</p>
					<p>
						<strong>دسترسی : </strong>
						مسیر ماشین‌رو (در مسیر بازگشت از طالقان به تهران)
					</p>
				</div>
			</div>
		</section>
		<h3 id="pep" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-pepole.png"/>  </h3>
		<section id="pepole">
			<div class="over">
				<div class="container">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/research.png"/>
						<h4>پژوهشگران</h4>
						<p>دانشجویان و اساتید حوزه‌های مختلف بخصوص آب و محیط زیست</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/operator.png"/>
						<h4>کارشناسان</h4>
						<p>کارشناسان ادارات آب منطقه‌ای، آب و فاضلاب، محیط زیست و ..</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/family.png"/>
						<h4>خانواده‌ها</h4>
						<p>با توجه به اجزای متنوع، این تور یکروزه فرصت مناسبی برای آشنایی و لذت بردن خانواده‌ها از مناطق طبیعی و آشنایی با برخی تاسیسات آبی خواهد بود</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/taleghan/forest.png"/>
						<h4>علاقه‌مندان به طبیعت و تاریخ ایران</h4>
						<p>بازدید از دریاچه سد، آبشار طبیعی، اماکن تاریخی مانند منزل مرحوم طالقانی و مصدق و همچنین روایات برخی اطلاعات تاریخی مرتبط در طول مسیر برای علاقه‌مندان جذاب خواهد بود</p>
					</div>
				</div>
			</div>
		</section>
		<h3 id="timeline" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-timing.png"/> </h3>
		<section id="timing"  style="padding-bottom:100px;background:none">
			<div class="wh">
			    <div>
			        <div class="tab tab1 active"> پنجشنبه 4 مهر 98</div>
			    </div>
			    <div class="tab-section tab1-section active">
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>شروع  </h4>
							<span class="name">6:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">شروع برنامه </h3>
			                <p class="description">حرکت به سمت طالقان</p>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>صبحانه  </h4>
							<span class="name">7:30 - 8:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title">صرف صبحانه بین مسیر</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>ادامه مسیر  </h4>
							<span class="name">8:00 - 8:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">رسیدن به محل سد طالقان</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازدید علمی  </h4>
							<span class="name">8:30 - 12:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازدید از سد و نیروگاه طالقان</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازدید   </h4>
							<span class="name">12:00 - 12:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازدید از مسیر شهرک</h3>
			                <p class="description"> گشت و گذار    در شهر</p>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>حرکت   </h4>
							<span class="name">12:30 - 13:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">حرکت به سمت گلیرد</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازدید و ناهار   </h4>
							<span class="name">13:30 - 15:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازدید از منزل آیت الله طالقانی و صرف ناهار</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>حرکت   </h4>
							<span class="name">15:00 - 15:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">حرکت به سمت کرکبود</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازدید   </h4>
							<span class="name">15:30 - 17:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازدید از آبشار کرکبود</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
							<span class="name">17:00 - 19:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازگشت از آبشار، حرکت به سمت احمد آباد، صرف میان وعده عصر</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازدید   </h4>
							<span class="name">19:00 - 19:30</span>
			            </div>
			            <div class="left">
			                <h3 class="title">بازدید از منزل دکتر مصدق</h3>
			            </div>
			        </div>
			        <div  class="row">
			            <div class="right">
			                <div class="icon-dot">
			                    <div class="icon"></div>
			                    <span class="dot"></span>
			                </div>
			                <h4>بازگشت   </h4>
							<span class="name">19:30 - 21:00</span>
			            </div>
			            <div class="left">
			                <h3 class="title"> بازگشت به تهران</h3>
			            </div>
			        </div>
				</div>
		</section>

		<h3 id="rec" class="h3">  <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-lava.png"/></h3>
		<div class="plan hidden-sm hidden-xs" style="margin: -50px 0">
			<img alt="پرواز هواپیما" src="/sites/all/themes/waterhouse/images/meysam/icons/airplane.png">
		</div>
		<section id="lavazem">
			<div class="container">
				<p class="p">پیشنهادی</p>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/sun.png"/>
						<h5>کرم ضد آفتاب</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4 top">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/glass.png"/>
						<h5>عینک آفتابی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/camera.png"/>
						<h5>دوربین عکاسی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4 top">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/ko.png"/>
						<h5>کلاه</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/dam.png"/>
						<h5>دمپایی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4 top">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/charge.png"/>
						<h5>شارژر</h5>
					</div>
				</div>
				<p class="z">ضروری</p>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/pass.png"/>
						<h5>کارت شناسایی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4 top">
					<div class="box" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/drug.png"/>
						<h5>دارو و لوازم شخصی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/mug.png"/>
						<h5>لیوان سفری</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4 top">
					<div class="box">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/boot.png"/>
						<h5>کفش پیاده روی</h5>
					</div>
				</div>
				<div class="col col-lg-2 col-md-2 col-sm-4 col-xs-4">
					<div class="box" id="sabt" >
						<img src="/sites/all/themes/waterhouse/images/meysam/image/aras/ko.png"/>
						<h5>لباس مناسب</h5>
					</div>
				</div>
			</div>
		</section>
		<section id="sign">
			<div class="container">
				<a target="_blank" href="/taleghan/sign"><button id="pribtn">ثبت نام <small style="display:none; font-size:16px; font-weight:100">(به پایان رسید)</small></button></a>
			</div>
		</section>
		<h3 id="pish" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-pish.png"/></h3>
		<section id="safar">
			<div class="container">
				<div class="col-md-5">
					<div class="over k">
						<div>
							<h4>خوزستان</h4>
							<a href="/tourism/khuzestan" target="_blank">مشاهده</a>
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-5">
					<div class="over y">
						<div>
							<h4>یزد</h4>
							<a href="/tourism/Yazd" target="_blank">مشاهده</a>
						</div>
				</div>
				</div>
			</div>
		</section>
		<div class="alert success">
		  <span class="closebtn">&times;</span>
		  <a class="pop"  href="/taleghan/sign">
			  ثبت نام
		  </a>
		</div>
	</div>


</div>
	<style>
		.padding{
			padding:0 25px;
		}
		.plan{
		    direction:ltr;
		}
		.plan img{
		    margin-top:-30px;
		    animation:fly 19s ease-in-out infinite;
		    transform:translate(-370px,0px);
		}
		@keyframes fly{
			100%{transform:translate(1050px,0px)}
		}
		#team .card .details .center{
			min-height:250px;
			max-height:250px;
		}
		/*pop*/
		.alert {
			padding: 20px;
			color: white;
			opacity: 1;
			transition: opacity 0.6s;
			margin-bottom: 15px;
			width:110px;
			position: fixed;
			top: 5%;
			left: 10px;
            animation: boxShadowAnim 1s forwards infinite;
		}
        @keyframes boxShadowAnim {
            from {
                box-shadow: rgba(191, 255, 178, 1) 0px 0px 0px 20px;
            }

            to {
                box-shadow: rgba(191, 255, 178, 0.3) 0px 0px 0px 20px;
            }
        }
		.alert.success {background-color: #4CAF50;z-index:1000}
		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}
		.pop{
			color:white;
			text-decoration:none
		}
		.closebtn:hover {
			color: black;
		}
	</style>
    <script>
        /*-------------------------برای ارام پایین رفتن دسترسی سریع کنار صفحه------------------------------*/
        $("ul.navigat li").click(function(e) {
	    	e.preventDefault();
	    	$('html, body').animate({
	    		scrollTop: ($('#'+ $(this).attr('to-id')).offset().top)
	    	}, 1000);
        });

		//pop
		var close = document.getElementsByClassName("closebtn");
		var i;

		for (i = 0; i < close.length; i++) {
		  close[i].onclick = function(){
		    var div = this.parentElement;
		    div.style.opacity = "0";
		    setTimeout(function(){ div.style.display = "none"; }, 600);
		  }
		}
    </script>
</div>
<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
