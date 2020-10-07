<?php

  include "db.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-dischi</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- container -->
    <div class="container">

      <!-- header -->
      <header class="header">
        <div class="header__container">
          <img class="header__img" src="img/logo.png" alt="logo Spotify">
        </div>
      </header>
      <!-- /header -->

      <!-- cards -->
      <div class="cards">
        <?php foreach ($database as $disk): ?>
          <!-- card -->
          <div class="card">
            <img class="card__image" src="<?php echo $disk["poster"]; ?>" alt="<?php echo $disk["title"]." cover"; ?>">
            <h2 class="card__title"><?php echo $disk["title"]; ?></h2>
            <h4 class="card__author"><?php echo $disk["author"]; ?></h4>
            <h4 class="card__year"><?php echo $disk["year"]; ?></h4>
          </div>
          <!-- /card -->
        <?php endforeach; ?>
      </div>
      <!-- /cards -->

    </div>
    <!-- /container -->

  </body>
</html>
