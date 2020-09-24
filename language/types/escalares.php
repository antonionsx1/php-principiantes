<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Prueba de PHP</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 bd-sidebar border">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/php-principiantes/menu.php');
                    ?>
                </div>
                <div class="col-xl-10">
                    <h1>types</h1>
                    <hr>
                    <h2>boolean</h2>
                    <label>Asigna el valor valor booleano "TRUE" a $foo:</label>
                    <?php
                    $un_bool = TRUE;
                    echo $un_bool;
                    ?>

                    <h2>float</h2>
                    <?php
                    echo (1.23 - 1.22);
                    ?>
                    <h2>string</h2>
                    <label>Una cadena de caracteres: <?= 'foo' ?></label>
                    <h2>integer</h2>
                    <label>Un entero:</label>
                    <?php
                    $un_int = 1234;
                    ?>
                    <label>números enteros: <?= $un_int ?></label>
                    <br><label>Número negativo: <?= -123 ?></label>
                    <br><label>Número octal: <?= 0123 ?></label>
                    <br><label>Número hexadecimal: <?= 0x1A ?></label>
                    <br><label>Número binario: <?= 0b11111111 ?></label>

                    <br><label>Imprime tipo de false: <?= gettype(false) ?></label>
                    <br><label>Imprime tipo de .00001: <?= gettype(.00001) ?></label>
                    <br><label>Imprime tipo de "": <?= gettype("") ?></label>
                    <br><label>Imprime tipo de 10: <?= gettype(10) ?></label>
                    <br><label>Imprime tipo de []: <?= gettype([]) ?></label>

                    <br><label>Si este valor es un entero, incrementarlo en cuatro:</label>
                    <?php
                    if (is_int($un_int)) {
                        echo $un_int += 4;
                    }
                    ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>