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
		<li to-id="review"><span>سفر در یک نگاه</span></li>
		<li to-id="moarefi"><span>معرفی</span></li>
		<li to-id="roads"><span>مقاصد علمی و سیاحتی</span></li>
		<li to-id="sad-info"><span>شناسنامه سد</span></li>
		<li to-id="timeline"><span>زمانبندی برنامه</span></li>
		<li to-id="rec"><span>لوازم ضروری و پیشنهادی</span></li>
		<li to-id="show-poster"><span>نمایش پوستر</span></li>
		<li to-id="sabt"><span>ثبت نام</span></li>
		<li to-id="we"><span>تیم برنامه ریزی</span></li> 
		<li to-id="pish"><span>سفرهای پیشین</span></li>
	</ul>
	<section id="image">
		<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/banner.png" width="100%" alt="سد امیر کبیر" title="سد امیر کبیر"/>
	</section>
	<section id="review">
		<div class="container">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/time.png"/>
					<div class="inline">
						<h3>تاریخ و مدت</h3>
						<p>14 آذر ماه 98 - یک روزه</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/map.png"/>
					<div class="inline">
						<h3>زمان و محل حرکت</h3>
						<p>6:30  -  مسجد دانشگاه شریف</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/bus.png"/>
					<div class="inline">
						<h3>وسیله نقلیه اصلی</h3>
						<p>اتوبوس توریستی<p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="sec">
					<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/food.png"/>
					<div class="inline">
						<h3>وعده های غذایی</h3>
						<p>صبحانه + ناهار + میان وعده</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<h4 id="roads" class="h4"><img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-places.png"/></h4>
	<section id="places">
		<div class="row">
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/sad.jpg" alt="سد امیر کبیر"/>
				<div class="txt">
					<div class="iner">
						<h3>سد امیر کبیر</h3>
						<p>جاذبه علمی</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/ghayegh.jpg" alt="دریاجه سد امیر کبیر"/>
				<div class="txt">
					<div class="iner">
						<h3>قایق سواری در دریاچه سد</h3>
						<p>جاذبه تفریحی</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/rusta.jpg" alt="روستای واریان"/>
				<div class="txt">
					<div class="iner">
						<h3>بازدید از روستای واریان</h3>
						<p>جاذبه تفریحی</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/rusta2.jpg" alt="روستای واریان"/>
				<div class="txt">
					<div class="iner">
						<h3>بازدید از روستای واریان</h3>
						<p>جاذبه تفریحی</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/gasht.jpg" alt="گشت در حاشیه رودخانه کرج"/>
				<div class="txt">
					<div class="iner">
						<h3>گشت در حاشیه رودخانه کرج</h3>
						<p>جاذبه تفریحی</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/abgir.jpg" alt="آبگیر و تاسیسات بیلقان"/>
				<div class="txt">
					<div class="iner">
						<h3>آبگیر و تاسیسات بیلقان</h3>
						<p>جاذبه علمی</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sad-info" >   
	    <div class="sad-info container">
	        <div class="grid">
	            <div class="tab tab--1-of-3">
	                <div class="menu">
	    				<div class="active"><span>تاریخچه</span></div>
	    				<div><span>مشخصات عمومی</span></div>
	    				<div><span>مشخصات ساختمانی</span></div>
	    				<div><span>تجهزات الکترونیک</span></div>
	    				<div><span>ابزار دقیق منصوبه</span></div>
	                </div>
	            </div>
	            <div class="tab tab--2-of-3">
	                <ul class="nacc">
	                    <li class="active">
							<p> در سال 1328 مطالعات سد آغاز گردید و در سال 1336 عملیات احداث آن شروع و در سال 1340 به بهره برداری رسید.</p>
							<p><strong>موقعیت سد :</strong> این سد بر روی رودخانه «کرج» با سطح حوزه آبریزی به مساحت 764 کیلومتر مربع و با متوسط جریان آب سالانه به میزان 472 میلیون مترمکعب در استان تهران و در فاصله 63 کیلومتری شمال غربی تهران و در کیلومتر 23 جاده کرج – چالوس، در شمال شهرستان کرج قرار دارد.</p>
							<p><strong>اهداف احداث :</strong>کنترل سیلاب‌های بهاره و جلوگیری از خسارت‌های ناشی از سیل، تامین آب شرب تهران سالانه به میزان 340 میلیون مترمکب، تنظیم آب برای مصارف آبیاری و کشاورزی اراضی حومه کرج به میزان 130 میلیون مترمکعب در سال و تولید انرژی «برق – آبی» جهت کمک به شبکه سراسری برق به ویژه در ساعات اوج مصرف به میزان سالانه 150000 مگاوات ساعت.</p>
						</li>
						<li class="container">
							<div class="col-md-6">
								<p><strong> مجموع ظرفیت دریچه های تخلیه آب: </strong>1550 m<sup>3</sup>/sec</p>
								<p><strong>ظرفیت سرریز تخلیه:  </strong>1450 m <sup>3</sup>/sec</p>
								<p><strong> نوع سرریز: </strong>قطاعی</p>
							</div>
							<div class="col-md-6">
								<p><strong>طول تاج: </strong>390 متر</p>
								<p><strong>عرض تاج: </strong>7.85 متر</p>
								<p><strong>عرض در کف رودخانه: </strong>30 متر</p>
								<p><strong>ارتفاع در کف رودخانه: </strong>163 متر</p>
								<p><strong>ارتفاع از پی:  </strong>180 متر</p>
							</div>
						</li>
						<li class="container" style="text-align:center">
							<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/sad-info.jpg" alt="اطلاعات سد امیر کبیر"/>
						</li>
						<li class="container">
							<div class="col-md-6">
								<table>
									<tr class="head">
										<th colspan="4"> مشخصات تجهیزات هیدرومکانیکال سد تنظیمی امیرکبیر</th>
									</tr>
									<tr class="th">
										<th>نام تجهیزات</th>
										<th>تعداد</th>
										<th>ابعاد به متر</th>
										<th>محل نصب</th>
									<tr>
									<tr class="odd">
										<td>سرریز</td>
										<td>2</td>
										<td>10 * 10</td>
										<td></td>
									</tr>
									<tr class="even">
										<td>دریچه </td>
										<td>1</td>
										<td>2.9 * 1.43</td>
										<td>شیر تخلیه</td>
									</tr>
									<tr class="odd">
										<td>شیر </td>
										<td>2</td>
										<td>1.52  * 1.22</td>
										<td>شیر تخلیه</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table>
									<tr class="head">
										<th colspan="4"> مشخصات تجهیزات هیدرومکانیکال سد اصلی امیرکبیر</th>
									</tr>
									<tr class="th">
										<th>نام تجهیزات</th>
										<th>تعداد</th>
										<th>ابعاد به متر</th>
										<th>محل نصب</th>
									<tr>
									<tr class="odd">
										<td>سرریز</td>
										<td>2</td>
										<td>10 * 10</td>
										<td>در رقوم 1755</td>
									</tr>
									<tr class="even">
										<td>دریچه اصلی</td>
										<td>3</td>
										<td>2.63 * 5.35</td>
										<td>واحدهای نیروگاه</td>
									</tr>
									<tr class="odd">
										<td>شیر</td>
										<td>2</td>
										<td>2.2 قطر</td>
										<td>واحدهای نیروگاه</td>
									</tr>
									<tr class="even">
										<td>دریچه درافت تیوپ</td>
										<td>6</td>
										<td>2.45 * 2.95</td>
										<td>واحدهای نیروگاه</td>
									</tr>
									<tr class="odd">
										<td>دریچه شیر تخلیه</td>
										<td>2</td>
										<td>2.9 * 1.43</td>
										<td>شیر تخلیه</td>
									</tr>
									<tr class="even">
										<td>شیر تخلیه</td>
										<td>2</td>
										<td>1.3 قطر</td>
										<td></td>
									</tr>
								</table>
							</div>
						</li>
						<li class="container">
							<div class="col-md-6">
								<table>
									<tr class="head">
										<th colspan="4">ابزار دقیق منصوبه در سد تنظیمی امیرکبیر</th>
									</tr>
									<tr class="th">
										<th>نام تجهیزات</th>
										<th>تعداد</th>
									<tr>
									<tr class="odd">
										<td>شاخص عددی تراز دریاچه</td>
										<td>1</td>
									</tr>
									<tr class="even">
										<td>حرارت سنج</td>
										<td>17</td>
									</tr>
									<tr class="odd">
										<td>"درزه سنج</td>
										<td>30</td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<table>
									<tr class="head">
										<th colspan="4"> ابزار دقیق منصوبه در سد اصلی امیرکبیر</th>
									</tr>
									<tr class="th">
										<th>نام تجهیزات</th>
										<th>تعداد</th>
									<tr>
									<tr class="odd">
										<td>شاخص عددی تراز دریاچه</td>
										<td>1</td>
									</tr>
									<tr class="even">
										<td>امتداد شاخص در تاج سد</td>
										<td>1</td>
									</tr>
									<tr class="odd">
										<td>گمانه های زهکش</td>
										<td>66</td>
									</tr>
									<tr class="even">
										<td>کرنش سنج</td>
										<td>486</td>
									</tr>
									<tr class="odd">
										<td>"کرنش سنج “ بدون تنش</td>
										<td>50</td>
									</tr>
									<tr class="even">
										<td>حرارت سنج</td>
										<td>170</td>
									</tr>
									<tr class="odd">
										<td>درزه سنج</td>
										<td>58</td>
									</tr>
									<tr class="even">
										<td>تغییر شکل سنج</td>
										<td>17</td>
									</tr>
								</table>
							</div>
						</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</section>
	<h4 id="timeline" class="h4"> <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-timing.png"/> </h4>
	<section id="timing"  style="padding-bottom:100px;background:none;color: #1b2537;">
		<div class="wh">
		    <div>
		        <div class="tab tab1 active"> پنجشنبه 14 آذر 98 </div>
		    </div>
		    <div class="tab-section tab1-section active">
		        <div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>شروع سفر  </h4>
						<span class="name">6:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت  سد امیر کبیر</h3>
						<p class="description">قرار  : ساعت 6:15 مقابل داشگاه شریف</p>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>به سمت کرج  </h4>
						<span class="name">6:30 - 8:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">حرکت به سمت کرج و صرف صبحانه </h3>
						<p class="description">رسیدن به محل سد و بازدید از تاسیسات و تونل انحرافی آبگیر بیلقان</p>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>بیلقان </h4>
						<span class="name">8:30 - 9:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید از بند بیلقان </h3>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>سد کرج  </h4>
						<span class="name">10:00 - 12:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازدید از سد ، نیروگاه و تاسیسات</h3>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>دریاچه سد کرج  </h4>
						<span class="name">12:00 - 13:30</span>
		            </div>
		            <div class="left">
		                <h3 class="title">قایق سواری و بازدید از روستای واریان</h3>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>ناهار  </h4>
						<span class="name">13:30 - 15:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">صرف ناهار</h3>
		            </div>
		        </div>
				<div  class="row">
		            <div class="right">
		                <div class="icon-dot">
		                    <div class="icon"></div>
		                    <span class="dot"></span>
		                </div>
		                <h4>بازگشت  </h4>
						<span class="name">15:00 - 17:00</span>
		            </div>
		            <div class="left">
		                <h3 class="title">بازگشت به تهران</h3>
		            </div>
		        </div>
			</div>
		</section>
	<h4 id="rec" class="h4"> <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-lava.png"/> </h4>
	<section id="lava">
		<div class="container">
			<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/lavazem.png"/ style="width:100%">
		</div>
	</section>
	<h4 id="show-poster" class="h4"> <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-poster.png"/> </h4>
	<section id="poost">
		<div class="container">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/pooster.jpg"/>
			</div>
			<div class="col-md-3"></div>
		</div>
	</section>
	<div id="sabt"></div>
	<section id="sign">
		<div class="container">
			<div class="col-md-4"><p class="haz">ثبت نام عادی : 245/000 تومان</p></div>
			<div class="col-md-4"><a target="_blank">ثبت نام </a></div>
			<div class="col-md-4"><p class="haz">ثبت نام دانشجویی : 190/000 تومان</p></div>
		</div>
	</section>
	<h4 id="we" class="h4"> <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-team.png"/> </h4>
	<section id="our">
		<div class="container">
			<div class="col-md-4">
				<div class="in">
					<img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/ehsan.jpg" alt="احسان نیری"/>
					<div class="inner">
						<h3>احسان نیری</h3>
						<h6>مسئول روابط عمومی و امور چندرسانه‌ای سفر</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="in">
					<img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/armin.jpg" alt="آرمین نوربخش"/>
					<div class="inner">
						<h3>آرمین نوربخش</h3>
						<h6>مسئول خانه آب ایران و مدیر سفر</h6>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="in">
					<img src="/sites/all/themes/waterhouse/images/tour/khuzestan/our-team/hashem.jpg" alt="هاشم افضلی"/>
					<div class="inner">
						<h3>هاشم افضلی</h3>
						<h6>مسئول برنامه ریزی محتوای آموزشی و بازدیدهای علمی سفر</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<h4 id="pish" class="h4"> <img src="/sites/all/themes/waterhouse/images/meysam/image/karaj/l-pish.png"/> </h4>
	<section id="pish">
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12 outer on">
				<a href="http://waterhouse.ir/tourism/yazd" target="_blank">
					<div class="out one">
						<h3>یزد</h3>
						<p>8 تا 11 آبان 97</p>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12 outer">
				<a href="http://waterhouse.ir/tourism/khuzestan" target="_blank">
					<div class="out two">
						<h3>شمال خوزستان</h3>
                        <p>14 تا 17 اسفند 97</p>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12 outer">
				<a href="http://waterhouse.ir/tourism/aras" target="_blank">
					<div class="out three">
						<h3>رودخانه ارس</h3>
						<p>1 تا 4 آبان 98</p>
					</div>
				</a>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12 outer">
				<a href="http://waterhouse.ir/tourism/lar" target="_blank">
					<div class="out four">
						<h3>سد لار</h3>
						<p>23 آبان 98</p>
					</div>
				</a>
			</div>
		</div>
	</section>
	<style>
	.on{
		background:url(/sites/all/themes/waterhouse/images/meysam/y2.jpg);
	}
	#pish .row div:nth-child(2){
		background: url(/sites/all/themes/waterhouse/images/meysam/k1.jpg);
	}
	#pish .row div:nth-child(3){
		background: url(/sites/default/files/aras5.JPG);
	}
	#pish .row div:nth-child(4){
		background:url(/sites/all/themes/waterhouse/images/meysam/image/lar/daryache.jpg);
	}
	#places .row{
		max-width: 1800px;
		margin: auto;
	}
	#places .col-md-4:hover .txt{
		opacity:0;
		transform: translateY(-100px);
	}
	#places .col-md-4:hover img{
	
    transform: scale(1.2);
	}
	#places .col-md-4{
		padding:0;
		float:right;
		border:2px solid #feaa0a;
	    overflow: hidden;
	}
	#places .txt{
		position: absolute;
		top:0;
		color: #feaa0a;
		background: #1a253773;
		height: 100%;
		width: 100%;

		transition: all .3s ease-in-out;
	}
	#places .txt h3{
		font-weight:bold;
	}
	#places img{
		height: 300px;
		width: 100%;
		transition:all .5s ease-in
	}
	.iner{
		    margin-top: 125px;
			 text-align: center;
	}
	</style>
    <script> 
		// tab sad info
		$(document).on("click", ".sad-info .menu div", function() {
	    	var numberIndex = $(this).index();
	    	if (!$(this).is("active")) {
	    		$(".sad-info .menu div").removeClass("active");
	    		$(".sad-info ul li").removeClass("active");
	    		$(this).addClass("active");
	    		$(".sad-info ul").find("li:eq(" + numberIndex + ")").addClass("active");
	    	var listItemHeight = $(".sad-info ul")
	    		.find("li:eq(" + numberIndex + ")")
	    		.innerHeight();
	    		$(".sad-info ul").height(listItemHeight + "px");
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