<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muestreo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <main>
        <section>
            <div class="container">
                <h1 class="text-center">
                    Muestreo
                </h1>

                <?php

                session_start();

                $nombre = "";
                $peso = "";
                $fecha = "";

                if (!isset($_SESSION['datos'])) {
                    $_SESSION['datos'] = array();
                }
                ?>

                <?php if (isset($_POST['nombre'])) ?>
                <?php
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
                $peso = isset($_POST['peso']) ? $_POST['peso'] : "";
                $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";

                $nuevosDatos = [
                    'nombre' => $nombre,
                    'peso' => $peso,
                    'fecha' => $fecha
                ];
                array_push($_SESSION['lista_datos'], $nuevosDatos)

                ?>

                <form action="index.php" method="post" class="row border" id="formulario">
                    <div class="col-md-6 offset-md-3">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Peso</label>
                            <input type="text" name="peso" id="peso" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha" id="fecha" class="form-control">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary m-2" id="btn-enviar">Enviar</button>
                        </div>
                    </div>
                </form>

                    <table style="margin: 0 auto; text-align: center;">
                    <thead>
                        <tr>
                            <th style="padding: 10px;">Nombre</th>
                            <th style="padding: 10px;">Peso</th>
                            <th style="padding: 10px;">Fecha de nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    foreach($_SESSION['lista_datos'] as $itm){
                    echo '
                        <tr>
                            <td style="padding: 10px;">' . $itm['nombre'] . '</td>
                            <td style="padding: 10px;">' . $itm['peso'] . '</td>
                            <td style="padding: 10px;">' . $itm['fecha'] . '</td>
                        </tr>
                    ';}

                    ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="validar.js"></script>

</body>

</html>