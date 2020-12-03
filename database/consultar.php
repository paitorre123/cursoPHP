<?php

    
    include ("mysqli_db.php");
   

    class Consultar{
        
        private $conexion_base_datos;

        function __construct(){
            $this->conexion_base_datos = new  MySqlDataBaseConnect();
        }


        function get_datos_usuarios(){
            $consulta ="select * from datos_usuarios";
            return $this->conexion_base_datos->get_consulta($consulta);

        }

    }
    