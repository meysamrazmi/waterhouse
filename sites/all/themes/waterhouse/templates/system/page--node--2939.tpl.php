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
		<li to-id="moarefi"><span>معرفی</span></li>
		<li to-id="roads"><span>مقاصد علمی و سیاحتی</span></li>
		<li to-id="timeline"><span>زمانبندی برنامه</span></li>
		<li to-id="rec"><span>لوازم ضروری و پیشنهادی</span></li>
		<li to-id="sabt"><span>ثبت نام</span></li>
		<li to-id="show-poster"><span>نمایش پوستر</span></li>
		<li to-id="we"><span>تیم برنامه ریزی</span></li>
		<li to-id="pish"><span>سفرهای پیشین</span></li>
	</ul>
	<section id="image">
		<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/mah_nar.png" width="100%" alt="سد امیر کبیر" title="سد امیر کبیر"/>
	</section>
	<section id="introd">
		<h3 id="moarefi" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-0safar.png"/></h3>
		<div class="row">
			<div class="col-md-3 main">
				<div>
					<div class="iner">
						<div class="img">
							<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/time.png" class="r20"/>
						</div>
						<div class="text l80">
							<h3>تاریخ و مدت</h3>
							<p>5و 6 آذر - دو روز و یک شب</p>
						</div>
					</div>
					<div class="iner">
						<div class="text r20">
							<h3>زمان و محل حرکت</h3>
							<p>ساعت 6:30 صبح روز پنج شنبه</p>
						</div>
						<div class="img">
							<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/pin.png" class="l80"/>
						</div>
					</div>
					<div class="iner">
						<div class="img">
							<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/train.png" class="r20"/>
						</div>
						<div class="text l80">
							<h3>وسیله نقلیه اصلی</h3>
							<p>اتوبوس</p>
						</div>
					</div>
					<div class="iner">
						<div class="text r20">
							<h3>وعده های غذایی</h3>
							<p> فولبرد</p>
						</div>
						<div class="img">
							<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/food.png" class="l80"/>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="col-md-8 film" style="opacity:0">
					<video width="400" controls>
						<source src="/sites/default/files/manual/tour/motion-amirkabir.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/tour/motion-amirkabir.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
				</div>
				<div class="col-md-4">
					<div class="mo">
						<p class="satr">می‌خوایم شما رو به یک سفر آموزنده و لذت بخش دعوت کنیم. یه سفر با محوریت آب و محیط زیست درست در همین حوالی؛</p>
						<p class="satr">اين دفعه مسافر محلات و نراق هستیم و قراره در کنار دیدنیهای منطقه از سد 15 خرداد و تاسیسات اون بازدید کنیم.</p>
						<p class="satr"> پس بازم شعار "هم فال و هم تماشا" ی ما پابرجاست. راستی این‌بار چند تا مهمون ویژه داریم که قراره همسفرمون باشن و از همسفری و هم صحبتی باهاشون کلی درس یاد بگیریم، درس آب و زندگی؛ مشتاقانه منتظرتونیم که یه تجربه ناب دیگه رو با هم بسازیم 🙂 </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<h3 id="roads" class="h3"><img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-place.png"></h3>
	<section id="places">
		<div class="row sec4">
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/abgarm.jfif" alt="آبگرم محلات"/>
					<div class="info">
						<h3>آبگرم محلات</h3>
						<p>زمان بازدید: روز اول 11:30 الی 14:30</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/khoor.jpg" alt="روستای خورهه"/>
					<div class="info">
						<h3> روستای خورهه</h3>
						<p>زمان بازدید: روز اول 14:30 الی 15:30</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/sar.jpg" alt="شهرستان محلات"/>
					<div class="info">
						<h3> کوچه باغ، سرچشمه، دریاچه و آسیاب</h3>
						<p>زمان بازدید: روز اول 16 الی 18</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row middle">
			<div class="col-md-3">
				<div class="cage">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/chal.jpg" alt="غار چال نخجیر"/>
					<div class="info">
						<h3> غار چال نخجیر</h3>
						<p>زمان بازدید: روز دوم 9:30 الی 11</p>
					</div>
				</div>
				<div class="cage">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/naraq.jpg" alt="نراق"/>
					<div class="info" style="top:50%">
						<h3> شهر نراق</h3>
						<p>زمان بازدید: روز دوم 11:30 الی 13</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="main">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/sad-qom.jpg" alt="سد 15 خرداد قم"/>
					<div class="info">
						<h3> سد 15 خرداد قم</h3>
						<strong>(بازدید علمی)</strong>
						<p>زمان بازدید: روز دوم 9:30 الی 11:30</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="cage">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/jasb.jpg" alt="منطقه جاسب"/>
					<div class="info">
						<h3> منطقه جاسب</h3>
						<p>زمان بازدید: روز دوم 14 الی 15</p>
					</div>
				</div>
				<div class="cage">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/sohrab.jpg" alt="آرامگاه سهراب سپهری"/>
					<div class="info" style="top:50%">
						<h3> آرامگاه سهراب سپهری</h3>
						<p>زمان بازدید: روز دوم 11:30 الی 11</p>
					</div>
				</div>
				
			</div>
		<div class="row sec4">
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/mash.jpg" alt="مشهد اردهال"/>
					<div class="info">
						<h3> مشهد اردهال</h3>
						<p>زمان بازدید: روز دوم 15 الی 16</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/ravand.jpg" alt="راوند"/>
					<div class="info">
						<h3> راوند</h3>
						<p>زمان بازدید: روز دوم17 الی 18</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="top">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/qom/deli.jpg" alt="دلیجان"/>
					<div class="info">
						<h3> دلیجان</h3>
						<p>زمان بازدید: روز دوم 8 الی 9:30</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<h3 id="timeline" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-timing.png"> </h3>
	<section id="timing"  style="padding-bottom:100px;background:none">
		<div class="wh">
		    <div>
		        <div class="tab tab1 active"> پنج شنبه - 5 دی </div>
		        <div class="tab tab2">  جمعه - 6 دی </div>
		    </div>
		    <div class="tab-section tab1-section active">
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>شروع سفر</h4>
						<span class="name">6:30 - 8:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت شهر قم و صرف صبحانه در  مجموعه مهتاب </h3>
		                <p class="description">...</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>سد 15 خرداد</h4>
						<span class="name">8:30 - 11:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت سد 15 خرداد </h3>
		                <p class="description">بازدید از سد 15 خرداد</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>آبگرم محلات</h4>
						<span class="name">11:30 - 12:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت آبگرم محلات </h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>ناهار</h4>
						<span class="name">12:30 - 14:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">استفاده از آبگرم محلات و صرف ناهار</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>خورهه</h4>
						<span class="name">14:30 - 15:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت خورهه و بازدید از آثار تاریخی</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>محلات</h4>
						<span class="name">15:30 - 16:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت محلات</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>بازدید</h4>
						<span class="name">16:00 - 18:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید از کوچه باغ، سرچشمه و دریاچه وآسیاب</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>شام</h4>
						<span class="name">18:00 - 20:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت محل اقامت و صرف شام</h3>
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
		                <h4>  اقامتگاه</h4>
						<span class="name">7:00 - 8:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">صرف صبحانه</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  دلیجان</h4>
						<span class="name">8:00 - 9:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت دلیجان</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  غار چال نخجیر</h4>
						<span class="name">9:30 - 11:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید از غار چال نخجیر</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  نراق</h4>
						<span class="name">11:00 - 13:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت نراق</h3>
		                <p class="description">بازدید از آثار علمی  و تاریخی شهر نراق</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  جاسب</h4>
						<span class="name">13:00 - 15:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت جاسب</h3>
		                <p class="description">بازدید از منطقه و صرف ناهار در جاسب</p>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  مشهداردهال</h4>
						<span class="name">15:00 - 16:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت مشهداردهال</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  مقبره سهراب سپهری</h4>
						<span class="name">16:00 - 17:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید از منزل و مقبره سهراب سپهری</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  راوند</h4>
						<span class="name">17:00 - 18:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت راوند</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>  بازگشت</h4>
						<span class="name">18:00 - 20:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت تهران</h3>
		                <p class="description">گشت و صرف شام در مجموعه مهروماه</p>
		            </div>
		        </div>
		    </div>
		</div>
	</section> 
	<h3 id="rec" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-lava.png"></h3>

	<h3 id="pish" class="h3"> <img src="/sites/all/themes/waterhouse/images/meysam/image/aras/l-pish.png"></h3>
	<section id="tours">
		<div class="row">
			<div class="tour one">
				<a href="http://waterhouse.ir/tourism/yazd" target="_blank">
					<div class="over">
						<h3>یزد</h3>
						<p>8 تا 11 آبان 97</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour two">
				<a href="http://waterhouse.ir/tourism/khuzestan" target="_blank">
					<div class="over">
						<h3>شمال خوزستان</h3>
						<p>14 تا 17 اسفند 97</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour three">
				<a href="http://waterhouse.ir/tourism/aras" target="_blank">
					<div class="over">
						<h3>رودخانه ارس</h3>
						<p>1 تا 4 آبان 98</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour four">
				<a href="http://waterhouse.ir/tourism/lar" target="_blank">
					<div class="over">
						<h3>سد لار</h3>
						<p>23 آبان 98</p>
					</div>
					<p class="op">مشاهده</p>
				</a>
			</div>
			<div class="tour five">
				<a href="http://waterhouse.ir/tourism/amirkabir" target="_blank">
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
    	background: #0fa9b2;
		opacity:0;
	    transition: all .6s ease-in-out;
		margin:0 25px;
	}
	.over{
		width: 100%;
    	height: 300px;
    	margin: 0;
    	background: radial-gradient(circle,#0fa9b273 0%,#009b6a21 100%);
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
	.tour:hover .over {
		opacity:0;
		transform:scale(0)
	}
	.tour:hover .op{
		opacity:1;
		transform:translateY(-150px)
	}
	</style>
    <script> 
	
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