<style>
    .resaltarRojo{
        color:red;
        font-weight: bold;
    }
    .resaltarVerde{
        color:green;
        font-weight: bold;
    }
</style>
<?php
    
    //constantes
    //true significa que se puede llamar tanto 
    //como PI asi como pi
    define("PI", 3.14, true);

    
    function pathFile(){
        //retorno la ruta del archivo
        return __FILE__;
    }

    function dameDatos($lugar){
        echo "<p> $lugar: funcion dame datos!!</p>";
    }

    function incrementaVariable(){
        static $numero = 0; //se inicia solo una vez
        $numero++; // incrementa a medida que se llama la funcion
        echo "<p> valor: $numero </p>";
    }

    function mensajeRojo($mensaje){
        echo "<p class='resaltarRojo'> $mensaje</p>";
    }

    function mensajeVerde($mensaje){
        echo "<p class='resaltarVerde'> $mensaje</p>";
    }

    function compararStringMinusculasMayusculas($valor1, $valor2){
        if (strcmp($valor1, $valor2) == 1){//la funcion devuelve 1 si no coinciden
            mensajeRojo("Los String son distintos!");
        }else{//si no lo hace entonces coinciden
            mensajeVerde("Los String son iguales!");
        }
    }

    function calcularAreaDeUnCirculo($radio){
        return 2*PI*pow($radio, 2);
    }
?>