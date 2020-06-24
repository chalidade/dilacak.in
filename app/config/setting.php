<?php
  // Get Page
  if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
  } else {
    $page = "index";
  }

  // Active Loader
  if (isset($_REQUEST['loader'])) include "view/option/loader.php";

// Temporary
$session["USER_ROLE"] = "0";
$number = "+6285784566522";
   ?>
