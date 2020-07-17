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
    <div class="container">
		<div class="filters">
		    <a href="javascript:void(0);" id="همکاران داخلی">همکاران داخلی</a> |
		    <a href="javascript:void(0);" id="اشخاص مهم">اشخاص مهم</a> |
		    <a href="javascript:void(0);" id="ارگان ها">ارگان ها</a> |
		    <a href="javascript:void(0);" id="همکاران فروشگاه سایت">همکاران فروشگاه سایت</a> |
		    <a href="javascript:void(0);" id="اساتید آموزش">اساتید آموزش</a> |
		    <a href="javascript:void(0);" id="خدمات عمومی">خدمات عمومی</a> |
		    <a href="javascript:void(0);" id="سایر">سایر</a><br /><br />
			<div class="container search">
				<input class="col-md-2" type="text" id="dept-name" placeholder="نام و نام خانوادگی" />
				<div class="col-md-1"></div>
				<input class="col-md-2" type="text" id="organ" placeholder="ارگان" />
				<div class="col-md-1"></div>
				<input class="col-md-2" type="text" id="post" placeholder="سمت" />
				<div class="col-md-1"></div>
				<input class="col-md-2" type="text" id="phone" placeholder="شماره تماس" />
				<div class="col-md-1">
					<button>بازنشانی</button>
				</div>
			</div>
		</div>
		<table class="phonebook">
		    <thead>
		        <tr>
		            <th>نام و نام خانوادگی</th>
		            <th>ارگان</th>
		            <th>سمت</th>
		            <th>شماره موبایل</th>
		            <th>توضیحات</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr class="type">
		            <td colspan="5">کارکنان</td>
		        </tr>
		        <tr data-campus="همکاران داخلی" data-dept-name="میثم سلیمی" data-organ="خانه آب" data-post="برنامه نویس" data-phone="09197830926">
		            <td>میثم سلیمی</td>
		            <td>خانه آب</td>
		            <td>برنامه نویس</td>
		            <td>09197830926</td>
		            <td><a href="http://meysamsalimi.ir/">وبسایت</a></td>
		        </tr>
		        <tr class="type">
		            <td colspan="5">اشخاص مهم</td>
		        </tr>

		        <tr class="type">
		            <td colspan="5">ارگان ها</td>
		        </tr>

		        <tr class="type">
		            <td colspan="5">همکاران فروشگاه سایت</td>
		        </tr>

		        <tr class="type">
		            <td colspan="5">اساتید آموزش</td>
		        </tr>

		        <tr class="type">
		            <td colspan="5">خدمات عمومی</td>
		        </tr>

		        <tr class="type">
		            <td colspan="5">سایر</td>
		        </tr>
		    </tbody>
		</table>
	</div>
    <script>
        $(function () {
            var $allRows = $('tbody').find('tr'),
                $filteredSet = $allRows,
                $filterInput = $('.filters input:first');
            $('.filters input').on('keyup', $.debounce(300, function (e) {
                var $this = $(this),
                    attr = 'data-' + $this.attr('id'),
                    value = $this.val();
                //if the value is empty, show the previously hidden rows
                if (this.value !== '') {
                    if ($filteredSet.length == 0) {
                        $filteredSet = $allRows;
                    }
                    $filteredSet.hide();
                    $filteredSet = $filteredSet
                        .filter('[' + attr + '*="' + value.toLowerCase() + '"]')
                        .show();

                    //else filter the current set of visible rows
                    //according to each (other) filter input's current value
                } else {
                    $filteredSet = $allRows;
                    $this.siblings().each(function () {
                        var $this = $(this),
                            attr = 'data-' + $this.attr('id'),
                            value = $this.val();

                        if (value !== '') {
                            $filteredSet.hide();
                            $filteredSet = $filteredSet
                                .filter('[' + attr + '*="' + value.toLowerCase() + '"]')
                                .show();
                        }
                    });
                    if ($('.filters input').filter(function () { return this.value; }).length == 0) {
                        $filteredSet = $allRows;
                        $filteredSet.show();
                    }
                }
            }));

            //populate the "campus" filter with the corresponding location
            $('.filters a').on('click', function () {
                var $this = $(this);

                $filterInput.val('').trigger('keyup');
                var t = window.setTimeout(function () {
                    $filterInput.val($this.attr('id')).trigger('keyup');
                    window.clearTimeout(t);
                }, 500);
                return false;
            });

            //clear & reset the filters
            $('.filters .button').on('click', function () {
                $('.filters input').each(function () {
                    var $this = $(this);
                    $this.val('');
                });
                $filterInput.trigger('keyup');
            });
        });
        (function (b, c) {
            var $ = b.jQuery || b.Cowboy || (b.Cowboy = {}),
                a;
            $.throttle = a = function (e, f, j, i) {
                var h, d = 0;
                if (typeof f !== "boolean") {
                    i = j;
                    j = f;
                    f = c
                }

                function g() {
                    var o = this,
                        m = +new Date() - d,
                        n = arguments;

                    function l() {
                        d = +new Date();
                        j.apply(o, n)
                    }

                    function k() {
                        h = c
                    }
                    if (i && !h) {
                        l()
                    }
                    h && clearTimeout(h);
                    if (i === c && m > e) {
                        l()
                    } else {
                        if (f !== true) {
                            h = setTimeout(i ? k : l, i === c ? e - m : e)
                        }
                    }
                }
                if ($.guid) {
                    g.guid = j.guid = j.guid || $.guid++
                }
                return g
            };
            $.debounce = function (d, e, f) {
                return f === c ? a(d, e, false) : a(d, f, e !== false)
            }
        })(this);
    </script>
</div>

<?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
        <?php print render($page['footer']); ?>
    </footer>
<?php endif; ?>
