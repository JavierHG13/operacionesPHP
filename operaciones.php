<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $valor1 = !empty($_POST['val1']) ? $_POST['val1'] : "requerido"; 
        $valor2 = !empty($_POST['val2']) ? $_POST['val2'] : "requerido";
        $accion = isset($_POST['accion']) ? $_POST['accion'] : '';

        function sumar($a, $b) {
            return $a + $b;
        }

        function restar($a, $b) {
            return $a - $b;
        }

        function multiplicar($a, $b) {
            return $a * $b;
        }

        function dividir($a, $b) {
            if ($b == 0) {
                return "No se puede dividir por cero";
            } else {
                return $a / $b;
            }
        }

        if (!is_numeric($valor1) || !is_numeric($valor2)) {
            echo "Solo valores numericos.";
        } else {
            switch ($accion) {
                case 'sumar':
                    echo "Has seleccionado la opción " . $accion . "<br>";
                    echo "Tu resultado es " . sumar($valor1, $valor2);
                    break;
                case 'restar':
                    echo "Has seleccionado la opción " . $accion . "<br>";
                    echo "Tu resultado es " . restar($valor1, $valor2);
                    break;
                case 'multiplicar':
                    echo "Has seleccionado la opción " . $accion . "<br>";
                    echo "Tu resultado es " . multiplicar($valor1, $valor2);
                    break;
                case 'dividir':
                    echo "Has seleccionado la opción " . $accion . "<br>";
                    echo "Tu resultado es " . dividir($valor1, $valor2);
                    break;
                default:
                    echo "No se seleccionó ninguna opción";
                    break;
            }
        }
    }
?>
