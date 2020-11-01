<?php
  // includo il mio database
  include __DIR__ . '/database.php';

  // converto l'array database in JSON
  $databaseJson = json_encode($database);

  // communico al server che il tipo di contenuto è json
  header('Content-Type: application/json');

  // satmpo a schermo l'array di oggetti/JSON
  echo $databaseJson;
 ?>
