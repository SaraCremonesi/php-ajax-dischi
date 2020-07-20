<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <?php include __DIR__ . '/database.php' ?>
    <title></title>
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
        </div>
      </div>
    </main>

    <script id="entry-template" type="text/x-handlebars-template">
      <div class="box">
        <div class="box-image">
          <img src="{{{poster}}}" alt="">
        </div>
        <div class="box-text">
          <h4>{{title}}</h4>
          <p>{{author}}</p>
          <p>{{year}}</p>
        </div>
      </div>
    </script>

    <script type="text/javascript" src="dist/app.js"></script>
  </body>
</html>
