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
  </head>
  <body>
    <?php foreach ($database as $disk): ?>
      <div class="card">
        <img class="card__image" src="<?php echo $disk["poster"]; ?>" alt="<?php echo $disk["title"]." cover"; ?>">
        <h2 class="card__title"><?php echo $disk["title"]; ?></h2>
        <h4 class="card__author"><?php echo $disk["author"]; ?></h4>
        <h4 class="card__year"><?php echo $disk["year"]; ?></h4>
      </div>
    <?php endforeach; ?>

  </body>
</html>
