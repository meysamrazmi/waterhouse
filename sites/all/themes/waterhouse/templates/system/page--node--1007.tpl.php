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
    <section id="intro" class="panel shop-main" data-section-name="main">
        <div>    
            <p class="head">  جدید ترین محصولات آموزشی در حوزه آب</h2>
            <p class="all-product" style="text-align: center;">
                <a href="/shop" target="blank">مشاهده تمامی محصولات</a>
                <!-- <a href="/shop" target="blank" class="catalog">فروش ترکیبی فیلم و کتاب</a> -->
            </p>
        </div>
        
    </section>

    <section id="search-product" style="" >
        <?php print views_embed_view('shop','page_1'); ?>
    </section>

    <section id="lastest-product" class="panel" style="border-top:none; background: transparent;">
        <div class="wh">
            <h2> جدیدترین محصولات فروشگاه </h2>
            <?php print views_embed_view('shop','block_1'); ?>
        </div>
    </section>

    <section id="bestselling-product" class="panel" >
        <div class="wh">
            <h2> پرفروش ترین محصولات فروشگاه </h2>
            <?php print views_embed_view('shop','block_2'); ?>
        </div>
    </section>

    <section id="random-product" class="panel" style="background: transparent;">
        <div class="wh">
            <h2> محصولات تصادفی فروشگاه </h2>
            <?php print views_embed_view('shop','block_3'); ?>
        </div>
    </section>

    <script>
    	AOS.init({
    	    offset: 0,
    	    duration: 700,
    	    easing: 'ease-in-sine',
    	    delay: 500,
            once:true,
        });
        /*----------------------------------*/
        $('.page-node-1007 .view-id-shop').each(function(){
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
        /*--------------------------------------------------------------------- */
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>