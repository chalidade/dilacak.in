<?php if ($page != 'index' AND $page != 'register') { ?>
<nav class="text-light navigation-bottom" style="width:100%">
<div class="row text-center">
  <div class="col-4">
    <a onclick="menu(0)">
      <img src="assets/img/logo.png" alt="" style="width:100px">
    </a>
  </div>
  <div class="col-8">
    <div class="row container">
  <?php
  if ($session["USER_ROLE"] == '1') { ?>
    <div class="col-3">
      <a href="?page=map">
        <img src="assets/img/pie-chart.png" style="width:28px" alt="">
      </a>
    </div>
    <div class="col-3">
      <a href="?page=device">
        <img src="assets/img/add.png" style="width:28px" alt="">
      </a>
    </div>
    <div class="col-3">
      <a href="?page=device">
        <img src="assets/img/add.png" style="width:28px" alt="">
      </a>
    </div>
  <?php } else if ($session["USER_ROLE"] == '0') {?>
    <div class="col-3">
      <a href="?page=map">
        <img src="assets/img/location.png" style="width:28px" alt="">
      </a>
    </div>
    <div class="col-3">
      <a href="?page=device">
        <img src="assets/img/maintenance.png" style="width:28px" alt="">
      </a>
    </div>
    <div class="col-3">
      <a href="?page=device">
        <img src="assets/img/add.png" style="width:28px" alt="">
      </a>
    </div>
  <?php } ?>
  <div class="col-3">
    <a href="?page=user">
      <img src="assets/img/user1.png" style="width:28px" alt="">
    </a>
  </div>
  </div>
</div>
</div>
</nav>
<br>
<?php } ?>
