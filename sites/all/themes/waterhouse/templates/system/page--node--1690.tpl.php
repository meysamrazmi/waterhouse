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
	<section id="header">
		<div class="header">
			<div>
				<h1>رویداد ملی سازگاری با کم آبی</h1>
			</div>
		</div>
	</section>
	<section id="main">
		<div class="menu">
		    <nav>
		        <div class="nav-wsa">
		            <ul>
		                <li><a href="http://waterhouse.ir/wsa">صفحه اصلی</a></li>
		                <li>
		                    <a href="http://waterhouse.ir/wsa/document">کارگروه ملی سازگاری با کم آبی<span class="arrow-down"></span></a>
		                    <ul class="dropdown">
		                        <li><a href="http://waterhouse.ir/wsa/document#two">مصوبات کارگروه ملی</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/document#ziro">گاه شمار</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/document#three">مصوبات کمیته تخصصی سازگاری با کم آبی</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/document#one">مستندات</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/document#map">کارگروه های استانی</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/document#five">گزارش های ویژه</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a>اطلاعات رویداد<span class="arrow-down"></span></a>
		                    <ul class="dropdown">
		                        <li><a href="http://waterhouse.ir/wsa/information">مقدمه</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/information">زمان و مکان برگزاری</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/information">اهداف برگزاری</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/information">گروه های هدف اصلی</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/information">اجزای رویداد</a></li>
		                    </ul>
		                </li>
		                <li>
		                    <a>ارسال تجارب<span class="arrow-down"></span></a>
		                    <ul class="dropdown">
		                        <li><a href="http://waterhouse.ir/greenspace">شرب، فضای سبز و محیط زیست</a></li>
		                        <li><a href="http://waterhouse.ir/tillag">کشاورزی</a></li>
		                        <li><a href="http://waterhouse.ir/industry">صنعت، معدن و انرژی</a></li>
		                        <li><a href="http://waterhouse.ir/anomalistic">دانش بومی سازگاری با کم‌آبی</a></li>
		                        <li><a href="http://waterhouse.ir/state">تجارب کارگروه های استانی</a></li>
		                    </ul>
						</li>
		                <li><a href="http://pipeline.waterhouse.ir/">نمایشگاه مجازی</a></li>
		                <li>
							<a href="http://waterhouse.ir/wsa/workshop">کارگاه های آموزشی<span class="arrow-down"></span></a>
		                    <ul class="dropdown">
		                        <li><a href="http://waterhouse.ir/wsa/workshop">کارگاه یک</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/workshop">کارگاه دو</a></li>
		                        <li><a href="http://waterhouse.ir/wsa/workshop">کارگاه سه</a></li>
		                    </ul>
						</li>
		                <li>
							<a href="http://hamayesh.coe.ac.ir/safa/fa/" rel="nofollow" target="_blank">جشنواره</a>
						</li>
		                <li>
		                    <a>ثبت نام<span class="arrow-down"></span></a>
		                    <ul class="dropdown">
		                        <li><a>ثبت نام گروهی</a></li>
		                        <li><a>ثبت نام فردی</a></li>
		                        <li><a>نمایشگاه مجازی</a></li>
		                        <li><a>غرفه نمایشگاهی</a></li>
		                    </ul>
						</li>
		                <li><a href="http://waterhouse.ir/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1">اخبار</a></li>
		                <li><a href="http://waterhouse.ir/wsa/edu">پایگاه دانش</a></li>
		                <li><a href="http://waterhouse.ir/wsa/contact">تماس با ما</a></li>
		            </ul>
		        </div>
		        <div class="nav-bg-wsa">
		            <div class="navbar-wsa"> <span></span> <span></span> <span></span> </div>
		            <a href="" class="title-mobile">رویداد ملی سازگاری با کم آبی</a>
		        </div>
		    </nav>
		    <div class='content'>
		    </div>
		</div>
    </section>
	<section id="font">	
		<div>
			<img id="daftar" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/text2.png" alt="هکس نوشته رویداد"/>
		</div>
	</section>
	<section id="slideshow">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <div class="carousel-inner">
		        <div class="item active">
		            <img src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/3.jpg" alt="اسلاید یک"/>
		        </div>
		        <div class="item">
		            <img src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/1.jpg" alt="اسلاید دو"/>
		        </div>
		        <div class="item">
		            <img src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/2.jpg" alt="اسلاید سه"/>
		        </div>
		        <div class="item">
		            <img src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/4.jpg" alt="اسلاید چهار"/>
		        </div>
		    </div>
			<a class="left carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<section class="container" id="main-content">
		<div class="row">
			<div class="col-md-3 content-right"id="log">
				<div class="titr">
					<h4>ورود کاربر</h4>
				</div>
				<div id="login">
					<div><?php $block = module_invoke('logintoboggan', 'block_view', 'logintoboggan_logged_in'); print render($block['content']); ?></div>
					<div><?php $block = module_invoke('user', 'block_view', 'login'); print render($block['content']); ?></div>
				</div>
				<div class="titr">
					<h4 id="peyvand">سیاستگذاری <span style="font-size:11px">(کارگروه ملی سازگاري با کم آبی)</span></h4>
				</div>
				<div class="logos">
					<a target="_blank" rel="nofollow" href="http://www.moe.gov.ir/"><img alt="وزارت نیرو" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/niro.png"/></a>
					<a target="_blank" rel="nofollow" href="http://www.mimt.gov.ir/"><img alt="وزارت صنعت معدن تجارب" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/sanat.png"/></a>
					<a target="_blank" rel="nofollow" href="https://www.moi.ir/"><img alt="وزارت کشور" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/keshvar.png"/></a>
					<a target="_blank" rel="nofollow" href="http://www.agri-jahad.ir/"><img alt="سازمان جهاد کشاورزی" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/jahad.png"/></a>
					<a target="_blank" rel="nofollow" href="https://doe.ir/Portal/Home/default.aspx"><img alt="سازمان محیط زیست" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/mohitzist.png"/></a>
					<a target="_blank" rel="nofollow" href="https://www.mporg.ir/home"><img alt="سازمان برنامه و بودجه" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/barnameh.png"/></a>
					<a target="_blank" rel="nofollow" href="http://www.irimo.ir/far/index.php"><img alt="سازمان هواشناسی" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/hava.png"/></a>
				</div>
				<div class="titr" style="margin-top:45px;">
					<h4>برنامه ریزی و اجرا</h4>
				</div>
				<div class="wlogo">
					<img src="/sites/default/files/55555.png"/>
					<p><a href="http://waterhouse.ir/">خانه آب ایران</a></p>
				</div>
				<div class="titr">
					<h4>حامیان </h4>
				</div>
				<div class="logos">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/naft.png" alt=" وزارت نفت"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/kaleh.png" alt="کاله"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/foolad.png" alt=" فولاد مبارکه سپاهان"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/maskan.png" alt=" بانک مسکن"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gostaresh.png" alt=" گسترش و نوسازی صنایع"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/nosazi.png" alt=" نوسازی صنایع معادن"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/otagh.png" alt=" اتاق بازرگانی صنایع معادن"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/otagh1.png" alt=" اتاق بازرگانی صنایع معادن"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/sanaye.png" alt=" صنایع کوچک"/>
				</div>
				<div class="titr">
					<h4>غرفه داران </h4>
				</div>
				<div class="logos">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/kaleh.png" alt="کاله"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/yekom.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/biston.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/park.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/ifa.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/abfa.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/manabe.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/bolornarin.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/bolanda.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/f-esf.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/shahrab.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/ab-hormoz.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/ab-tehran.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/b-esf.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/ab-esf.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/talayeh.jpeg"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/tose.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/zarand.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/a.png"/>
					<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/gorfe/hq.png"/>
				</div>
				<div class="titr">
					<h4 id="peyvand">آمار تجارب</h4>
				</div>
				<div class="amar">
				    <p class="bazdid">
				        <strong>299<small></small></strong>
				        <span>کشاورزی</span>
				    </p>
				    <p class="bazdid">
				        <strong>142<small></small></strong>
				        <span>صنعت، معدن و انرژی</span>
				    </p>
				    <p class="bazdid">
				        <strong>325<small></small></strong>
				        <span>شرب، فضای سبز و محیط زیست</span>
				    </p>
				    <p class="bazdid">
				        <strong>22<small></small></strong>
				        <span>دانش بومی سازگاري</span>
				    </p>
				</div>
				<div class="titr">
					<h4>اینفوگرافیک رویداد</h4>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/graph.jpg" alt="اینفوگرافیک رویداد"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/graph.jpg" download>
						دانلود اینفوگرافیک 
					</a>
				</div>
				<div class="hidden-sm hidden-xs">
					<div class="titr">
						<h4>پوستر جشنواره ملی آب</h4>
					</div>
					<div class="pooster">
						<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/j-ab.jpg" alt="پوستر رویداد ملی آب"/>
						<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/j-ab.jpg" download>
							دانلود پوستر
						</a>
					</div>
					<div class="pooster">
						<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/safir.jpg" alt="پوستر رویداد ملی آب"/>
						<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/safir.jpg" download>
							دانلود پوستر
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 content-center">
				<div class="titr">
					<h4>معرفی </h4>
				</div>
				<div class="intro">
					<p>به منظور تبادل اطلاعات در خصوص تجارب موفق سازگاری با کم آبی بین ارکان کارگروه ملی سازگاری با کم‌آبی با مجموعه‌های دولتی و خصوصی فعال در 3 حوزه " فضای سبز و آب و فاضلاب شهری و روستایی"، "صنعت، معدن و انرژی"و "کشاورزی" این نشست و نمایشگاه تخصصی به مدت سه روز در هفته اول تیر ماه برنامه ریزی شده است.</p>
					<video width="400" controls>
						<source src="sites/default/files/films/tizer-sazgari.mp4" type="video/mp4">
						<source src="sites/default/files/films/tizer-sazgari.mp4" type="video/ogg">
						Your browser does not support HTML5 video.
					</video>
					<video width="400" controls>
						<source src="sites/default/files/films/moarefi-sazgari.mp4" type="video/mp4">
						<source src="sites/default/files/films/moarefi-sazgari.mp4" type="video/ogg">
						Your browser does not support HTML5 video.
					</video>
				</div>
				<div id="Result"></div>
				<div class="titr">
					<h4>مشاهده تجارب و طرح های تصویب شده</h4>
				</div>
				<div class="state">
					<p>مقالات و طرح های رویداد ملی سازگاری با کم آبی، با امکان جستجوی پیشرفته براساس عنوان طرح، نام نویسنده، دسته بندی و ... را می توانید از طریق لینک زیر مشاهده نمایید</p>
					<div id="state" style="margin:75px 0;"> 
						<a href="node/2371" target="_blank"> مشاهده</a>
					</div>
				</div>
				<div class="titr">
					<h4>نمایشگاه مجازی </h4>
				</div>
				<div class="majazi">
					<div class="laptop" style="margin-bottom:15px">
						<div class="title">
						    <div>
								هدف "دیده شدن" است.دنیای مجازی پدیده ایست نوظهور و با توجه به قابلیت های عمیق و موثرآن چشم پوشی از آن در این عصر منجر به سبقت رقیبان در هر زمینه ای میگردد.با توجه به عرصه فعالیتی "خانه آب ایران" و به منظور تعامل بهتر تولیدکنندگان کشور با مخاطبان خاص خود اعم از مدیران و کارشناسان دولتی،مشاوران و مجریان فعال در حوزه آب کشور؛ فضایی نو در نظر گرفته شده است.نمایشگاه مجازی این امکان را در اختیار فعالان حوزه آب قرار میدهد که محصولات،توانمندیها و فعالیت های خود را به روز در معرض دید مخاطبان خود قرار دهند و باز خوردی بسیار بیشتر از میزان فعالیت های تبلیغاتی خود داشته باشند.
							</div>
						</div>
						<div class="img">
						    <img src="sites/all/themes/waterhouse/images/land/laptop.png"/>
						</div>
					</div>
					<a id="kelid" href="http://pipeline.waterhouse.ir/waterhouse" target="_blank" dideo-checked="true"> مشاهده نمونه </a>
				</div>
				<div class="titr">
					<h4>اعضای کارگروه ملی <span style="font-size:11px">(شورای سیاستگذاری)</span></h4>
				</div>
				<div id="one">
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/ardakanian.png"/>
							</div>
							<div class="title">
							    <div>دکتر رضا اردکانیان</div>
							</div>
							<div class="post">وزیر نیرو</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/rahmani.png"/>
							</div>
							<div class="title">
							    <div>دکتر رضا رحمانی</div>
							</div>
							<div class="post">وزیر صنعت، معدن و تجارت</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/hojati.png"/>
							</div>
							<div class="title">
							    <div>مهندس محمود حجتی</div>
							</div>
							<div class="post">وزیر کشاورزی</div>
						</div>
					</div>
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/rahmani_fazli.png"/>
							</div>
							<div class="title">
							    <div>دکتر عبدالرضا رحمانی فضلی</div>
							</div>
							<div class="post">وزیر کشور</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/noubakht.png"/>
							</div>
							<div class="title">
							    <div>دکتر محمدباقر نوبخت</div>
							</div>
							<div class="post">رئیس سازمان برنامه و بودجه</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/kalantari.png"/>
							</div>
							<div class="title">
							    <div>دکتر عیسی کلانتری</div>
							</div>
							<div class="post">رئیس سازمان حفاظت محیط زیست</div>
						</div>
					</div>
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/tajbakhsh.png"/>
							</div>
							<div class="title">
							    <div>دکتر سحر تاجبخش</div>
							</div>
							<div class="post">سرپرست سازمان هواشناسی کشور</div>
						</div>
					</div>
				</div>
				<div class="titr">
					<h4>دبیران رویداد </h4>
				</div>
				<div id="two">
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/zahrayi.png"/>
							</div>
							<div class="title">
							    <p style="padding-top:10px">دکتر بنفشه زهرایی</p>
								<div>دبیر علمی رویداد</div>
							</div>
							<div class="post">دبیر کارگروه ملی سازگاري با کم آبی و مدیرکل دفتر مدیریت مصرف و ارتقاء بهره وری آب و آبفا </div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/nourbakhsh.png"/>
							</div>
							<div class="title">
							    <p>مهندس آرمین نوربخش</p>
								<div>دبیر اجرایی رویداد</div>
							</div>
							<div class="post" style="padding-top:10px">مدیر خانه آب ایران</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/farzane.png"/>
							</div>
							<div class="title">
							    <p>دکتر محمد رضا فرزانه</p>
								<div>دبیر جشنواره ملی آب
								</div>
							</div>
							<div class="post">عضو هیئت علمی <br/>دانشکده محیط زیست کرج</div>
						</div>
					</div>
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/mohammadzade.png"/>
							</div>
							<div class="title">
							    <p>مهندس فتحعلی محمدزاده</p>
								<div>دبیر روز اول :
									<br/>
									صنعت و معدن
								</div>
							</div>
							<div class="post">معاون فنی سازمان صنایع کوچک و شهرک های  صنعتی ایران و مدیر شرکت شهرک های صنعتی</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/enayat.png"/>
							</div>
							<div class="title">
							    <p>مهندس محمد عنایت زاده</p>
								<div>دبیر روز اول :
									<br/>
									 بخش انرژی
								</div>
							</div>
							<div class="post" style="padding-top:10px">رئیس نظارت بر پروژه ها و طرح های وزارت نفت</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/saafrazi.png"/>
							</div>
							<div class="title">
							    <p>مهندس رضا سرافرازی</p>
								<div>دبیر روز دوم :
									<br/>
									کشاورزی
								</div>
							</div>
							<div class="post">مدیرکل دفتر امور آب و خاک <br/>وزارت جهاد کشاورزی</div>
						</div>
					</div>
					<div class="dabir">
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/seyyedzadeh.png"/>
							</div>
							<div class="title">
							    <p>مهندس علی سیدزاده</p>
								<div>دبیر روز سوم :
									<br/>
									بخش شرب
								</div>
							</div>
							<div class="post">مدیرکل دفتر مديريت مصرف و كاهش آب بدون درآمد شرکت مهندسی آب و فاضلاب کشور</div>
						</div>
						<div class="person">
							<div class="img">
							    <img src="/sites/all/themes/waterhouse/images/meysam/image/1690/afrad/mo.jpg"/>
							</div>
							<div class="title">
							    <p style="padding-top:10px">دکتر امیر مغانلو</p>
								<div>دبیر روز سوم :
									<br/>
									 بخش فضای سبز
								</div>
							</div>
							<div class="post">مدیرکل دفتر فنی و برنامه ریزی<br/> وزارت کشور</div>
						</div>
					</div>
				</div>
				<div class="titr">
					<h4>گالری فیلم ها و تصاویر </h4>
				</div>
				<div class="gallery">
					<div>
						<p class="one">گالری فیلم</p>
						<a href="" target="_blank">مشاهده</a>
					</div>
					<div>
						<p class="two">گالری تصاویر</p>
						<a href="" target="_blank">مشاهده</a>
					</div>
				</div>
				<div class="titr">
					<h4>محل برگزاری</h4>
				</div>
				<img class="myImg" class="niro" src="http://waterhouse.ir/sites/default/files/styles/841x400/public/field/image/node_1611.jpg?itok=6dKFts-B"/ alt="ساختمان وزارت نیرو">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3237.0664617132347!2d51.40919928525104!3d35.77374373250117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e065ef08fc9bd%3A0x2a9d7d02a13f7a9a!2z2YjYstin2LHYqiDZhtuM2LHZiA!5e0!3m2!1sfa!2s!4v1555155099617!5m2!1sfa!2s"
						 allowfullscreen>
					</iframe>
					<div class="info">
						<h5>آدرس محل برگزاری:</h5>
						<p> تهران، خيابان ولي عصر، ابتداي بزرگراه آيت الله هاشمي رفسنجاني (نيايش)، پلاك 4 - ساختمان وزارت نيرو </p>
						<a href="http://waterhouse.ir/sandika/place" target="_blank" dideo-checked="true"> اماکن ضروری در اطراف محل رویداد </a>
					</div>
				</div>
				<div class="titr">
					<h4>اخبار</h4>
				</div>
				<div class="news">
					<?php print views_embed_view('sample','page'); ?>
					<div class="more">
						<a href="http://waterhouse.ir/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1" target="_blank">بیشتر</a>
					</div>
				</div>
				<div class="titr">
					<h4>پایگاه دانش</h4>
				</div>
				<div class="news">
					<?php print views_embed_view('sample','page_2'); ?>
					<div class="more">
						<a href="http://waterhouse.ir/wsa/edu" target="_blank">بیشتر</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 content-left">
				<div class="titr">
					<h4>دسترسی سریع</h4>
				</div>
				<div class="links">
					<a href="http://waterhouse.ir/اخبار" title="اخبار و گزارشات">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/akhbar.jpg">
					</a>
					<a  title="مشاهده طرح ها و تجارب تصویب شده">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/mosha.jpg">
					</a>
					<a href="http://waterhouse.ir/wsa/sendguide" title="ارسال تجارب">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/t.png">
					</a>
					<a href="http://waterhouse.ir/wsa/guide" title="ارسال تجارب">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/t-k.png">
					</a>
					<a href="http://waterhouse.ir/startup" title="طرح های استارتاپی">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/startups.jpg">
					</a>
					<a href="http://waterhouse.ir/challenge" title="مسائل و چالش های صنعت">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/chalesh.jpg">
					</a>
				</div>
				<div class="titr">
					<h4>راه های ارتباطی</h4>
				</div>
				<div class="contact">
					<img src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/im-number.png">
				</div>
				<div class="titr">
					<h4>پوستر رویداد</h4>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/10.jpg" alt="پوستر رویداد ملی سازگاري با کم آبی"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/10.jpg" download>
						دانلود پوستر
					</a>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/mainpooster.jpg" alt="پوستر رویداد ملی سازگاري با کم آبی"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/mainpooster.jpg" download>
						دانلود پوستر
					</a>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster3.jpg" alt="پوستر روز اول رویداد ملی سازگاري با کم آبی"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster3.jpg" download>
						دانلود پوستر
					</a>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster1.jpg" alt="پوستر روز دوم رویداد ملی سازگاري با کم آبی"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster1.jpg" download>
						دانلود پوستر
					</a>
				</div>
				<div class="pooster">
					<img class="myImg" src="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster2.jpg" alt="پوستر روز سوم رویداد ملی سازگاري با کم آبی"/>
					<a href="/sites/all/themes/waterhouse/images/meysam/slideshow/1690/pooster2.jpg" download>
						دانلود پوستر
					</a>
				</div>
				<div id="myModal" class="modal hidden-sm hidden-xs">
				    <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
				    <img class="modal-content" id="img01">
				    <div id="caption"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="row" id="other-content">
		<div class="col-md-1"></div>
		<div class="col-md-2">
			<a href="http://waterhouse.ir/%D8%A7%D8%AE%D8%A8%D8%A7%D8%B1">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/1690/rss.png" alt="sign-in">
				<p>اخبار</p>
				<span> دریافت جدیدترین اخبار </span>
			</a>
		</div>
		<div class="col-md-2">
			<a href="http://waterhouse.ir/wsa/guide">
				<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/doc.png" alt="file">
				<p>ارائه تجارب</p>
				<span>برای ارسال کلیک کنید</span>
			</a>
		</div>
		<div class="col-md-2">
			<a href="#kelid">
				<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/event.png" alt="data">
				<p>افراد کلیدی</p>
				<span>داوران، سخنرانان، مدعوین و..</span>
			</a>
		</div>
		<div class="col-md-2">
			<a href="http://waterhouse.ir/%D9%85%D8%B5%D8%A7%D8%AD%D8%A8%D9%87">
				<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/media.png" alt="images">
				<p>مصاحبه ها</p>
				<span>فیلم ها، عکس ها، مصاحبه ها و...</span>
			</a>
		</div>
		<div class="col-md-2" data-toggle="collapse" data-target="#demo">
			<a style="cursor:pointer">
				<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/subject.png" alt="contact-us">
				<p>پیوند ها</p>
				<span>لینک برگزار کنندگان</span>
			</a>
			<div id="demo" class="collapse">
				<table class="table">
					<tr>
						<td class="th">نام سازمان</td>
						<td class="th">لینک</td>
					</tr>
					<tr>
						<td>وزارت نیرو</td>
						<td><a href="http://www.moe.gov.ir/" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>سازمان برنامه و بودجه</td>
						<td><a href="https://www.mporg.ir/home" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>سازمان هواشناسی</td>
						<td><a href="http://www.irimo.ir/far/index.php" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>سازمان حفاظت از محیط زیست</td>
						<td><a href="https://doe.ir/Portal/Home/default.aspx" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>وزارت کشور</td>
						<td><a href="https://www.moi.ir/" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>وزارت صنعت معدن و تجارب</td>
						<td><a href="http://www.mimt.gov.ir/" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
					<tr>
						<td>وزارت جهاد کشاورزی</td>
						<td><a href="http://www.agri-jahad.ir/" rel="nofollow" target="_blank">بیشتر</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-1"></div>
	</section>
	<div class="footer">
		تمامی حقوق مادی و معنوی برای خانه آب ایران محفوظ است.
	</div>
	<script>
		//mobile-mode
        $('.navbar-wsa').click(function () {
            $('.nav-wsa').toggleClass('visible');
        });
		//sticky navbar
		//show img
		var modal = document.getElementById('myModal');
		var img = $('.myImg');
		var modalImg = $("#img01");
		var captionText = document.getElementById("caption");
		$('.myImg').click(function(){
		    modal.style.display = "block";
		    var newSrc = this.src;
		    modalImg.attr('src', newSrc);
		    captionText.innerHTML = this.alt;
		});
		var span = document.getElementsByClassName("close")[0];
		span.onclick = function() {
		  modal.style.display = "none";
		}
	</script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
