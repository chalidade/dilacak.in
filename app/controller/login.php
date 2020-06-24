<?php
// Include Model
session_start();
include "../model/login.php";


// function Register
function register($input) {
  $input   = convertPass($input);              // Convert Password
  $json    = registerModel($input);            // batik Model
  $result  = hitAPI($json, "store");           // Execute API
  $link    = getEndpoint("register");          // Get Link
  redirectLink("Pendaftaran Berhasil", $link); // Redirect to Page
}

// function Login
function login($input) {
  $input   = convertPass($input);
  $json    = loginModel($input);
  $result  = hitAPI($json, "index");
  if (!empty($result["data"])) {
    $link              = getEndpoint("login");
    $_SESSION["USER"]  = json_encode($result["data"]);
    redirectLink($result["message"], $link);
  } else {
    $link  = getEndpoint("register");
    redirectLink($result["message"], $link);
  }

}
 ?>
