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

function updateTenisiModel($input) {
  $json = '{
            "action" : "update",
            "db"     : "dilacakin",
            "table"  : "tx_hdr_order",
            "update" :
          	{
          		 "ORDER_TEKNISI" : "'.$input["ORDER_TEKNISI"].'",
               "ORDER_STATUS" : "5"
          	},
             "where" :
             {
          		"ORDER_ID" : "'.$input["ORDER_ID"].'"
             }
          }';

  return $json;
}

 ?>
