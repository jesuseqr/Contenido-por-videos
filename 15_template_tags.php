<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
          <h1>Aprendiendo PHP</h1>
          
        <div class="codigo">
          <?php

            function theTitle() {
              echo "El título de mi blog";
            }

            function theDate() {
              echo date('Y m d');
            }

            function theAuthor() {
              echo "Jesús";
            }

          ?>

          <div class="entrada">
            <h2><?php theTitle(); ?></h2>
            <p>Publicado el <?php theDate(); ?></p>
            <p>Escrito por: <?php theAuthor(); ?></p>
          </div>
      </div>
    </div>
    
  </body>
</html>