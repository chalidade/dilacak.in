<div id="content-map">
<?php
  if ($session["USER_ROLE"] == "0") {
    echo '<iframe style="width:100%;min-height:620px;border:none;margin-top: -20px;" src="http://demo.traccar.org/">';
  } else if ($session["USER_ROLE"] == "1") {
?>

<?php
  }
 ?>
</div>
