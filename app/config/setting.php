<?php
// Session
session_start();
if (isset($_SESSION["USER"])) {
  $session = json_decode($_SESSION["USER"], TRUE);
  $session["USER_ROLE"] = $session["USER_ROLE"];
}

// Get Page
if (isset($_REQUEST["page"])) {
  $page = $_REQUEST["page"];
} else {
  $page = "index";
}

// Active Loader
if (isset($_REQUEST['loader'])) include "view/option/loader.php";

// Temporary

$number = "+6285784566522";
   ?>
