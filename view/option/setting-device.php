<div class="container">
  <h1 class="sub-title">Setting Device</h1>
  <hr>
</div>
<div class="main-background" style="background:#f9f9f99c;">
  <div class="row p-side-20">
    <table style="font-size:12px;width:100%">
      <?php
        $userId      = $session["USER_ID"];
        $vehicles    = mysqli_query($mysqli, "SELECT * FROM `tx_vehicles` WHERE `VEHICLES_USER` = '$userId'");
        if (empty($vehicles->num_rows)) {
          echo "Data Kendaraan Kosong";
        }
        while ($data = mysqli_fetch_array($vehicles)) {
      ?>
      <tr>
        <td style="width:64%">
          <h2 style="font-size:14px;font-weight:700;padding-top:10px"><?php echo $data["VEHICLES_NAME"]; ?></h2>
          <p style="font-size:10px;"><?php echo $data["VEHICLES_PLAT_NO"]; ?> |
            <?php
              echo "<span class='bg-success bubble text-light'>".$data["VEHICLES_PHONE"]."</span>";
            // if ($data["VEHICLES_ACTIVE"] == "1") {
            //   echo "<span class='bg-success bubble text-light'>Active</span>";
            // } else {
            //   echo "<span class='bg-danger bubble text-light'>Non-Active</span>";
            // }
            ?>
          </p>
        </td>
        <td style="width:12%;vertical-align:middle"><a onclick="alert('Tambahkan tanda pagar # untuk konfirmasi')" href="sms:<?php echo $data["VEHICLES_PHONE"]; ?>?body=RELAY,1#"> <img src="assets/img/off.png" style="width:30px" alt=""></a></td>
        <td style="width:12%;vertical-align:middle;"><a onclick="alert('Tambahkan tanda pagar # untuk konfirmasi')" href="sms:<?php echo $data["VEHICLES_PHONE"]; ?>?body=RELAY,0#"><img src="assets/img/on.png" style="width:30px" alt=""></a></td>
        <td style="width:12%;vertical-align:middle"><a href="tel:<?php echo $data["VEHICLES_PHONE"]; ?>"><img src="assets/img/phone.png" style="width:15px" alt=""></a></td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
