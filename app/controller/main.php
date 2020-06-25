<?php
// Include library
include "../config/connection.php";
include "../config/setting.php";


// include function
include "login.php";
include "order.php";


//Get From Request
$id     = $_REQUEST['id'];
$input  = json_encode($_POST);

// Call Functon
main($id, $input);

// Function
function main($id, $input) {
  $id($input);
}

// Debugging JSON
function debug() {
  header('Content-Type: application/json');
}

// Decode Data
function decode($input) {
  $input = json_decode($input, TRUE);
  return $input;
}

// Get Link API STORE OR GET
function getLinkApi($input) {
  include "../config/endpoint.php";
  if ($input == "store") {
    return $apiStore;
  } else {
    return $apiGet;
  }
}

function convertPass($input) {
  $input = json_decode($input, true);
  $input["USER_PASSWORD"] = sha1(md5(base64_encode($input["USER_PASSWORD"]."aku")."adalah")."kambing");
  return json_encode($input);
}

// Get EndPoint
function getEndpoint($input) {
  include "../config/endpoint.php";
  return $link[$input];
}

function redirectLink($message, $link) {
  echo "<script type='text/javascript'>alert('".$message."');window.location.href = '".$link."'</script>";
}

// CALL API USING CURL
function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

// Hit API
function hitAPI($input, $link) {
  $link       = getLinkApi($link);
  $make_call  = callAPI('POST', $link, $input);
  $response   = json_decode($make_call, true);
  $message    = $response['message'];
  if (isset($response['data'])) {
    $data     = $response['data'];
  } else {
    $data     = "";
  }
  return ["message" => $message, "data" => $data];
}

 ?>
