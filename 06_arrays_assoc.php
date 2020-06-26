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
                
            $array_assoc = array(
              'nombre' => 'Jesús',
              'apellido' => 'Quintero',
              'país' => 'Venezuela',
            );

            echo "Hola, mi nombre es " . $array_assoc[nombre] . " " . $array_assoc[apellido] . " y soy de " . $array_assoc[país];

            echo "<pre>";

            print_r($array_assoc);

            echo "</pre>";

          ?>
      </div>
    </div>
    
  </body>
</html>