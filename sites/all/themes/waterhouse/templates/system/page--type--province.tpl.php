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

      <section id="menu" class="tourism-menu">
        <img src="/sites/all/themes/waterhouse/images/hkuz.png"/>
        <?php $block = module_invoke('menu', 'block_view', 'menu-tourismmain'); print render($block['content']);; ?>
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
  .tourism-menu {
    background: #fff;
    box-shadow: 0 0 5px 0 #ccc;
  }
  .tourism-menu .menu {
    display: flex;
  }
  .field-name-field-icons .entity .content {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .field-name-field-icons > .field-items {
    display: flex;
    justify-content: space-around;
  }
  .field-name-field-icons > .field-items > .field-item {
    margin: 0;
  }
  .field-name-field-icons {
    margin: -120px 0 80px 0;
  }
  .field-name-field-icons .field-collection-view.view-mode-full {
    margin: 0;
    border-radius: 50px;
    padding: 5px 5px 5px 20px;
    background-color: rgba(255, 255, 255, 0.8);
    box-shadow: none;
    overflow: hidden;
    font-size: 15px;
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
    background: #00000020;
    color: #fff;
    right: 5%;
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
  .province-labels {
    font-size: 18px;
    font-weight: bold;
    position: relative;
    margin-bottom: 20px;
  }
  .province-labels:before {
    content: "";
    position: absolute;
    width: 160px;
    background: #ff000040;
    height: 2px;
    bottom: -10px;
    box-shadow: 0 0px 3px red, 0 0px 3px red;
  }
  .relative-spots .province-labels:before {
    background: #4caf5030;
    box-shadow: 0 0px 3px #4CAF50, 0 0px 3px #4CAF50;
  }
  .relative-films .province-labels:before {
    background: #ffc107;
    box-shadow: 0 0px 3px #FFEB3B, 0 0px 3px #FFEB3B;
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
</style>
