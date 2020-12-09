<?php
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 *
 * @ingroup templates
 */
?>

<!--<section id="<?php /*print $block_html_id; */?>" class="<?php /*print $classes; */?> clearfix"<?php /*print $attributes; */?>>



  <?php /*print render($title_prefix); */?>
  <?php /*if ($title): */?>
    <h3<?php /*print $title_attributes; */?>><?php /*print $title; */?></h3>
  <?php /*endif;*/?>
  <?php /*print render($title_); */?>

  <?php /*print $content; */?>

</section>-->





  <div>
    <div class="tourismfooter">
      <div class="tourismfooter-top" style="background-image: url('/sites/default/files/tourism/wave-footer.png');">
        <div class="container">
          <div class="row">

            <div class="col-md-4">
              <div class="box boxcenter textcenter">

                <div class="social">
                  <div>
                    <img style="width:200px;" src="https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/Logo.png" />
                  </div>
                  <br><br><br>
                  <P class="txt">
                    ما را در شبکه های اجتماعی دنبال کنید
                  </p>
                  <div class="icons">
                    <a target="_blank" href="https://www.instagram.com/iranWaterhouse/"><img src="/sites/all/themes/waterhouse/images/meysam/icons/instagram.png"/></a>
                    <a target="_blank" href="https://telegram.me/WaterOnline"><img src="/sites/all/themes/waterhouse/images/meysam/icons/teleg.png"/></a>
                    <a target="_blank" href=""><img src="/sites/all/themes/waterhouse/images/meysam/icons/facebook.png"/></a>
                    <a target="_blank" href=""><img src="/sites/all/themes/waterhouse/images/meysam/icons/linkedin.png"/></a>
                    <a target="_blank" href=""><img src="/sites/all/themes/waterhouse/images/meysam/icons/twitter.png"/></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="box boxleft">
                <h2 class="textcenter underline">
                  راه های ارتباطی
                </h2>

                <ul>
                  <br><br><br><br>
                  <li class="hoverchange">
                    <p>شماره تلفن: 43680000</p>
                    <i class="fal fa-phone"></i>
                  </li>
                  <li class="hoverchange">
                    <p> نمابر : 88916600</p>
                    <i class="fal fa-fax"></i>
                  </li>
                  <li class="hoverchange">
                    <p>پست الکترونیکی شرکت : info@wrm.ir</p>
                    <i class="fal fa-envelope-square"></i>
                  </li>
                </ul>
              </div>

            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="boxright">
                  <div class="divright" style="text-align: center">

                    <?php
                    $menu = menu_tree('menu-tourism');
                    print '<div class="lihoverchange">'. drupal_render($menu) .'</div>';
                    ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="tourismfooter-bottom">
        <p>Copyright © 2016 All Rights Reserved - waterhouse.ir</p>
        <p>کلیه حقوق مادی و معنوی این سایت متعلق به شرکت مدیریت منابع آب ایران می‌باشد.</p>
      </div>
    </div>
  </div>




<!---->
<!--<div>-->
<!--  <div class="tourismfooter">-->
<!--    <div class="tourismfooter-top">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="col-md-4">-->
<!--            <div class="box boxleft">-->
<!--              <h2 class="textcenter underline">-->
<!--                راه های ارتباطی-->
<!--              </h2>-->
<!--              <ul>-->
<!--                <li class="hoverchange">-->
<!--                  <p>شماره تلفن: 43680000</p>-->
<!--                  <i class="fal fa-phone"></i>-->
<!--                </li>-->
<!--                <li class="hoverchange">-->
<!--                  <p> نمابر : 88916600</p>-->
<!--                  <i class="fal fa-fax"></i>-->
<!--                </li>-->
<!--                <li class="hoverchange">-->
<!--                  <p>پست الکترونیکی شرکت : info@wrm.ir</p>-->
<!--                  <i class="fal fa-envelope-square"></i>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </div>-->
<!---->
<!--          </div>-->
<!--          <div class="col-md-4">-->
<!--            <div class="box boxcenter textcenter">-->
<!--              <div>-->
<!--                <img style="width:200px;" src="https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/Logo.png" />-->
<!--              </div>-->
<!--              <div>-->
<!--                <a href="https://www.instagram.com/iranWaterhouse/"><img style="width : 50px" src="https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/instagramlogo.png" /></a>-->
<!--                <a href="https://telegram.me/WaterOnline"><img style="width : 50px" src="https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/telegramlogo.PNG" /></a>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="col-md-4">-->
<!--            <div class="box">-->
<!--              <div class="boxright">-->
<!--                <div class="divright">-->
<!--                  --><?php
//                  $menu = menu_tree('menu-tourism');
//                  print '<div class="lihoverchange">'. drupal_render($menu) .'</div>';
//                  ?>
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="tourismfooter-bottom">-->
<!--      <p>Copyright © 2016 All Rights Reserved - waterhouse.ir</p>-->
<!--      <p>کلیه حقوق مادی و معنوی این سایت متعلق به شرکت مدیریت منابع آب ایران می‌باشد.</p>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<style>
  body{
    overflow-x: unset;
  }
  .footer{
    font-family: fanum!important;
    padding: 0!important;
    border : none!important;
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.4);
  }
  #header_zarfiat{
    background-size: cover!important;
    background-image: url('https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/bgt1.JPG')!important;
  }
  .footer{
    background-color: white!important;
  }
  .tourismfooter *{
    color : white;
  }
  .tourismfooter ul {
    list-style-type: none;
  }

  .tourismfooter a {
    color: unset;
  }

  .tourismfooter h1,h2 {
    margin: 0;
  }

  .tourismfooter a {
    text-decoration: none;
  }

  .tourismfooter .hoverchange p,.lihoverchange {
    transition: 0.4s;
  }
  .lihoverchange ul{
  /*padding-right: 35px!important;*/
  }
  .lihoverchange li{
    transition: 0.4s;
  }

  .hoverchange:hover p{
    padding-right: 10px;
    font-weight: bold;
    color: white;
  }
  .lihoverchange li:hover {
    padding-right: 40px;
    font-weight: bold;
    color: white;
  }

  .tourismfooter .underline:after {
    content: "";
    display: block;
    width: 80%;
    margin: 20px auto;
    border-bottom: 2px solid #01ADE8;
  }

  .tourismfooter .textcenter {
    text-align: center;
  }


  .tourismfooter {
    direction: rtl;
  }

  .tourismfooter-top {
    padding: 60px 0 ;
    /*background-color: #cff3fc;*/
    background-image: url('https://waterhouse.ir/sites/all/themes/waterhouse/images/tourismfooter/bgt2.JPG');
    /*background-image: linear-gradient(white, #ccffff 70%, white);*/
    background-size: cover;
  }

  .tourismfooter .box {
    /*height: 270px;*/
    /*background-color: rgba(255,255,255, 0.4);*/
    border-radius: 15px;
  }

  .tourismfooter .box img {
    display: inline;
  }

  .tourismfooter .boxleft li {
    padding-top: 20px;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
  }

  .tourismfooter .boxright {
    display : flex;
    align-items :center;
    height : 100%;
  }

  .tourismfooter .boxright li {
    font-size: 17px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
    float: inherit !important;
  }

  .tourismfooter .boxright .divright {
    width : 100%;
  }

  .tourismfooter .boxright .divleft {
    width: 100%;
    margin-right: 5%;
    padding-right: 5%;
    border-right: 2px solid #01ADE8;
  }


  .tourismfooter-bottom {
    display: flex;
    justify-content: center;
    height: 80px;
    align-items: center;
    flex-direction: column;
    background-color: #000b76;
  }


</style>
