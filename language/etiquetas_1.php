<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Etiquetas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 border-end p-3">
                    <?php include './menu.php'; ?>
                </div>
                <div class="col-xl-9">
                    <h1 class="text-center">Etiquetas</h1>
                    <h2>Evaluación de expresiones en línea</h2>
                    <?= "Hola Mundo" ?>
                    <h2>Bloques de código</h2>
                    <?php
                    for ($index = 0; $index < 5; $index++) {
                        ?>
                        <p>Hola Mundo</p>
                        <?php
                    }
                    ?>
                    <h2>Inclusión de ficheros php</h2>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
