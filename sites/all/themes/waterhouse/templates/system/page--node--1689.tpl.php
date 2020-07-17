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
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<div id="block-system-main">
    <section id="particles-js">
		<div class="cap hidden-lg">دانشنامه آب  خانه آب ایران</div>
		<a href="#main" class="scroll"></a>
    </section>
	<section class="list">
		<div class="row">
			<div class="col col-lg-1"></div>
			<div class="col col-lg-10 main">
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-nahad.png"/>
					<p>نهادها</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-subject.png"/>
					<p>مفاهیم و موضوعات</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-doc.png"/>
					<p>اسناد</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-history.png"/>
					<p>تاریخ و مشاهیر</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-event.png"/>
					<p>رویداد</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-media.png"/>
					<p>چندرسانه ای</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-tool.png"/>
					<p>ابزار و فناوری</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-tour.png"/>
					<p>گردشگری آب</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-news.png"/>
					<p>خبر آب</p>
				</div>
				<div class="topic">
					<img src="/sites/all/themes/waterhouse/images/meysam/icons/pedia/b-edu.png"/>
					<p>آموزش</p>
				</div>
			</div>
			<div class="col col-lg-1"></div>
		</div>
        <div class="container tab" id="main">
            <ul class="nacc">
                <li class="active">
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_1'); print render($block['content']);; ?>
                </li>
                <li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_2'); print render($block['content']);; ?>
                </li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_3'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_4'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_5'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_6'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_7'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_8'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_9'); print render($block['content']);; ?>
				</li>
				<li>
					<?php $block = module_invoke('views', 'block_view', 'wiki_water-block_10'); print render($block['content']);; ?>
				</li>
            </ul>
        </div>
	</section>
	<style>
		.scroll:after{
			content: '';
			width: 30px;
			height: 30px;
			position: fixed;
			margin: auto;
			bottom: -20%;
			right: 0;
			left: 0;
			animation: 3s arrow infinite ease;
			border-right: 2px solid #f8f8f8;
			border-bottom: 2px solid #f8f8f8;
			transform: rotate(45deg);
		}
        /*canvas*/
        #particles-js {
            height: 400px;
            background: deepskyblue;
        }
		.cap{
			text-align: -webkit-center;
			position: absolute;
			font-size: 28px;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-100%);
			font-weight: bold;
			color: #f8f8f8;
		}
	</style>
    <script>
		//canvas
        particlesJS('particles-js',
            {
                "particles": {
                    "number": {
                        "value": 100,
                        "density": {
                            "enable": true,
                            "value_area": 300
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 100,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 3,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "retina_detect": true,
                "config_demo": {
                    "hide_card": false,
                    "background_color": "#b61924",
                    "background_image": "",
                    "background_position": "50% 50%",
                    "background_repeat": "no-repeat",
                    "background_size": "cover"
                }
            }
        );
		//tab
		$(document).on("click", ".list .main div", function () {
            var numberIndex = $(this).index();
            if (!$(this).is("active")) {
                $(".list .main div").removeClass("active");
                $(".list ul li").removeClass("active");
                $(this).addClass("active");
                $(".list ul").find("li:eq(" + numberIndex + ")").addClass("active");
            }
        });
		//scroll
		$(".scroll").click(function(e) {
	    	e.preventDefault();
	    	$('html, body').animate({
	    		scrollTop: ($($(this).attr('href')).offset().top)
	    	}, 700);
        });
    </script>
</div>
