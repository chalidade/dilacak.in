<div class="row">
<div class="col-12 text-center">
  <?php if ($session["USER_ROLE"] == "1") { ?>
    <h4 class="title" style="margin-top:20px">Record Order</h4>
  <?php  } else { ?>
    <h4 class="title" style="margin-top:20px">Record Installation</h4>
  <?php  }  ?>
  <p><?php echo $session["USER_NAME"]; ?></p>
  <hr>
</div>
<div class="row p-side-20" style="width:100%;margin-left:0px">
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td>
              <?php
                  $userId = $session["USER_ID"];
                  $query  = mysqli_query($mysqli, "SELECT count(`ORDER_ID`) as `TOTAL` FROM `tx_hdr_order` A LEFT JOIN `tm_reff` B ON A.`ORDER_STATUS` = B.`REFF_ID` WHERE `ORDER_STATUS` = '5' AND `ORDER_TEKNISI` = '$userId'");
                  $count  = mysqli_fetch_array($query);
                  echo "<h3>".$count["TOTAL"]."</h3>";
               ?>
               <p>Done</p>
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
            <td>
              <?php
                  $query  = mysqli_query($mysqli, "SELECT count(`ORDER_ID`) as `TOTAL` FROM `tx_hdr_order` A LEFT JOIN `tm_reff` B ON A.`ORDER_STATUS` = B.`REFF_ID` WHERE `ORDER_STATUS` = '1' AND `ORDER_USER` = '$userId'");
                  $count  = mysqli_fetch_array($query);
                  echo "<h3>".$count["TOTAL"]."</h3>";
               ?>
              <p>Waiting</p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row p-side-20" style="width:100%;margin-left:0px">
  <div class="col-6">
    <div class="card text-light blue-light-bg mb-3" style="max-width: 18rem;">
      <div class="card-body">
        <table class="text-light" style="font-size:12px;width:100%;text-align:center">
          <tr>
            <td>
              <?php
                  $query  = mysqli_query($mysqli, "SELECT count(`ORDER_ID`) as `TOTAL` FROM `tx_hdr_order` A LEFT JOIN `tm_reff` B ON A.`ORDER_STATUS` = B.`REFF_ID` WHERE `ORDER_PAYMENT_CONFIRM` = '0' AND `ORDER_TEKNISI` = '$userId'");
                  $count  = mysqli_fetch_array($query);
                  echo "<h3>".$count["TOTAL"]."</h3>";
               ?>
              <p>Belum Dibayar</p>
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
            <td>
              <?php
                  $query  = mysqli_query($mysqli, "SELECT count(`ORDER_ID`) as `TOTAL` FROM `tx_hdr_order` A LEFT JOIN `tm_reff` B ON A.`ORDER_STATUS` = B.`REFF_ID` WHERE `ORDER_PAYMENT_CONFIRM` = '1' AND `ORDER_TEKNISI` = '$userId'");
                  $count  = mysqli_fetch_array($query);
                  echo "<h3>".$count["TOTAL"]."</h3>";
               ?>
              <p>Sudah Dibayar</p>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
