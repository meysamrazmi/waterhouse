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
	<div class="intro">
		<img style="width:100%" src="sites/pipeline.waterhouse.ir/files/field/files/background/site-_article-ver_2.jpg">
		<h1 class="title">طرح ها و تجارب رویداد</h1>
	</div>
	<div class="container">
		<section id="search">
			<div class="card">
				<div class="line">
				     <div class="hr-text"><h3> جستجوی پیشرفته </h3></div>
				     <div class="hr-line"></div>
				</div>
				<?php print views_embed_view('tarha','page'); ?>
				<div class="button" id="click">
					<p id="button">موارد بیشتر برای جستجو</p>
				</div>
			</div>
		</section>

		<section id="sanat">
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش صنعت، معدن و انرژی</h3></div>
				     <div class="hr-line"></div>
				</div>
		        <?php print views_embed_view('tarha','page_1'); ?>
		    </div>
		</section>

		<section id="keshavarzi" >
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش کشاورزی</h3></div>
				     <div class="hr-line"></div>
				</div>
		        <?php print views_embed_view('tarha','page_2'); ?>
		    </div>
		</section>

		<section id="shorb">
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش شرب فصای سبز و محیط زیست </h3></div>
				     <div class="hr-line"></div>
				</div>
				<?php print views_embed_view('tarha','page_3'); ?>
		    </div>
		</section>
		<section id="boomi">
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش دانش بومی سازگاری با کم آبی </h3></div>
				     <div class="hr-line"></div>
				</div>
		        <?php print views_embed_view('tarha','page_4'); ?>
		    </div>
		</section>

		<section id="ostani" >
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش کارگروه های استانی </h3></div>
				     <div class="hr-line"></div>
				</div>
		        <?php print views_embed_view('tarha','page_5'); ?>
		    </div>
		</section>

		<section id="startup">
		    <div class="card">
				<div class="line">
				     <div class="hr-text"><h3> تجارب بخش طرح های استارتاپی </h3></div>
				     <div class="hr-line"></div>
				</div>
				<?php print views_embed_view('tarha','page_6'); ?>
		    </div>
		</section>
	</div>
	<style>
		.view-display-id-page  .view-content.owl-carousel.owl-rtl.owl-loaded.owl-drag{
			display:none !important;
		}
		.owl-nav.disabled{
			display:flex !important;
		}
        #edit-field-safhe-value-wrapper, #edit-field-enteshar-value-wrapper, #edit-field-zaban-value-wrapper,#edit-field-furmat-value-wrapper, #edit-field-mahal-value-wrapper,
		#edit-field-keshvar-value-wrapper, #edit-field-ostan-value-wrapper, #edit-field-shahr-value-wrapper, #edit-field-mahalejra-value-wrapper, #edit-field-mahal-value-wrapper,
		#edit-field-asar-value-wrapper{
            display:none;
        }
		.button p{
			display: table;
			background: deepskyblue;
			padding: 7px 20px;
			border-radius: 50px;
			color: white;
			font-weight: 500;
			cursor: pointer;
		}
	</style>
    <script>
        /*----------------------------------*/
        $('.page-node-2371 .view-id-tarha').each(function(){
            $(this).children('.view-content').addClass('owl-carousel');
        });
        if($('.owl-carousel').length){
            $.getScript('/sites/all/themes/waterhouse/js/lib/owl.carousel.min.js', function(){
                $('.owl-carousel').owlCarousel({
                    rtl:true,
                    loop:true,
                    margin:15,
                    responsiveClass:true,
                    nav:true,
				    autoplayTimeout:3200,
                    responsive:{
                        0:{items:1},
                        600:{items:3},
                        1000:{items:4}
                    }
                });
                $('.owl-prev').text('بعدی')
                $('.owl-next').text('قبلی')
            })
        }
		//show
		$("#button").click(function(){
		  $("#edit-field-safhe-value-wrapper, #edit-field-enteshar-value-wrapper, #edit-field-zaban-value-wrapper,#edit-field-furmat-value-wrapper, #edit-field-mahal-value-wrapper,#edit-field-keshvar-value-wrapper, #edit-field-ostan-value-wrapper, #edit-field-shahr-value-wrapper, #edit-field-mahalejra-value-wrapper, #edit-field-mahal-value-wrapper,#edit-field-asar-value-wrapper").show();
		});
		$(".bef-select-as-checkboxes").removeClass("form-control");
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>