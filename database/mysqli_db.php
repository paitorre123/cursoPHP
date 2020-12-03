<?php
    include ("conectable.php");

    class MySqlDataBaseConnect implements IConectable{

        public const SERVER_NAME = "localhost";
        public const USER_NAME = "root";
        public const PASSWORD = "";
        public const NOMBRE_BD = "usuarios";

        private $conexion;

        public function __construct(){
            $this->conexion = new mysqli(self::SERVER_NAME, self::USER_NAME, self::PASSWORD);
            if(mysqli_connect_errno()){
                echo "No es posible conectar a la base de datos";
                exit();
            }
            mysqli_select_db($this->conexion, self::NOMBRE_BD) or die("No se encuentra la base de datos " . self::NOMBRE_BD);
        }

        public function get_conexion(){
            return $this->conexion;
        }

        public function get_consulta($consulta){
            $resultado = mysqli_query($this->get_conexion(), $consulta);
            /*
                mysqli_fetch_row : Obtiene una fila de datos del conjunto de resultados y la devuelve como un 
                array enumerado, donde cada columna es almacenada en un índice del array comenzando por 0 (cero). 
                Cada llamada subsiguiente a esta función devolverá la siguiente fila del conjunto de resultados,
                o NULL si no hay más filas.
            */
            $filas = Array();
            while ($row = mysqli_fetch_row($resultado)) {
                array_push($filas, Array(
                                        "id" => $row[0],
                                        "nombre" => $row[1],
                                        "clave" => $row[2]
                                    )
                );
            }
            return  $filas;
        }
    }