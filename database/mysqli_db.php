<?php
    include ("conectable.php");

    class MySqlDataBaseConect implements IConectable{

        const SERVER_NAME = "localhost";
        const USER_NAME = "root";
        const PASSWORD = "";
        const NOMBRE_BD = "usuarios";

        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD, self::NOMBRE_BD);
        }

        public function get_conexion(){
            return $this->conexion;
        }
    }