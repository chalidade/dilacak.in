<?php
// Session
session_start();
$session = json_decode($_SESSION["USER"], TRUE);

// Get Page
if (isset($_REQUEST["page"])) {
  $page = $_REQUEST["page"];
} else {
  $page = "index";
}

// Active Loader
if (isset($_REQUEST['loader'])) include "view/option/loader.php";

// Temporary

$session["USER_ROLE"] = $session["USER_ROLE"];
$number = "+6285784566522";
   ?>
