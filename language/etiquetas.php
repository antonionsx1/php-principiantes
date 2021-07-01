<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <h1>Etiquetas de PHP</h1>
                    PHP busca las etiquetas de apertura: <code><&quest;php</code> y cierre: <code>?></code> 
                    <p>Ejemplo: <?php echo 'Hola mundo'; ?></p>
                    <p>Cualquier cosa fuera de un par de etiquetas de apertura y cierre simplemente comienza a imprimir 
                        cualquier cosa dependiendo de las estructuras de control de PHP.
                    </p>
                    <ol>
                        <?php
                        //
                        for ($index = 0; $index <= 4; $index++):
                            ?>
                            <li>Hola Mundo</li>
                            <?php
                        endfor;
                        ?>
                    </ol>
                    <p>Evaluación de expresiones en línea: <code><&quest;= expresión ?></code></p>
                    <?= "Hola mundo" == "Hola mundo" ? "Expresión verdadera." : "Expresión falsa" ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>

