<?php
    class Conectar{
        const SERVER_NAME = "localhost";
        const USER_NAME = "root";
        const PASSWORD = "";

        private $coneccion;
        function __construct(){
            $coneccion = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD);
        }

    }
    