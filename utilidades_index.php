<?php
    function dameDatos($lugar){
        echo "<p> $lugar: funcion dame datos!!</p>";
    }

    function incrementaVariable(){
        static $numero = 0; //se inicia solo una vez
        $numero++; // incrementa a medida que se llama la funcion
        echo "<p> valor: $numero </p>";
    }
?>