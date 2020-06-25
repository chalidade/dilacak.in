<?php
// Include Model
include "../model/order.php";

function orderForm($input) {
  $json    = formOrderModel($input);            // batik Model
  $result  = hitAPI($json, "store");           // Execute API
  $link    = getEndpoint("order");          // Get Link
  redirectLink("Form Berhasil Disubmit", $link); // Redirect to Page
}

 ?>
