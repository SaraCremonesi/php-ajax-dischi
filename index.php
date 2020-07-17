<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
    <?php include __DIR__ . '/database.php' ?>
    <title>Dischi php ajax</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.svg" alt="">
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        <div class="container-cd">
          <?php foreach ($database as $key => $value) { ?>
            <div class="box">
              <div class="box-image">
                <img src="<?php echo $value['poster']; ?>" alt="">
              </div>
              <div class="box-text">
                <h4><?php echo $value['title']; ?></h4>
                <p><?php echo $value['author']; ?></p>
                <p><?php echo $value['year']; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </main>
