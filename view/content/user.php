<div id="content-user">
<div class="row p-side-20">
  <a href="?">
    <img class="animate__animated animate__fadeInDown" src="assets/img/exit.png" style="width:35px;position:absolute;right:20px;top:0px" alt="">
  </a>
  <?php
    $email = $session["USER_EMAIL"];
    $user    = mysqli_query($mysqli, "SELECT * FROM `tx_hdr_user` WHERE `USER_EMAIL` = '$email'");
    while ($data = mysqli_fetch_array($user)) {
  ?>
  <form action="?page=user" method="post" style="width:100%">
  <div class="col-12 text-center">
    <img src="assets/img/user_profile.png" style="width:80px;margin-top:20px" alt="">
    <h1 class="sub-title" style="margin-top:20px"><?php echo $data["USER_NAME"]; ?></h1>
    <p style="margin-top:-10px"><?php echo $data["USER_EMAIL"]; ?> <br><span class="blue-dark-bg text-light" style="padding:0px 5px;border-radius:5px;font-size:11px"><?php echo $data["USER_PHONE"]; ?></span></p>
  </div>
</form>
<?php } ?>
</div>
<br>
<?php
/*
<div class="row p-side-20">
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td style="text-align:left">
              <img src="assets/img/motorcycle.png" style="width:50px" alt="">
            </td>
            <td>
              <h3>3</h3>
              <p>Device</p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td style="text-align:left">
              <img src="assets/img/automobile.png" style="width:50px" alt="">
            </td>
            <td>
              <h3>0</h3>
              <p>Device</p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row p-side-20">
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td style="text-align:left">
              <img src="assets/img/geolocalization.png" style="width:50px" alt="">
            </td>
            <td>
              <h3>2</h3>
              <p><span class="bg-success text-light" style="padding:0px 5px;border-radius:5px;font-size:11px">Online</span></p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td style="text-align:left">
              <img src="assets/img/mark.png" style="width:50px" alt="">
            </td>
            <td>
              <h3>1</h3>
              <p><span class="pink-bg text-light" style="padding:0px 5px;border-radius:5px;font-size:11px">Offline</span></p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
*/ ?>
<div style="position:absolute;bottom:60px;width:100%">
<div class="p-side-20">
  <a href="https://wa.me/6285156580308" type="button" class="btn bg-success text-light" name="button" style="font-size:12px;width:100%">TRACK CUSTOMER SERVICE</a>
</div>
<hr style="width:30%">
<p class="text-center" style="font-size:10px">Copyright © 2020 <font class="bg-dark-text" style="font-weight:800"> TRACK </font>. All rights reserved. </p>
</div>
</div>
