$('#send_sucursales').click( function() {
    alert('Enviando!');
    $.ajax(
            {
                url: 'sucursales.php',
                type: 'post',
                data:  "post_sucursales",
                cache: false,
                success: function( result ) {
                    if(result){
                        resultObj = eval (result);
                        alert( 'El servidor retorno "' + resultObj + '"' );
                    }else{
                        alert("Error");
                    }
                }
            }
        )
    }
);
$('#send_trabajadores').click( function() {
    alert('Enviando!');
    $.ajax(
            {
                url: 'sucursales.php',
                type: 'post',
                data:  {"post_trabajadores_sucursal": "sucursal 4"},
                cache: false,
                success: function( result ) {
                    alert(result);
                    if(result){
                        resultObj = eval (result);
                        alert( 'El servidor retorno "' + resultObj + '"' );
                    }else{
                        alert("Error");
                    }
                }
            }
        )
    }
);