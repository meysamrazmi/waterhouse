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
					  <a href="/allocation">بازگشت به صفحه اصلی</a>
					</li>
					<li>
					  <a class="scroll" href="#torabi">دکتر ترابی</a>
					</li>
					<li>
					  <a class="scroll" href="#jahani">مهندس جهانی</a>
					</li>
					<li>
					  <a class="scroll" href="#fazeli">دکتر فاضلی</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<h3 id="h3">مصاحبه های تخصيص آب </h3>
	<section id="video" style="background:url(/sites/all/themes/waterhouse/images/meysam/image/aras/s.jpg)">
	<div style="background:rgba(255,255,255,0.63)">
		<div class="container" id="torabi">
			<h4>مصاحبه های دکتر ترابی</h4>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi1.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi1.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت اول :</strong>سابقه و ضرورت شکل گیری نظام تخصيص</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi2.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi2.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت دوم :</strong>ضرورت بازنگری در نظام تخصيص آب</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi3.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi3.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت سوم :</strong>
						نشست تخصيص آب
						<br/>
						(اهداف و مخاطبان)
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi4.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi4.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت چهارم :</strong>جایگاه دینفعان و بهره‌برداران در نظام تخصيص آب</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi5.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi5.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت پنجم :</strong>عوامل سیاسی در تصمیمات کلان آب</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi6.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi6.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت ششم :</strong>
						اهمیت آمار و اطلاعات در فرآیند تخصیص
						<br/>
						<span>(جمع آوری، پایش، شفاف سازی)</span>
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi7.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi7.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت هفتم :</strong>
						تجارب جهانی تخصیص آب
						<br/>
						<span>(مؤلفه های اجتماعی، اقتصادی و ... آب)</span>
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi8.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi8.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت هشتم :</strong>
						نظام تخصيص آب، چالش ها و مناقشات
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi9.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi9.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت نهم :</strong>
						مکانیزم تصمیم گیری و اطلاع رسانی در نظام تخصيص آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi10.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi10.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت دهم :</strong>
						شفاف سازی در فرآيند تخصيص
						<br/>
						<span>(نیازها، الزامات و ظرفیت ها)</span>
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi11.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi11.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت یازدهم :</strong>
						دیپلماسی آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/torabi12.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/torabi12.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت دوازدهم :</strong>
						کارآمدی نظام تخصيص آب در کشور
					</h5>
				</div>
			</div>
		</div>
		<div class="container" id="jahani">
			<h4>مصاحبه های مهندس جهانی</h4>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani1.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani1.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت اول :</strong>
						نظام تخصيص آب
						<br/>
						(سابقه و مزیت)
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani2.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani2.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت دوم :</strong>
						فرآيند نظام تخصيص آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani3.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani3.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت سوم :</strong>
						اهداف، قابلیت ها و ظرفیت های اجرایی نظام تخصيص آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani4.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani4.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت چهارم :</strong>
						راهکارهای بهبود نظام تخصيص آب
						<br/>
						(از نطر تقسیمات سیاسی و حوضه آبریز)
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani5.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani5.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت پنجم :</strong>
						مشارکت ذینفعان در فرآیند تخصيص آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/jahani6.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/jahani6.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت ششم :</strong>
						جمع بندی
						<br/>
						<span>لزوم توجه ویژه به مسئله تخصيص و مدیریت منابع آب</span>
					</h5>
				</div>
			</div>
		</div>
		<div class="container" id="fazeli">
			<h4>مصاحبه های دکتر فاضلی</h4>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel1.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel1.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت اول :</strong>
						سلسه نشست های جامعه، آب و انرژی
						<br/>
						(ضرورت و اهداف)
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel2.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel2.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت دوم :</strong>
						تخصيص آب
						<br/>
						(تقسیم عادلانه منافع بین بهره برداران)
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel3.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel3.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت سوم :</strong>
						 ظرفیت های اجتماعی مسئله تخصيص آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel4.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel4.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت چهارم :</strong>
						فرصت اجتماعی آب برای تقویت گفتگو
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel5.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel5.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت پنجم :</strong>
						مطالبه گری، اصلاحات و شفافیت در بخش آب
					</h5>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="show">
					<video width="400" controls>
						<source src="/sites/default/files/manual/allocate/fazel6.mp4" type="video/mp4">
						<source src="/sites/default/files/manual/allocate/fazel6.mp4" type="video/ogg">
						مرورگر شما از این قابلیت استفاده نمی کند
					</video>
					<h5 class="onvan"><strong>قسمت ششم :</strong>
						نشست تخصيص آب از منظر حکمرانی
						<br/>
						فرصتی برای گفتگو در خصوص آب
					</h5>
				</div>
			</div>
		</div>
	</div>
	</section>
	<style>
		#video .col-lg-4{
			float:right;
			text-align:center;
			margin:15px 0;
			min-height:300px;
		}
		#h3, h4{
			text-align:center;
			margin:50px 0;
		}
		.navv {
		  max-width: 960px;
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
