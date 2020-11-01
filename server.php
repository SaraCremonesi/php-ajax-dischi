<?php
  // Includo il mio database
  include __DIR__ . '/database.php';

  // Converto l'array database in JSON
  $databaseJson = json_encode($database);

  // Comunico al server che il tipo di contenuto è json
  header('Content-Type: application/json');

  // Stampo a schermo l'array di oggetti/JSON
  echo $databaseJson;
?>
