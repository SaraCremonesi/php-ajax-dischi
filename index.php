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
          <?php foreach ($database as $cd) { ?>
            <div class="box">
              <div class="box-image">
                <img src="<?php echo $cd['poster']; ?>" alt="">
              </div>
              <div class="box-text">
                <h4><?php echo $cd['title']; ?></h4>
                <p><?php echo $cd['author']; ?></p>
                <p><?php echo $cd['year']; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
        
          <div class="select-artist">
            <span>Seleziona artista</span>
            <select class="author-select-php">
              <option value="default" selected>All</option>
              <?php foreach ($database as $singleCd) { ?>
                <option value="<?php echo $singleCd['author'] ?>"><?php echo $singleCd['author'] ?></option>
              <?php } ?>
            </select>
          </div>
        
      </div>
    </main>
  </body>
</html>
