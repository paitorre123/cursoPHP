<?php
    /*
        referencia: https://stackoverflow.com/questions/19457612/call-php-function-with-arguments-using-jquery
    */
    function get_sucursales(){
        $sucursales = array(
            "sucursal 1" => 10,
            "sucursal 2" => 20,
            "sucursal 3" => 30,
            "sucursal 4" => 40
        );
        return array_keys($sucursales);
    }

    function get_trabajadores_por_sucursal($id_sucursal){
        $sucursales = get_sucursales();
        //return array_search($id_sucursal, $sucursales);
        return ( array_key_exists($id_sucursal, $sucursales) && !empty($sucursales[$id_sucursal]) ) 
        ? $sucursales[$id_sucursal] 
        : 'non-existant or empty value key';

    }


    if (isset($_POST['post_sucursales'])) {
        echo json_encode( get_sucursales());
    }
    if(isset($_POST['post_trabajadores_sucursal'])){
        echo json_encode(get_trabajadores_por_sucursal($_POST['post_trabajadores_sucursal']));
    }
?>