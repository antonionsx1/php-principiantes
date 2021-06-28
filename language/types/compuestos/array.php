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
                    <h1>Array</h1>
                    <p>Un array en PHP es un mapa ordenado, es decir, un tipo de datos que asocia valores con claves.</p>
                    <p>Ejemplo:</p>
                    <code><pre><?php print_r(["Elemento_1", "Elemento_2", "Elemento_3"]) ?></pre></code>
                    <p>La clave puede ser un integer o un string o una combinación de ellos. El valor puede ser de cualquier tipo.</p>
                    <code><pre><?php print_r(["uno" => "Elemento_1", "dos" => "Elemento_2", "tres" => "Elemento_3"]) ?></pre></code>
                    Acceder a elementos específico: 
                    <?php
                    $arreglo = ["Elemento_1", "Elemento_2", "Elemento_3"];
                    ?>
                    <code><?= $arreglo[0] ?></code><br><br>
                    <p>Amoldamiento de tipo y sobrescritura.</p>
                    <?php
                    $array_amoldamiento = array(
                        1 => "a",
                        "1" => "b",
                        1.5 => "c",
                        true => "d",
                    );
                    ?>
                    <code><pre><?php print_r($array_amoldamiento) ?></pre></code>
                    <p>Claves mixtas integer y string.</p>
                    <?php
                    $array_claves_mixtas = array(
                        "foo" => "bar",
                        "bar" => "foo",
                        100 => "baz",
                        -100 => "n...",
                    );
                    ?>
                    <code><pre><?php print_r($array_claves_mixtas) ?></pre></code>
                    <p>Claves no en todos los elementos.</p>
                    <?php
                    $array_clave = array(
                        "a",
                        "b",
                        6 => "c",
                        "d",
                    );
                    ?>
                    <code><pre><?php print_r($array_clave) ?></pre></code>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>