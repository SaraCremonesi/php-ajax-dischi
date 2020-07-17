<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
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
  </body>
</html>
