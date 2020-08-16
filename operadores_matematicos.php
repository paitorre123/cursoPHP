<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form name="form1" method="post" action="">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>



<?php

    include ("operaciones_matematicas.php");
    

    if(isset($_POST["button"])){
        $operacion = $_POST["operacion"];
        $operadorMatematico = new OperacionesMatematicos($_POST["num1"],  $_POST["num2"]);
        if(!strcmp("Suma", $operacion) ){
            $resultado = $operadorMatematico->suma(); 
            echo "<p> resultado: $resultado </p>";
        }
        if(!strcmp("Resta", $operacion) ){
          $resultado = $operadorMatematico->resta();
            echo "<p> resultado: $resultado </p>";
        }
        if(!strcmp("Multiplicación", $operacion) ){
          $resultado = $operadorMatematico->multiplicar();
            echo "<p> resultado: $resultado </p>";
        }
        if(!strcmp("División", $operacion) ){
          $resultado = $operadorMatematico->dividir();
            echo "<p> resultado: $resultado </p>";
        }
        if(!strcmp("Módulo", $operacion) ){
          $resultado = $operadorMatematico->modulo();
            echo "<p> resultado: $resultado </p>";
        }
    }

?>
    
</body>
</html>