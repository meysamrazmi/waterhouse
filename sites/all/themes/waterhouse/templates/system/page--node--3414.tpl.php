<!--header-->
<div class="container-nav3350">
  <nav class="menu-3350">
    <ul class="main-menu-3350">
      <li class="active"><a href="/WetlandJournalism"><i class="fa fa-home"></i>  خانه </a></li>
      <li><a href="/WetlandJournalism"><i class="far fa-sticky-note"></i> درباره جشنواره </a></li>
      <li><a href="/WetlandJournalism"><i class="fas fa-bell"></i> اطلاعیه ها</a></li>
      <li><a href="/WetlandJournalism"><i class="fa fa-users"></i> وبینارها</a></li>
      <li><a href="/talabpics"><i class="fas fa-image"></i> آثار عکسی</a></li>
      <li><a href="/talabtext"><i class="fas fa-text"></i> آثار متنی</a></li>
      <li><a href="/talabfilm"><i class="fa fa-video"></i> آثار فیلم</a></li>
    </ul>
  </nav>
</div>

<br><br><br>

<h1> ارسال آثار متنی</h1><br>
<?php
$block = module_invoke('webform', 'block_view', 'client-block-3413');
print render($block['content']);
?>
