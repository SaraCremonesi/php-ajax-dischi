<?php
  include __DIR__ . '/database.php';
  $databaseJson = json_encode($database);
  header('Content-Type: application/json');
  echo $databaseJson;
 ?>
