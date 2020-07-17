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
	<section class="details">
		<div class="header" style="border-radius: 0 0 85% 85%  / 30%;">
		    <div class="back">
		        <div class="row">
		            <div class="col-lg-4"></div>
		            <div class="col-lg-4 project-txt">
		                پروژه های خانه آب
		            </div>
		            <div class="col-lg-4"></div>
		        </div>
		        <br>
		        <div class="row">
		            <div class="col-lg-4">
		                <div class="progres">
		                    <div class="progres-value pr1">
		                        <div>
		                            <p>5</p>
		                            <p>انجام شده</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="progres">
		                    <div class="progres-value pr2">
		                        <div>
		                            <p>5</p>
		                            <p> در حال انجام</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="progres">
		                    <div class="progres-value pr3">
		                        <div>
		                            <p>5</p>
		                            <p> در  آینده</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <p style="font-size:20px">  در زیر می توانید لیست پروژه های خانه آب را مشاهده نمایید </p>
		    </div>
		</div>
	</section>

	<section class="list-of-projects">
		<div class="container">
		    <div class="row projects-row">
		        <div class="proj col-sm-6">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url(/sites/all/themes/waterhouse/images/meysam/background/project.jpg);">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url(/sites/all/themes/waterhouse/images/meysam/background/project.jpg);">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6  main-proj-top2">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6  main-proj-top3">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6  main-proj-top3">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6 proj-offset main-proj-top1 main-proj-top2">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6 main-proj-top1 main-proj-top3">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6 main-proj-top1  main-proj-top3">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="proj col-sm-6 main-proj-top1  main-proj-top2">
		            <div>
		                <div class="project project2">
		                    <div class="project-in1">
		                        <div class="project-in2" style="background-image: url('/sites/all/themes/waterhouse/images/meysam/background/project.jpg');">
									<div class="overlay">
									    <a>بیشتر</a>
									    <p>پروژه شماره 1</p>
									</div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
