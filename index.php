<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <?php
        /* incluye archivo externo */
        include("utilidades_index.php");
        /* el punto concatema
           la coma separa*/      
        $mensaje = 'Hola mundo!!';
        echo '<p> primero: ' . $mensaje . '</p>';// commilla simple reconocimiento literal
        echo "<p> segundo: $mensaje </p>";//comillas dobles reconocimiento de variables
        dameDatos("tercero");
        dameDatos("cuarto");

        //manejo de variables estaticas
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();
        incrementaVariable();

        //manejo de string
        compararStringMinusculasMayusculas("hola", "hola");
    ?>

</body>
</html>