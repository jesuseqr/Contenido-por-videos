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

            $array_assoc = array(
              'nombre' => 'Jesús',
              'apellido' => 'Quintero',
              'país' => 'Venezuela',
              'edad' => 34,
              'usuario_logueado' => true,
            );

            echo "<pre>";

            var_dump($array_assoc);

            echo "<br>";

            print_r($frutas);

            echo "<br>";

            var_dump($frutas);

            echo "</pre>";

            echo $frutas[2];

            echo "<br>";

            echo $array_assoc['apellido'];

          ?>
      </div>
    </div>
    
  </body>
</html>