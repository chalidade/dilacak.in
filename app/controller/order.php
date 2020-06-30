<?php
// Include Model
include "../model/order.php";

function orderForm($input) {
  $json    = formOrderModel($input);            // batik Model
  $result  = hitAPI($json, "store");           // Execute API
  $link    = getEndpoint("order");          // Get Link
  redirectLink("Form Berhasil Disubmit", $link); // Redirect to Page
}

function updateTenisi($input) {
  $json = json_decode($input, TRUE);
  $json    = updateTenisiModel($json);
  $result  = hitAPI($json, "store");
  $link    = getEndpoint("order");
  redirectLink("Pemasangan Selesai", $link);
}

 ?>
