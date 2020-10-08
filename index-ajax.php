<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Google fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap">
    <!-- add jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- add handlebars -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" charset="utf-8"></script>
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
      <div class="cards"></div>
      <!-- /cards -->

    </div>
    <!-- /container -->

    <!-- handlebars-template -->
    <script id="cd-template" type="text/x-handlebars-template">
      <!-- card -->
      <div class="card">
        <img class="card__image" src="{{poster}}" alt="{{title}} cover">
        <h2 class="card__title">{{title}}</h2>
        <h4 class="card__author">{{author}}</h4>
        <h4 class="card__year">{{year}}</h4>
      </div>
      <!-- /card -->
    </script>
    <!-- /handlebars-template -->

    <!-- add script.js -->
    <script src="js/script.js" charset="utf-8"></script>

  </body>
</html>
