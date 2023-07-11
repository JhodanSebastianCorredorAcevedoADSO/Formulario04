<?php

function valor()
{

    if (isset($_POST['nombre'])) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $peso = isset($_POST['peso']) ? $_POST['peso'] : "";
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";

        $validar = array();

        if ($nombre == "") {
            array_push($validar, "El campo nombre no puede estar vacío");
            $nombre = false;

        }

        if ($peso == "") {
            array_push($validar, "Completa el peso");
            $peso = false;
        }

        if ($fecha == "") {
            array_push($validar, "La fecha está incompleta");
            $fecha = false;
        } else {

            echo "<div class='alert alert-success m-2' role='alert'>Los datos están completos y se han enviado correctamente</div>";
        }

        // Errores posibles

        if (count($validar) > 0) {
            echo "<div class='alert alert-danger mb-2' role='alert'>";
            for ($i = 0; $i < count($validar); $i++) {
                echo "<li>" . $validar[$i] . "</li>";
            }
            echo "</div>";
        }
    }
}


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
            // $categorias = 'viejo';

        } elseif ($edad >= 30 && $edad <= 59) {
            return 'es un adulto';
            // $categorias = 'adulto';

        } elseif ($edad >= 13 && $edad <= 29) {
            return 'es un joven';
            // $categorias = 'joven';

        } elseif ($edad >= 0 && $edad <= 12) {
            return 'es un niño';
            // $categorias = 'niño';

        } elseif ($edad == "") {
            return;
        }
    }


}

// function por($peso)
// {

//     $peso = [];

//     $total = array_sum($peso);
//     $seg = count($peso);
//     $porcentaje = $total / $seg;

//     echo "p" . $porcentaje;
// }

?>