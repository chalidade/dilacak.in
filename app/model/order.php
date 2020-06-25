<?php
function formOrderModel($input) {
  $json = '{
            "action"     : "simpleSave",
            "db"         : "dilacakin",
            "table"      : "tx_hdr_order",
            "primaryKey" : "ORDER_ID",
            "value"      : ['.$input.']
          }';

  return $json;
}

 ?>
