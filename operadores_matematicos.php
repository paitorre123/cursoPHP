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
  if(isset($_POST["button"])){
    $primerValor = $_POST["num1"];
    $segundoValor = $_POST["num2"];
    $operacion = $_POST["operacion"];
    echo "<p> $primerValor </p>";
    echo "<p> $segundoValor </p>";
    echo "<p> $operacion </p>";
  }
?>
    
</body>
</html>