<?php
  include 'secret.php';

  $mysqli = new mysqli("fritida-170983.mysql.binero.se", "fritida-170983.mysql.binero.se", "wFznceEbm2fr", "170983-fritida");

  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }

  echo $mysqli->host_info . "\n";
?>
