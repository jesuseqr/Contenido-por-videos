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

                function totalPagar($cantidad) {
                    $total = $cantidad * 1.16;
                    return $total;
                }

                //$cantidadPagar = totalPagar(1000);

                //echo $cantidadPagar;

                //function balanceBanco($cantidadPagar) {
                function balanceBanco($cantidadPagar) {
                $balance = 5000;

                    if($balance < $cantidadPagar) {
                        echo "Saldo insuficiente.";
                    }   else {
                        echo "Pago exitoso.";
                    }

                }

                balanceBanco(totalPagar(1000));

          ?>

        </div>
    </div>
    
  </body>
</html>