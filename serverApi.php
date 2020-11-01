<?php
  include __DIR__ . '/database.php';

//PER FILTRI
  // Recupero il valore passato in GET con la chaimata AJAX
  $author = $_GET["author"];

  // Creo l'array vuoto
  $filteredDatabase = [];

  // Ciclo sul database e se trovo corrispondenze con il valore passato in $_GET lo metto nell'array
  foreach ($database as $singoloCd) {
    if ($author == $singoloCd['author']) {
      $filteredDatabase[] = $singoloCd;
    }
  }

  // Converto nuovo array in JSON e lo metto nella variabile
  $filteredCds = json_encode($filteredDatabase);

  header('Content-Type: application/json');

  echo $filteredCds;
 ?>
