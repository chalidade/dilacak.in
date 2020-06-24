<?php
  include "../../app/config/connection.php";
  include "../../app/config/setting.php";
  include "../../app/config/endpoint.php";
 ?>
<!DOCTYPE html>
  <head>
    <title>Track</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <script src="../../assets/js/mapbox-gl.js"></script>
    <link rel="stylesheet" href="../../assets/css/mapbox-gl.css"  />
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <style media="screen" type="text/css">
    /* Navigation */
    .navigation-bottom {
      padding:10px;
      background:#162447;
      position:fixed;
      bottom:0px;
      z-index:99;
    }
    .text-form {
      text-align:center;
      border:none;
    }
    td {
      vertical-align:top;
    }
    th {
      vertical-align:top;
    }
    .text-ciri {
      padding:5px;
      text-align:center;
      width:100%;
      height:80px;
      margin-top:-10px;
      border:solid thin #d4d4d4;
    }
    .img-camera {
      width:15px;
      margin-left:5px;
      margin-bottom:7px;
    }
    .img-upload {
      width:80px;
      height:80px;
      border:solid thin #d4d4d4;
    }
    .bubble {
      margin-left: 10p
      text-align:center;
      padding: 0px 5px;
      border-radius:3px;
      font-size:10px;
    }
    .p-side-20 {
      padding: 0px 20px;
    }
    .menu-border:hover {
      box-shadow: 0px 0px 12px #e43f5a;
    }
    .main-background {
      background:#d4d4d421;
      margin-top:-17px;
      padding: 10px 10px;
      min-height:680px;
    }

    .device-list {
      border:solid thin #d4d4d4;
      margin:5px;
      border-radius:5px;
      box-shadow: 0px 0px 4px #16244721;
    }

    .loader {
    border: 16px solid #fff;
    border-radius: 50%;
    border-top: 16px solid #e43f5a;
    width: 70px;
    height: 70px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
    position:absolute;
    top:40%;
    z-index:3
    }

    /* Safari */
    @-webkit-keyframes spin {
      0% { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .overlay-loader {
      background: #162447ed;
      min-height: 669px;
      width:100%;
      padding-left:40%;
      position:absolute;
      z-index:2;
    }
    .container-login {
      position: absolute;
      width:100%;
      top:20%;
      padding: 60px;
      text-align:center;
    }
    .container-register {
      position: absolute;
      width:100%;
      padding: 60px;
      text-align:center;
    }
    </style>
  </head>
<body>
  <div id='map-single' style="width:100%;height:250px"></div>
  <a href="https://www.google.com/maps/place/-7.257113+112.752165" class="btn blue-light-bg text-light" style="width:100%;font-size:12px">Buka Google Map</a>
  <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <?php
    $id    = 1;
    echo '<script type="text/javascript"> var track = "false"; var id = '.$id.'; </script>';
    echo '<script type="text/javascript" src="../../assets/js/map-all-single.js"></script>';
  ?>
</body>
<script src="../../assets/js/custom.js"></script>
<script src="../../assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
</html>
