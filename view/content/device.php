<div id="content-device">
  <?php
  if ($session["USER_ROLE"] == '1') {
    include "view/option/form-marketing.php";
  } else if ($session["USER_ROLE"] == '0') {
    include "view/option/setting-device.php";
  } else if ($session["USER_ROLE"] == '2') {
    include "view/option/form-marketing.php";
  } ?>
</div>
