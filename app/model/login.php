<?php
  function registerModel($input) {
    $json = '{
              "action"     : "simpleSave",
              "db"         : "dilacakin",
              "table"      : "tx_hdr_user",
              "primaryKey" : "USER_ID",
              "value"      : ['.$input.']
            }';

    return $json;
  }

  function loginModel($input) {
    $json = '{
                "action": "cekLogin",
                "db"    : "dilacakin",
                "table" : "tx_hdr_user",
                "value" : ['.$input.']
              }';

    return $json;
  }


 ?>
