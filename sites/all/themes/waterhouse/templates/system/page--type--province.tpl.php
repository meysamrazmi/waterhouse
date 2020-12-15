<div>

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-md-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section <?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <section id="menu" class="tourism-menu container">
        <?php
        $block = module_invoke('menu', 'block_view', 'menu-tourismmain');
        print render($block['content']);
        ?>
      </section>
      <div class="container">
        <?php print render($page['content']); ?>
      </div>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-md-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<?php if (!empty($page['footer'])): ?>
  <footer class="footer <?php print $container_class; ?>">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
<style>
  .field-name-field-icons .entity .content {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .field-name-field-icons > .field-items {
    display: flex;
    justify-content: space-around;
    height: 100%;
    align-items: center;
    max-width: 1170px;
    margin: auto;
  }
  .field-name-field-icons > .field-items > .field-item {
    margin: 0;
    width: 33.3%;
    padding: 15px 0;
  }
  .field-name-field-icons > .field-items > .field-item:nth-child(2) {
    border: 2px solid #fff;
    border-width: 0 2px;
  }
  .field-name-field-icons .field-items .field-items .field-item:before {
    content: "";
    width: 60px;
    height: 60px;
    display: inline-block;
    vertical-align: middle;
    background: url(/sites/all/themes/waterhouse/images/loan.svg);
    background-position: center;
    background-size: contain;
    margin-left: 30px;
    background-repeat: no-repeat;
  }
  .field-name-field-icons .field-items .field-item:nth-child(2) .field-items .field-item:before {
    background-image: url(/sites/all/themes/waterhouse/images/gdp.svg);
  }
  .field-name-field-icons .field-items .field-item:nth-child(3) .field-items .field-item:before {
    background-image: url(/sites/all/themes/waterhouse/images/check-in.svg);
  }
  .field-name-field-icons {
    margin: -170px 0 0px 0;
    height: 170px;
    background: #00000096;
    position: absolute;
    width: 100vw;
    /*bottom: 0;*/
  }
  .field-name-field-icons .field-collection-view.view-mode-full {
    margin: 0;
    padding: 15px;
    background-color: transparent;
    box-shadow: none;
    overflow: hidden;
    font-size: 15px;
    color: #fff;
  }
  .field-name-field-icons .field-collection-view img {
    width: 50px;
    margin-left: 15px;
  }
  .field-collection-view-links {
    display: none;
  }
  .field-name-field-icons .field-label {
    display: none;
  }
  .main-image img {
    min-width: 100vw;
    max-width: none;
    margin-right: calc(50% - 50vw);
    min-height: 400px;
  }
  .node-province .field-name-body {
    line-height: 3em;
    font-size: 15px;
  }
  .node-type-province #block-system-main {
    position: relative;
  }
  .caption_slide {
    position: absolute;
    top: 50px;
    width: 90%;
    padding: 40px 0 40px;
    border: 2px solid #fff;
    background: #ffffff33;
    color: #fff;
    right: 5%;
    text-shadow: 0 0 10px #000;
  }
  .caption_slide h1 {
    border: 2px solid;
    border-width: 0 3px;
    padding: 20px;
    display: inline-block;
    margin: 0 -5px 0 0;
  }
  .field-name-field-filez img {
    display: inline-block !important;
    width: inherit !important;
  }
  .field-name-field-uploads .field-collection-view.view-mode-full {
    padding: 0;
  }
  .action-links-field-collection-add {
    display: none;
  }
  .field-name-field-uploads .required-fields {
    display: flex;
    flex-direction: column;
  }
  .field-name-field-uploads .required-fields .field-name-field-imaje {
    order: -1;
  }
  .field-name-field-uploads .required-fields .field-name-field-titles {
    padding: 10px 10px 15px;
  }
  .field-name-field-uploads .required-fields .field-name-field-filez {
    padding: 10px 10px 10px;
    border-top: 1px solid #eee;
    background: #f9f9f9;
  }
  .node-province {
    display: flex;
    flex-direction: column;
  }
  .node-province > [class^=relative] {
    margin: 30px 0 20px;
  }
  .node-video.node-teaser .field-name-title {
    height: auto;
  }
  .main-image {
    min-height: 400px;
    background: #3F51B5;
    background-image: url(https://www.transparenttextures.com/patterns/light-wool.png);
    width: 100vw;
    margin-right: calc(50% - 50vw);
  }
  .node-province-spots .group-right {
    width: calc(100% - 265px);
    margin-right: 15px;
  }
  .node-province-spots .group-left {
    width: 250px;
  }
  .node-province-spots.node-teaser {
    padding: 15px;
    align-items: start;
  }
  .node-province-spots.node-teaser .field-name-body {
    margin: 0 !important;
  }
  .node-province-spots.node-teaser .field-name-title h2 {
    font-weight: 500;
  }
  .owl-carousel .owl-dots .owl-dot span:before {
    width: 7px;
    height: 6px;
  }
  .relative-films {
    position: relative;
    padding: 50px 0;
  }
  .relative-films:before {
    content: "";
    position: absolute;
    right: calc(50% - 50vw);
    width: 100vw;
    height: 100%;
    background: #fff;
    top: 0;
    border: 1px solid #ddd;
    border-width: 1px 0;
  }
</style>
