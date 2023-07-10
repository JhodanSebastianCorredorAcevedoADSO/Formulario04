<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $nombre = $_POST["nombre"];
        $peso = $_POST["peso"];
        $fecha = $_POST["fecha"];


        if (empty($nombre) || empty($peso) || empty($fecha)) {
            echo "Por favor, complete todos los campos del formulario.";
        } else {
            echo "<h2>Datos ingresados:</h2>";
            echo "<ul>";
            echo "<li>Nombre: " . $nombre . "</li>";
            echo "<li>Peso: " . $peso. "</li>";
            echo "<li>Fecha: " . $fecha . "</li>";
            echo "</ul>";
        }
    }
    ?>