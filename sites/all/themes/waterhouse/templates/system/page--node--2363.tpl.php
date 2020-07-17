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

	<section id="slider">
		<img src="/sites/all/themes/waterhouse/images/meysam/image/allocat/poo.jpg">
	</section>
	<section id="icon">
		<div class="row">
			<div class="navv">
			  <ul>
			    <li>
			      <a class="scroll" href="#intro">معرفی</a>
			    </li>
			    <li>
			      <a class="scroll" href="#spe">مشخصات</a>
			    </li>
			    <li>
			      <a class="scroll" href="#timing">زمانبندی</a>
			    </li>
			    <li>
			      <a class="scroll" href="#sign">ثبت نام</a>
			    </li>
			    <li>
			      <a target="_blank" href="node/2499">مصاحبه ها</a>
			    </li>
			    <li>
			      <a class="scroll" href="#vote">صدای شما</a>
			    </li>
			  </ul>
			</div>
		</div>
	</section>
	<section id="intro">
		<div class="over">
			<h3 id="h3">معرفی </h3>
			<div class="container">
				فرایند تخصیص آب به عنوان یک فرایند چند بخشی و حاکمیتی سالیان سال است که در ایران و جهان مورد مناقشه بوده و البته رویکردهای آن با لحاظ تجربیات رو به رشد و توسعه است.
				<br/>
				بر اساس ماده 21 قانون توزيع عادلانه آب، "تخصيص و اجازه بهره‌برداري از منابع عمومي آب براي مصارف شرب، كشاورزي، صنعت و ساير موارد منحصرا با وزارت نيرو است". در راستاي عمل به ماده 21 قانون توزیع عادلانه آب و از طرف ديگر همزمان با افزايش و رشد تقاضا براي منابع آبي محدود كشور، برنامه عملياتي و اجرايي استقرار يك نظام تخصيص آب از اواخر برنامه پنج‌ساله دوم و اوايل برنامه پنج‌ساله سوم توسعه در واحد برنامه‌ريزي امور آب وزارت نيرو آغاز شد. 
				<br>
				<div id="demo" class="collapse">
					پيش‌نويس اوليه دستورالعمل اجرايي نظام تخصيص آب جهت عملياتي نمودن آن در سال 1378 توسط دفتر برنامه‌ريزي آب وزارت نيرو تهيه و در تاريخ 1378/4/15 با امضاء معاونت وقت امور آب وزارت نيرو به شركت‌هاي آب منطقه‌اي ابلاغ شد. پس از يك دوره اجراي آزمايشي اين دستورالعمل، از نيمه دوم سال 1380 و به‌ دستور معاون وقت امور آب وزارت نيرو دستورالعمل مورد بازنگري قرار گرفت و پس از انجام هماهنگي و تعامل لازم با شركت‌هاي آب منطقه‌اي ويرايش جديد دستورالعمل در تاريخ 1382/3/10 توسط معاون وقت امور آب وزارت نيرو به شركت‌هاي آب منطقه‌اي ابلاغ گردید.
					<br/>
					اكنون با گذشت نزديك به دو دهه از شروع عملياتي نمودن فرآيند تخصيص آب در مديريت بخش آب كشور و از طرف ديگر افزايش روزافزون تقاضا براي منابع آبي محدود، نياز به ارتقاء و بهبود اين فرآيند بر اساس تجارب حاصل از اين دو دهه و همچنين بر مبناي تجارب جهاني، بيش از پيش احساس مي‌گردد.
					<br/>
					در این راستا دفتر برنامه ریزی کلان آب و آبفا به عنوان متولی تهیه موافقتنامه های تخصیص آب با همکاری مرکز امور اجتماعی وزارت نیرو، در صدد است با برگزاری همایش های متوالی و هماهنگ، هم اندیشی و استفاده از تجارب ذی خردان و بخشی از ذی مدخلان را در دستور کار قرار دهد. همایش پیش رو به عنوان اولین رویداد در این زمینه مد نظر قرار گرفته است.
					<br/>
					<span style="font-weight: bold;">مخاطبان همایش:</span><br/>
					مخاطبان این همایش کلیه ذی مدخلان بحث تخصیص آب خواهند بود. علاوه بر آن به جهت رشد رویکردهای نوین جهانی، اساتید دانشگاه و دانشجویان در زمینه های تخصصی مدیریت منابع آب را نیز می توان در این گروه قرار داد. بخشی از مخاطبان را می توان به صورت زیر دسته بندی نمود:
					<ul>
					<li>1. 	شرکت مادر تخصصی مدیریت منابع آب</li>
					<li>2. 	شرکت های آب منطقه ای استان</li>
					<li>3. 	سازمان حفاظت محیط زیست</li>
					<li>4. 	مرکز پژوهش های مجلس شورای اسلامی</li>
					<li>5. 	شرکت مهندسی آب و فاضلاب کشور</li>
					<li>6. 	وزارت جهاد کشاورزی</li>
					<li>7.  دانشگاهیان</li>
					<li>8.	رسانه ها</li>
					<li>9. ...</li>
					</ul>
				</div>
				<p style="text-align:center;cursor:pointer;color:deepskyblue" href="#demo" class="collapsed" data-toggle="collapse">مشاهده بیشتر</p>
				<p class="show">﹀</p>
			</div>
		</div>
	</section>
	<section id="spe">
		<h3 id="h3">مشخصات </h3>
		<div class="container">
			<div class="col-lg-3">
				<div class="zaman">
					<h5 id="h3"class="time">زمان برگزاری</h5>
					<div   class="date">
						<p class="day">سه شنبه</p>
						<p class="month">5 <span>شهریور ماه</span></p>
						<p class="year"> 1398 </p>
					</div>
				</div>
				<h5 id="h3" class="locat">مکان برگزاری
				</h5>
				<div>
					<img  src="/sites/all/themes/waterhouse/images/meysam/image/allocat/pa.jpg" alt="پژوهشگاه نیرو">
					<div class="text">پژوهشگاه نیرو
						<br/>
						 تهران، شهرک غرب، انتهای بلوار شهید دادمان
						 <br/>
						 بعد از اتوبان یادگار امام
					</div>
				</div>
					<p style="margin-top:20px;">
						<a target="_blank" href="https://goo.gl/maps/WURTBG883D3YscGR9">
							جهت مشاهده آدرس روی نقشه، کلیک کنید
						</a>
					</p>
			</div>
			<div class="col-lg-9 present">
				<h5 id="h3"class="pre">سخنرانان</h5>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div  class="sokhan">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/allocat/fazeli.jfif"/>
						<p>دکتر محمد فاضلی</p>
						<p>سرپرست مرکز امور اجتماعی <br/>منابع آب و انرژی وزارت نیرو</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="sokhan">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/allocat/mrid.jpg"/>
						<p>دکتر سعید مرید</p>
						<p>استاد دانشگاه تربیت مدرس</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="sokhan">
						<img src="http://waterhouse.ir/sites/default/files/styles/200_200/public/pictures/picture-108-1479912399.jpg?itok=T6SiRGne"/>
						<p>دکتر صدیقه ترابی</p>
						<p>مدیرکل دفتر برنامه ریزی کلان <br/>آب و آبفای وزارت نیرو</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="sokhan">
						<img src="/sites/all/themes/waterhouse/images/meysam/image/allocat/abas.jpg"/>
						<p>عباسقلی جهانی</p>
						<p>مدیرکل اسبق دفتر برنامه‌ريزی آب وزارت نیرو</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="sokhan">
						<img src="/sites/all/themes/waterhouse/images/avatar_user.png"/>
						<p>نام سخنران</p>
						<p>سمت</p>
					</div>
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="sokhan">
						<img src="/sites/all/themes/waterhouse/images/avatar_user.png"/>
						<p>نام سخنران</p>
						<p>سمت</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="timing">
		<h3 id="h3">زمانبندی </h3>
        <div class="tab-section tab1-section active">
			<div class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon two"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>پذیرش</h4>
                        <span class="name">8:00 - 8:30</span>
                    </div>
                    <div class="left">
                        <h3 class="title">پذیرش</h3>
                        <p class="description">--</p>
                    </div>
			</div>
			<div class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon one"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>مراسم افتتاحیه</h4>
			        <span class="name">8:30 - 8:45</span>
			    </div>
			    <div class="left">
			        <h3 class="title">مراسم افتتاحیه</h3>
			        <p class="description">--</p>
			    </div>
			</div>
			<div  class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon three"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>سخنرانی</h4>
                        <span class="name">8:45 - 9:10</span>
                    </div>
                    <div class="left">
                        <h3 class="title">دکتر صدیقه ترابی</h3>
                        <p class="description">تاریخچه تخصیص آب و تجارب جهانی در رویکردهای نوین</p>
                    </div>
			</div>
			<div  class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon four"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>سخنرانی</h4>
			        <span class="name">9:15 - 9:35</span>
			    </div>
			    <div class="left">
			        <h3 class="title">دکتر سعید مرید</h3>
			        <p class="description">حل مناقشات در تخصیص آب</p>
			    </div>
			</div>
			<div  class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon five"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>سخنرانی</h4>
                        <span class="name">9:35 - 9:55</span>
                    </div>
                    <div class="left">
                        <h3 class="title">دکتر محمد فاضلی</h3>
                        <p class="description">جنبه های اجتماعی تخصیص آب</p>
                    </div>
			</div>
			<div  class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon six"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>پذیرایی</h4>
			        <span class="name">9:55 - 10:20</span>
			    </div>
                <div class="left">
                    <h3 class="title">پذیرایی</h3>
                    <p class="description">صرف میان وعده</p>
                </div>
			</div>
			<div  class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon plus" style="background-size:cover"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>سخنرانی</h4>
                        <span class="name">10:20 - 10:40</span>
                    </div>
                    <div class="left">
                        <h3 class="title">عباسقلی جهانی</h3>
                        <p class="description">آسیب شناسی نظام تخصيص آب در کشور</p>
                    </div>
			</div>
			<div  class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon seven"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>سخنرانی</h4>
			        <span class="name">10:45 - 11:10</span>
			    </div>
			    <div class="left">
			        <h3 class="title">دکتر صدیقه ترابی</h3>
			        <p class="description">نظامنامه تخصیص آب (نقاط قوت و ضعف و چالش ها)</p>
			    </div>
			</div>
			<div  class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon eight"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>تریبون آزاد</h4>
			        <span class="name">11:15 - 12:30</span>
			    </div>
			    <div class="left">
			        <h3 class="title">تریبون آزاد</h3>
			        <p class="description">ارائه ده نظر منتخب</p>
			    </div>
			</div>
			<div  class="row">
                 <div class="right">
                     <div class="icon-dot">
                         <div class="icon nine"></div>
                         <span class="dot"></span>
                     </div>
                     <h4>پذیرایی</h4>
                     <span class="name">12:30 - 14:00</span>
                 </div>
                 <div class="left">
                     <h3 class="title">پذیرایی</h3>
                     <p class="description">صرف ناهار و نماز</p>
                 </div>
			</div>
			<div  class="row">
                   <div class="right">
                       <div class="icon-dot">
                           <div class="icon ten"></div>
                           <span class="dot"></span>
                       </div>
                       <h4>سخنرانی نمایندگان شرکتهای آب منطقه ای  <br/>و شرکت مدیریت منابع آب ایران</h4>
                       <span class="name">14:00 - 15:15</span>
                   </div>
                   <div class="left">
                       <h3 class="title">چالش های مربوط به سه زمینه:</h3>
                       <p class="description">
					-	ارتباط با آب بران جزء
					<br/>
					-	ارتباط با دستگاه های استانی و نمایندگان مجلس
					<br/>
					-	پیاده سازی و پایش تخصیص
					</p>
                   </div>
			</div>
			<div  class="row">
                    <div class="right">
                        <div class="icon-dot">
                            <div class="icon eleven"></div>
                            <span class="dot"></span>
                        </div>
                        <h4>پذیرایی</h4>
                        <span class="name">15:15 - 15:40</span>
                    </div>
                    <div class="left">
                        <h3 class="title">پذیرایی</h3>
                        <p class="description">صرف میان وعده</p>
                    </div>
			</div>
			<div  class="row">
			    <div class="right">
			        <div class="icon-dot">
			            <div class="icon twe"></div>
			            <span class="dot"></span>
			        </div>
			        <h4>پنل پرسش و پاسخ</h4>
			        <span class="name">15:45 - 16:30</span>
			    </div>
			    <div class="left">
			        <h3 class="title">پرسش و پاسخ</h3>
			        <p class="description">--</p>
			    </div>
			</div>
        </div>
	</section>
	<section id="sign">
		<div>
			<a>ثبت نام  در نشست 
				<span>(به پایان رسید)<span>
			</a>
		</div>
	</section>
	<section id="vote">
		<div class="container">
			<div class="col-lg-3">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/allocat/vo.png" alt="نظرات در مورد تخصیص آب"/>
				<h5>صدای شما</h5>
				<h5>"نقاط قوت و ضعف<br/><br/> تخصیص آب از منظر حکمرانی"</h5>
				<p style="text-align: justify;font-size:14px">تجارب کارشناسان، متخصصان، بهره برداران و تشکل های مردم نهاد از ارتباط با نظام تخصیص آب که هر کدام از دریچه متفاوتی به آن می نگرند و با آن برخورد دارند، کمک خواهد کرد 
					تا تصویر جامعی از این نظام در کشور شکل گیرد.
					<br/>
					از این رو از همه کسانی که به نحوی حرفی درباره نظام تخصيص آب برای گفتن دارند دعوت می شود تا نظرات خود را با ما در میان بگذارند. از نقدها و نواقص، قوت ها و تجربه ها و
					مسائل مختلف اگر صحبتی دارید در قالب نوشتار کوتاه 500 کلمه ای برای ما ارسال فرمایید.
				</p>
				<p style="margin-top:50px">- 10 نظر منتخب قادر به ارائه شفاهی خواهند بود
					و بقیه نظرات در صورت تایید در در همین سایت قابل دسترس خواهند بود
				</p>
				</div>
			<div class="col-lg-9">
			<h4>فرم ارسال نظرات شما</h4>
				<?php $block = module_invoke('webform', 'block_view', 'client-block-2414'); print render($block['content']); ?>
			</div>
		</div>
	</section>
	<style>
		.navv {
		  max-width: 960px;
		  mask-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #ffffff 25%, #ffffff 75%, rgba(255, 255, 255, 0) 100%);
		  margin: 0 auto;
		  padding: 60px 0;
		}
	
		.navv ul {
		  text-align: center;
		  min-height:85px;
		  background: #0a84ad;
		  box-shadow: 0 0 25px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
		}
	
		.navv ul li {
		  display: inline-block;
		}
	
		.navv ul li a {
		  padding: 25px;
		  text-transform:uppercase;
		  color: white;
		  font-size: 18px;
		  text-decoration: none;
		  display: block;
		}
	
		.navv ul li a:hover {
		  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1), inset 0 0 1px rgba(255, 255, 255, 0.6);
		  background: rgba(255, 255, 255, 0.1);
		  color: rgba(0, 35, 122, 0.7);
		}
		@media(max-width:768px){
			.navv ul li{
				width:100%;
			}
		}
	</style>
	<script>
		 $(".scroll").click(function(e) {
			e.preventDefault();
			$('html, body').animate({
				scrollTop: ($($(this).attr('href')).offset().top)
			}, 700);
		});
		
    	AOS.init({
    	    offset: 0,
    	    duration: 700,
    	    easing: 'ease-in-sine',
    	    delay: 500,
            once:true,
        });
	</script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>