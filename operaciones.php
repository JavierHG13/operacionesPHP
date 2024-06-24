<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $valor1 = !empty($_POST['val1']) ? $_POST['val1'] : "requerido" ; 
        $valor2 = !empty($_POST['val2']) ? $_POST['val2'] : "requerido" ;

        $accion=isset($_POST['accion'])?$_POST['accion']:'';

        switch ($accion) 
            {
                case 'sumar':
                        echo "Has seleccionado la opcion". $accion;
                        echo "Tu resultado es". $valor1 + $valor2;
                    break;
                case 'restar':
                 

                    break;
                case 'restar':
                 
                    break;
                case 'dividir':
                   
                    break;
                default:
                    echo "No se selecciono ninguna opcion";
                    break;
                }

        
    }
?>