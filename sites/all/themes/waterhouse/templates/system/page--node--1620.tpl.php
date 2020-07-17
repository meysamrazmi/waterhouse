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
	<section class="project row">
        <figure class="image col col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <img src="/sites/all/themes/waterhouse/images/meysam/background/project.jpg" alt="تصویر اصلی پروژه" title="تصویر اصلی" style="width:100%" />
            <figcaption>
                <a onclick="openalbum();currentSlide(1)">گالری تصاویر</a>
            </figcaption>
        </figure>
		<div class="col col-lg-1"></div>
		<div class="main-text col col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="title">
				در این قسمت عنوان پروژه قرار می گیرد
			</div>
			<div class="more">
				<p> توضیحات : </p>
				<p>
					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
					چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است 
					و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. 
				</p>
			</div>
			<div class="data">
				تاریخ شروع پروژه : 21/04/1375
			</div>
			<div class="data">
				تاریخ اتمام  پروژه : 21/04/1395
			</div>
			<div class="pishraft">
				 <div> درصد پیشرفت : </div>
				 <div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
					    70%
					  </div>
			     </div>
			</div>
			<div class="icon-group">
				<div title="اخبار" class="news"><a href="#akhbar" id="news"></a></div>
				<div title="فیلم" class="video"><a href="#film" id="video"></a></div>
				<div title="مصاحبه ها" class="conferance"><a href="#mosahebe" id="conferance"></a></div>
				<div title="محصولات" class="product"><a href="#mahsool" id="product"></a></div>
			</div>
		</div>
	</section>
	<section id="myalbum" class="album">
		<div class="album-content">
			<span class="close cursor" onclick="closealbum()">&times;</span>
		    <div class="mySlides">
		        <div class="numbertext">1 / 3</div>
		        <img src="/sites/all/themes/waterhouse/images/meysam/background/project.jpg" style="width:100%">
		    </div>
		    <div class="mySlides">
		        <div class="numbertext">2 / 3</div>
		        <img src="/sites/all/themes/waterhouse/images/meysam/background/project.jpg" style="width:100%">
		    </div>
		    <div class="mySlides">
		        <div class="numbertext">3 / 3</div>
		        <img src="/sites/all/themes/waterhouse/images/meysam/background/project.jpg" style="width:100%">
		    </div>
		    <a class="prev" onclick="plusSlides(-1)" style="transform:rotate(180deg)">&#10140;</a>
		    <a class="next" onclick="plusSlides(1)">&#10140;</a>
		</div>
    </section>
	<div class="line">
        <div class="hr-line"></div>
        <div class="hr-text">اهداف</div>
        <div class="hr-line"></div>
    </div>
	<section class="about-project">
		<div class="row">
			<div class=" col col-lg-12 col-md-12 col-sm-12 col-xs-12">
				لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. 
				لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. 
				لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. 
			</div>
		</div>
	</section>
	<div class="line" id="akhbar">
        <div class="hr-line"></div>
        <div class="hr-text">اخبار</div>
        <div class="hr-line"></div>
    </div>
	<section class="news">
		در این قسمت اخبار مرتبط قرار میگیرد
	</section>
	<div class="line" id="film">
        <div class="hr-line"></div>
        <div class="hr-text">فیلم</div>
        <div class="hr-line"></div>
    </div>
	<section class="video">
		در این قسمت فیلم های مرتبط قرار میگیرد
	</section>
	<div class="line" id="mosahebe">
        <div class="hr-line"></div>
        <div class="hr-text">مصاحبه</div>
        <div class="hr-line"></div>
    </div>
	<section class="conferance">
		در این قسمت مصاحبه های مرتبط قرار میگیرد
	</section>
	<div class="line"  id="mahsool">
        <div class="hr-line"></div>
        <div class="hr-text">محصول</div>
        <div class="hr-line"></div>
    </div>
	<section class="product">
		در این قسمت محصولات مرتبط قرار میگیرد
	</section>
	<script>
        function openalbum() {
            document.getElementById('myalbum').style.display = "block";
        }
        function closealbum() {
            document.getElementById('myalbum').style.display = "none";
        }
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
