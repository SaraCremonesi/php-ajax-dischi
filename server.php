<?php
  // Includo il mio database
  include __DIR__ . '/database.php';

  // Converto l'array database in JSON
  $databaseJson = json_encode($database);

  // Comunico al server che il tipo di contenuto è json
  header('Content-Type: application/json');

  // Stampo a schermo l'array di oggetti/JSON
  echo $databaseJson;

  //PER FILTRI
  // Recupero il valore passato in GET con la chaimata AJAX nella funzione filteredCds() nel file JavasScript;
  $author = $_GET["author"];

  // Creo l'array vuoto
  $filtred_database = [];

  // Ciclo sul database e se trovo corrispondenze con il valore passato in $_GET lo metto nell'array
  foreach ($database as $singoloCd) {
    if ($author == $singoloCd['author']) {
      $filtred_database[] = $singoloCd;
    }
  }

  // Converto il nuovo array in JSON e lo metto nella variabile
  $filtred_cds = json_encode($filtred_database);

  header('Content-Type: application/json');

  echo $filtred_cds;
 ?>
