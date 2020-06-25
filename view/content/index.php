<div class="container-login animate__animated animate__fadeIn" id="login" style="display:block">
    <img src="assets/img/logo.png" style="width:200px" alt="">
    <p>Keep Your Vehicle Safe and Track</p>
    <form class="" action="app/controller/main.php?id=login" method="post" style="margin-top:30px;">
      <input style="font-size:12px" type="text" name="USER_EMAIL" class="form-control" value="" placeholder="Email"><br>
      <input style="font-size:12px" type="password" name="USER_PASSWORD" class="form-control" value="" placeholder="Password"><br>
      <input type="submit" class="btn blue-light-bg text-light" name="" style="width:100%;font-size:12px" value="Login">
      <a class="btn pink-bg text-light" name="" style="width:100%;margin-top:10px;font-size:12px" onclick="shlogin(1)"> Register </a>
    </form>
</div>


<div class="container-register animate__animated animate__fadeIn" id="register" style="display:none">
    <img src="assets/img/logo.png" style="width:200px" alt="">
    <p>Keep Your Vehicle Safe and Track</p>
    <form class="" action="app/controller/main.php?id=register" method="post" style="margin-top:30px;">
      <input type="text" class="form-control" name="USER_NAME" placeholder="Full Name" style="font-size:12px"><br>
      <input style="font-size:12px" type="text" name="USER_PHONE" class="form-control" value="" placeholder="Phone Number"><br>
      <select class="form-control" name="USER_ROLE" style="font-size:12px">
        <option selected disabled>-- Pilih Akun --</option>
        <option value="0">Pengguna Tracking</option>
        <option value="1">Marketing</option>
        <option value="2">Teknisi</option>
      </select><br>
      <textarea class="form-control" name="USER_ADDRESS" rows="5" cols="80" placeholder="Alamat" style="font-size:12px"></textarea> <br>
      <input style="font-size:12px" type="text" name="USER_EMAIL" class="form-control" value="" placeholder="Email"><br>
      <input type="hidden" name="USER_CREATED" value="<?php echo date('Y-m-d'); ?>">
      <input style="font-size:12px" type="password" name="USER_PASSWORD" class="form-control" value="" placeholder="Password"><br>
      <input type="submit" class="btn blue-light-bg text-light" name="" style="width:100%;font-size:12px" value="Register">
      <a class="btn pink-bg text-light" name="" style="width:100%;margin-top:10px;font-size:12px" onclick="shlogin(0)"> Login </a>
    </form>
</div>
