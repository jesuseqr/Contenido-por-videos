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
                
            $frutas = array('manzana', 'naranja', 'melón', 'platano', 'uva' );

            array_push($frutas, 'pera');

            unset($frutas[1]);

            echo "<pre>";

              print_r($frutas);

            echo "</pre>";

          ?>
      </div>
    </div>
    
  </body>
</html>