<?php
    /*
        referencia: https://stackoverflow.com/questions/19457612/call-php-function-with-arguments-using-jquery
                    https://stackoverflow.com/questions/15311320/how-to-work-with-jquery-ajax-and-php-array-return
    */
    function get_sucursales(){
        $sucursales = array("sucursal 1", "sucursal 2", "sucursal 3", "sucursal 4");
        return $sucursales;
    }

    function get_trabajadores_por_sucursal($id_sucursal){
        //$sucursales = get_sucursales();
        return array_search($id_sucursal, get_sucursales());
    }


    if (isset($_POST['post_sucursales'])) {
        echo json_encode( get_sucursales());
    }
    if(isset($_POST['post_trabajadores_sucursal'])){
        echo json_encode(get_trabajadores_por_sucursal($_POST['post_trabajadores_sucursal']));
    }
?>