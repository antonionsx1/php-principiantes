<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Prueba de PHP</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 bd-sidebar border">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/php-principiantes/menu.php'); ?>
                </div>
                <div class="col-xl-10">
                    <h1>Inclusión de ficheros PHP</h1>
                    <code>
                        <pre>
                            require('/directorio/fichero');
                            include('/directorio/fichero');
                            require_once('/directorio/fichero');
                            include_once('/directorio/fichero');
                        </pre>
                    </code>
                    <code>require</code> produce un error fatal y la terminación del script si falla.<br>
                    <code>include</code> solo produce un warning.<br>
                    <code>include_once</code> y <code>require_once</code> para incluir definiciones estáticas.
                    <?= $menu_nombre ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>

