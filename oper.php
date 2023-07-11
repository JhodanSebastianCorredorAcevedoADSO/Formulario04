<?php

function validacion($peso, $fecha)
{

    if (is_numeric($peso) && is_numeric($fecha)) {
        return true;
    } else {
        return false;
    }
}

function error()
{
    echo "<span class='text-danger'> Ingresa solo numeros </span>";
}


// if (empty($nombre) || empty($peso) || empty($fecha)) {
//     echo '<div style="text-align: center; background-color: #f5c6cb; margin: 20px;">Por favor, complete todos los campos del formulario.</div>';
// } else{
//     false;
// }

function vvalor($fecha)
{

    if (isset($_POST['fecha'])) {
        $fecha = $_POST['fecha'];

        if (empty($fecha)) {
            return '';
        }

        $fechaActual = date('d-m-Y');

        $diff = date_diff(date_create($fecha), date_create($fechaActual));
        $edad = $diff->y;

        if ($edad >= 60) {

            return 'es un viejo';

        } elseif ($edad >= 30 && $edad <= 59) {
            return 'es un adulto';

        } elseif ($edad >= 13 && $edad <= 29) {
            return 'es un joven';

        } elseif ($edad >= 0 && $edad <= 12) {
            return 'es un niño';

        } elseif ($edad == "") {
            return;
        }
    }
}


function por($peso)
{

    $peso = [];

    if (empty($fecha)) {
        return '';
    }
    $total = array_sum($peso);
    $seg = count($peso);
    $porcentaje = $total / $seg;

    echo "p" . $porcentaje;
}


?>