
<div id="block-system-main">
	<div class="over1">
		<div class="title">
		    <div class="inner">
		        <h1>گالری فیلم ها و عکس های</h1>
		        <h2>خانه آب ایران</h2>
		    </div>
		</div>
		<section id="search" style="margin-top:200px">
			<div class="container">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<?php $block = module_invoke('views', 'block_view', 'gallery-block'); print render($block['content']);; ?>
				</div>
				<div class="col-md-3"></div>
			</div>
		</section>
		<section id="gallery">
			<div class="container">
				<div class="titr">آلبوم تصاویر رویدادها و نشست ها
					<p class="glyf"><span class="glyphicon glyphicon-picture"></span></p>	
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2755" target="_blank">
						<div class="e1-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">رویداد سازگاری با کم آبی</p>
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2756" target="_blank">
						<div class="e2-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">نشست تخصیص آب از منظر حکمرانی</p>
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2831" target="_blank">
						<div class="e3-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">نشست نشریه آب و توسعه</p>
				</div>
			</div>
		</section>
		<section id="gallery">
			<div class="container">
				<div class="titr">آلبوم تصاویر گردشگری آب
					<p class="glyf"><span class="glyphicon glyphicon-picture"></span></p>	
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2733" target="_blank">
						<div class="t1-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">سفر گردشگری یزد</p>
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2754" target="_blank">
						<div class="t2-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">سفر گردشگری خوزستان</p>
				</div>
				<div class="col-md-3 col-md-3 col-xs-6 col-sm-6">
					<a class="main" href="http://waterhouse.ir/gallery/2859" target="_blank">
						<div class="t3-img pre">
							<div class="over">
								<p>مشاهده تصاویر</p>
							</div>
						</div>
					</a>
					<p class="p">سفر گردشگری ارس</p>
				</div>
			</div>
		</section>
		<section id="video">
			<div class="container">
				<div class="col-md-9">
					<div id="bg">
						<div class="titr">آلبوم فیلم ها
							<p class="glyf"><span class="glyphicon glyphicon-film"></span></p>
						</div>
						<?php $block = module_invoke('views', 'block_view', 'gallery-block_1'); print render($block['content']);; ?>
					</div>
				</div>
				<div class="col-md-3">
					<div id="bg">
						<div class="titr">جستجو در فیلم ها
							<p class="glyf"><span class="glyphicon glyphicon-search"></span></p>	
						</div>
						<div class="v-search"> 
							<?php $block = module_invoke('views', 'block_view', 'gallery-block_2'); print render($block['content']);; ?>
						</div>
						<div class="list">
							<h5>دسته بندی ها</h5>
							<ul>
								<li><a href="">سفر گردشگری یزد</a></li>
								<li><a href="">سفر گردشگری خوزستان</a></li>
								<li><a href="">رویداد ملی سازگاری با کم آبی</a></li>
								<li><a href="">نشس تخصیص آب</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>
	</div>
	<style>
		.views-row:hover .field-type-ds a, .views-row:hover .group-header .field-name-field-filmstime{
			opacity:1
		}
		.group-footer{
			padding:0 !important;
		}
		.field-type-ds{
			height:0!important;
		}
		.field-type-ds a{
			position:absolute;
			bottom:25px;
			color:#2bbfbd;
			opacity:0;
			transition:all 0.4s ease;
			transition-delay: 0.1s;
			right:10px;
		}
		.group-header .field-name-field-filmstime{
			background:none!important;
			color:#2bbfbd!important;
			opacity:0;
			transition:all 0.4s ease;
			transition-delay: 0.1s;
		}
		.field-type-image a:after{
			height: 100%; content: ""; background: rgba(0,0,0,0.8); position: absolute; top: 0; left: 0; right: 0; opacity: 0;
			transition:all 0.2s ease;
		}
		.views-row:hover .field-type-image a:after  { opacity: 1; cursor: pointer;}
		/**/
		.over{
			opacity: 0;
		}
		.col-md-3:hover .over{
			opacity:1;
		}
		.pre:hover{
			animation:.4s ease-in-out forwards shadow;
		}
		.e1-img{
			background:url("/sites/default/files/styles/841x400/public/default_images/d.png?itok=VjOWI2gT");
		}
		.e2-img{
			background:url("/sites/all/themes/waterhouse/images/meysam/image/allocat/poo.jpg");
		}
		.e3-img{
			background:url("sites/default/files/%D9%86%D8%B4%D8%B3%D8%AA%20%D9%86%D8%B4%D8%B1%DB%8C%D9%87%20%D8%A2%D8%A8%20%D9%88%20%D8%AA%D9%88%D8%B3%D8%B9%D9%87%20%285%29.jpg");
		}
		.t1-img{
			background:url("/sites/all/themes/waterhouse/images/meysam/y1.jpg");
		}
		.t2-img{
			background:url("/sites/all/themes/waterhouse/images/meysam/k2.jpg");
		}
		.t3-img{
			background:url("/sites/default/files/aras15.JPG");
		}
        .e1-img, .e2-img, .t1-img, .t2-img, .e3-img, .t3-img {
			background-size: cover;
			background-position: center;
        }
	</style>

</div>