<?php
    /*
        referencia: https://stackoverflow.com/questions/19457612/call-php-function-with-arguments-using-jquery
                    https://stackoverflow.com/questions/15311320/how-to-work-with-jquery-ajax-and-php-array-return
    */
    
    class Sucursales {
        private $sucursales;
        
        function __construct(){
            $this->sucursales = array("sucursal 1", "sucursal 2", "sucursal 3", "sucursal 4");
        }

        public function get_sucursales(){
            return $this->sucursales;
        }
    
        public function get_trabajadores_por_sucursal($id_sucursal){
            return array_search($id_sucursal, $this->get_sucursales());
        }

    }
    

    $sucursales = new Sucursales();
    if (isset($_POST['post_sucursales'])) {
        echo json_encode( $sucursales->get_sucursales());
    }
    if(isset($_POST['post_trabajadores_sucursal'])){
        echo json_encode($sucursales->get_trabajadores_por_sucursal($_POST['post_trabajadores_sucursal']));
    }
?>