<?php

    
    include ("mysqli_db.php");
   

    class Consultar{
        
        private $conexion_base_datos;

        function __construct(){
            $this->conexion_base_datos = new  MySqlDataBaseConect();
        }


        function get_datos_usuarios(){
            $consulta ="select * from datos_usuarios ";
            $resultado = mysqli_query($this->conexion_base_datos->get_conexion(), $consulta);
            $filas = mysqli_fetch_row($resultado);
            return $filas[1];

        }

    }
    