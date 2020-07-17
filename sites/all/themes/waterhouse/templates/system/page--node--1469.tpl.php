
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
	<section class="intro row">
		<img src="/sites/all/themes/waterhouse/images/abotose.jpg" style="border-radius: 0 0 85% 85%  / 30%;width:100%"/>
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4 h1">
			<h1>نشریه آب و توسعه</h1>
		</div>
		<div class="col-lg-4">
		</div>
	</section>
	<section class="logo" style="display:none">
		<div class="container">
		</div>
	</section>
	<section class="main-purpose">
		<div class="row purpose">
			<div class="col col-lg-5 col-md-2 col-sm-12 col-xs-12">
				<div class="bg"></div>
			</div>
			<div class="col col-lg-7 col-md-8 col-sm-12 col-xs-12">
				<h3 class="h3"><img src="/sites/all/themes/waterhouse/images/meysam/image/lable/tarikh.png"/></h3>
				<h2>هدف نشریه آب و توسعه چیست ؟ </h2>
				<p class="text">
					فصلنامه آب و توسعه به صاحب امتیازی امور آب وزارت نیرو و در یک دوره هفت ساله، بین سال‌های  ۱۳۷۲ تا ۱۳۷۸ منتشر می‌گردید. در طی این مدت 22 شماره از نشریه انتشار یافت. 
					سردبیری نشریه بر عهده <b>عباسقلی جهانی</b> بود. در دوره‌های مختلف انتشار نشریه آب و توسعه، افراد مختلفی در هیأت تحریریه عضویت داشتند. از جمله: <b>فریدون برهمن</b>، <b>مصطفی بزرگ‌زاده</b>، <b>پرویز حکیمی لاریجانی</b>، <b>کریم شیعتی</b>، <b>قهرمان قدرت‌نما</b>، <b>غلامعلی معماری</b>، <b>محمد کارآموز</b> و <b>انوش نوری اسفندیاری</b>
					<br/>
					انتشار این نشریه در پاییز سال 1378 متوقف شد...
				</p>
			</div>
		</div>
	</section>
	<section class="mov">
		<div class="row">
			<div class="col-md-6">
				<h3 class="h3" style="text-align:left"><img src="/sites/all/themes/waterhouse/images/meysam/image/lable/film.png"/></h3>
				<div class="tozih" style="font-size: 18px;">
					شناخت مسیر طی شده در تاریخ مدیریت آب، به ویژه در دوران معاصر، به درک درست و عمیق از مسئله امروز آب کمک میکند. صاحب نظران یکی از نقاط روشن مدیریت آب  ایران در دوران معاصر را تهیه و انتشار فصلنامه آب و توسعه می دانند. در یک همکاری مشترک بین <b>اندیشکده تدبیر آب</b> و<b> خانه آب ایران</b> تاریخ شفاهی این نشریه مستند شده است. از این رو فیلم مستندی مشتمل بر مصاحبه با تعدادی از اعضای هیات تحریریه فصلنامه آب و توسعه و نیز مدیران و کارشناسان حوزه آب تهیه گردیده است.
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div><img src="/sites/default/files/55555.png"></div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div><img src="/sites/all/themes/waterhouse/images/andishkade.png" style="margin-top:15px"></div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="col-md-6">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/films/abotose.mp4" type="video/mp4">
						<source src="/sites/default/files/films/abotose.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
				</div>
			</div>
		</div>
	</section>
	<section class="row conf">
		<h3 class="h3" style="text-align:center"><img src="/sites/all/themes/waterhouse/images/meysam/image/lable/mo.png"/></h3>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/%D8%AC%D9%87%D8%A7%D9%86%DB%8C" target="_blank">
				<div class="img1 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با آقای جهانی</p>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/%D8%A7%D9%86%D9%88%D8%B4_%D8%A7%D8%B3%D9%81%D9%86%D8%AF%DB%8C%D8%A7%D8%B1%DB%8C" target="_blank">
				<div class="img2 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با آقای نوری اسفندیاری</p>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/video/tag/437" target="_blank">
				<div class="img6 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با آقای کارآموز</p>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/%D8%A2%D8%B1%DB%8C%D8%A7%D9%86" target="_blank">
				<div class="img5 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با خانم آریان</p>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/%D8%B1%D8%A6%DB%8C%D8%B3%DB%8C" target="_blank">
				<div class="img4 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با آقای رئیسی</p>
		</div>
		<div class="col-md-2 col-sm-6 col-xs-6">
			<a class="main" href="http://waterhouse.ir/%D8%B2%D9%87%D8%B1%D8%A7%DB%8C%DB%8C" target="_blank">
				<div class="img3 pre">
					<div class="over">
						<p>مشاهده مصاحبه ها</p>
					</div>
				</div>
			</a>
			<p class="p">مصاحبه با خانم زهرایی</p>
		</div>
	</section>
	<section id="poster">
		<div class="container">
			<div class="col-md-6">
				 <img class="img" src="sites/default/files/styles/large/public/abotose.jpg?itok=Kqi4aBPr"/>
			</div>
			<div class="col-md-6 tex">
				<p>به منظور گفتگو، هم‌اندیشی و تبادل نظر در خصوص نگاه حاکم بر انتشار فصلنامه آب و توسعه، نشستی با حضور اعضای هیات تحریریه، کارشناسان و صاحب‌نظران برنامه‌ریزی شده است. این نشست درآمدی بر ایجاد جریانی نو و هوای تازه فرهنگی و اندیشه ورزی درباره آب و توسعه و فراخوان پویشی با عنوان <b>"پویش روشنی فرهنگ و اندیشه در کارنامه آب"</b> است.</p>
				<p class="icon ic1">دوشنبه 29 مهر 98</p>
				<p class="icon ic2">ساعت 16 الی 19</p>
				<p class="icon ic3">خانه اندیشمندان علوم انسانی</p>
			</div>
			<div class="col-md-12">
				<div class="col-md-4">
					<figure class="image">
					    <img src="/sites/default/files/%D9%86%D8%B4%D8%B3%D8%AA%20%D9%86%D8%B4%D8%B1%DB%8C%D9%87%20%D8%A2%D8%A8%20%D9%88%20%D8%AA%D9%88%D8%B3%D8%B9%D9%87%20%281%29.jpg" />
					    <figcaption>
					        <a href="http://waterhouse.ir/gallery/2831" target="_blank">گالری تصاویر</a>
					    </figcaption>
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="image">
					    <img src="/sites/default/files/%D9%86%D8%B4%D8%B3%D8%AA%20%D9%86%D8%B4%D8%B1%DB%8C%D9%87%20%D8%A2%D8%A8%20%D9%88%20%D8%AA%D9%88%D8%B3%D8%B9%D9%87%20%2829%29.jpg" />
					    <figcaption>
					        <a href="http://waterhouse.ir/gallery/2831" target="_blank">گالری تصاویر</a>
					    </figcaption>
					</figure>
				</div>
				<div class="col-md-4">
					<figure class="image">
					    <img src="/sites/default/files/%D9%86%D8%B4%D8%B3%D8%AA%20%D9%86%D8%B4%D8%B1%DB%8C%D9%87%20%D8%A2%D8%A8%20%D9%88%20%D8%AA%D9%88%D8%B3%D8%B9%D9%87%20%2839%29.jpg" />
					    <figcaption>
					        <a href="http://waterhouse.ir/gallery/2831" target="_blank">گالری تصاویر</a>
					    </figcaption>
					</figure>
				</div>
			</div>
		</div>
	</section>
    <section id="article-base" style="background:#e1effb" >   
		<h3 class="h3" style="padding-top:50px;text-align:center;"><img src="/sites/all/themes/waterhouse/images/meysam/image/lable/nash.png"/></h3>
        <div class="naccs container" style="direction:rtl">
            <div class="grid">
                <div class="tab tab--1-of-3">
                    <div class="menu">
	    				<div class="active"><span class="light"></span>راهنمایی<span></span></div>
	    				<div><span class="light"></span>نشریه 1 پاییز 1372<span></span></div>
	    				<div><span class="light"></span><span>نشریه 2 زمستان 1372</span></div>
	    				<div class="clc"><span class="light"></span><span>نشریه 3 بهار 1373</span></div>
	    				<div><span class="light"></span><span>نشریه 4 تیرماه 1373 <small>(ویژه آب و جمعیت)</small></span></div>
	    				<div><span class="light"></span><span>نشریه 5 تابستان 1373</span></div>
	    				<div><span class="light"></span><span>نشریه 6 پاییز 1373</span></div>
	    				<div><span class="light"></span><span>نشریه 7 زمستان 1373</span></div>
	    				<div><span class="light"></span><span>نشریه 8 بهار 1374</span></div>
	    				<div><span class="light"></span><span>نشریه 9 تابستان 1374</span></div>
	    				<div><span class="light"></span><span>نشریه 10 پاییز 1374</span></div>
	    				<div><span class="light"></span><span>نشریه 11 زمستان 1374</span></div>
	    				<div><span class="light"></span><span>نشریه 12 بهار 1375</span></div>
	    				<div><span class="light"></span><span>نشریه 13 تابستان 1375<small>(ویژه سد و محیط زیست) </small></span></div>
	    				<div><span class="light"></span><span>نشریه 14 پاییز 1375 <small>(ویژه آب و اقتصاد 1)</small></span></div>
	    				<div><span class="light"></span><span>نشریه 15 زمستان 1375 <small>(ویژه آب و اقتصاد 2)</small></span></div>
	    				<div><span class="light"></span><span>نشریه 16 بهار 1376</span></div>
	    				<div><span class="light"></span><span>نشریه 17 دوره جدید- بهار 1377</span></div>
	    				<div><span class="light"></span><span>نشریه 18 و 19 تابستان و پاییز 1377</span></div>
	    				<div><span class="light"></span><span>نشریه 20 و 21 پاییز 1378</span></div>
                    </div>
                </div>
                <div class="tab tab--2-of-3">
                    <ul class="nacc">
                        <li class="active">
							<div class="alert alert-info">
								<strong>
									راهنمایی	!
								</strong>
								<br/>
								    <span>
										برای مشاهده نشریات از ردیف اول شماره نشریه مورد نظر را انتخاب کرده و سپس اطلاعات آن را مشاهده نمایید
									</span>
								 </div>
							 <div>
							<div class="alert alert-info">
								<strong>
									نکته	!
								</strong>
								<br/>
								    <span>
										تنها کسانی که عضو سایت هستند امکان مشاهده فایل نشریات را دارند
									</span>
								 </div>
							 <div>
                        </li>
                        <li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld1.jpg"/></div>
							<?php print views_embed_view('journals','block', 1538); ?>
                        </li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld2.jpg"/></div>
							<?php print views_embed_view('journals','block', 1539); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld3.jpg"/></div>
							<?php print views_embed_view('journals','block', 1541); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld4.jpg"/></div>
							<?php print views_embed_view('journals','block', 1545); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld5.jpg"/></div>
							<?php print views_embed_view('journals','block', 1543); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld6.jpg"/></div>
							<?php print views_embed_view('journals','block', 1546); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld7.jpg"/></div>
							<?php print views_embed_view('journals','block', 1547); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld8.jpg"/></div>
							<?php print views_embed_view('journals','block', 1549); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld9.jpg"/></div>
							<?php print views_embed_view('journals','block', 1550); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld10.jpg"/></div>
							<?php print views_embed_view('journals','block', 1552); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld11.jpg"/></div>
							<?php print views_embed_view('journals','block', 1553); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld12.jpg"/></div>
							<?php print views_embed_view('journals','block', 1554); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld13.jpg"/></div>
							<?php print views_embed_view('journals','block', 1555); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld14.jpg"/></div>
							<?php print views_embed_view('journals','block', 1556); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld15.jpg"/></div>
							<?php print views_embed_view('journals','block', 1557); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld16.jpg"/></div>
							<?php print views_embed_view('journals','block', 1558); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld17.jpg"/></div>
							<?php print views_embed_view('journals','block', 1559); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld18.jpg"/></div>
							<?php print views_embed_view('journals','block', 1560); ?>
						</li>
						<li>
							<div class="rujeld"><img src="/sites/all/themes/waterhouse/images/meysam/image/1469/rujeld19.jpg"/></div>
							<?php print views_embed_view('journals','block', 1561); ?>
						</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	<style>
		.rujeld{
			text-align:-webkit-center;
			margin-bottom:10px
		}
		.rujeld img{
			height:400px;
			box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
			border-radius: 15px;
		}
		.conf .col-md-2{
			text-align:-webkit-center;
			float:right;
		}
        .col-md-2 .main .pre{
        	height: 200px;
        	width: 200px;
			border-radius:50%;
        }
        @media(max-width:768px){
			.col-md-2 .main .pre{
				height: 150px;
				width: 150px;
			}
        }
		.col-md-2 .main .img1{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/jahani.png");
		}
		.col-md-2 .main .img3{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/zahrai.png");
		}
		.col-md-2 .main .img6{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/kar.png");
			background-size: cover;
		}
		.col-md-2 .main .img4{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/reyisi.png");
		}
		.col-md-2 .main .img5{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/arian.png");
		}
		.col-md-2 .main .img2{
			background:url("/sites/all/themes/waterhouse/images/meysam/background/esfandiari.png");
			background-size: 160%;
		}
		.col-md-2 .main .img1, .col-md-2 .main .img3, .col-md-2 .main .img4, .col-md-2 .main .img5{
			background-size: cover;
			background-position: center;
		}
		.over{
			background: rgba(0,0,0,0.3);
			padding: 80px 0 0;
			transition: all .4s ease-in-out;
			height: 100%;
			color: white;
			border-radius: 50%;
			opacity: 0;
			font-weight: bold;
			font-size: 20px;
		}
		.col-md-2:hover .over{
			opacity:1;
			animation:.4s ease-in-out forwards shadow;
		}
        .conf .p{
            font-size: 16px;
            font-weight: 500;
            margin: 10px 0;
            color: rgba(0,0,0,0.7);
        }
	</style>
   
    <script>
        /*----------------------------- Tab -------------------------------- */
	    $(document).on("click", ".naccs .menu div", function() {
	    	var numberIndex = $(this).index();
	    	if (!$(this).is("active")) {
	    		$(".naccs .menu div").removeClass("active");
	    		$(".naccs ul li").removeClass("active");
	    		$(this).addClass("active");
	    		$(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
	    	var listItemHeight = $(".naccs ul")
	    		.find("li:eq(" + numberIndex + ")")
	    		.innerHeight();
	    		$(".naccs ul").height(listItemHeight + "px");
	    	}
		});
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>