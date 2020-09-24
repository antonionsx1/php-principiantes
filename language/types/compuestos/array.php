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
                    <h2>Array</h2>
                    <p>Un array en PHP es un mapa ordenado, es decir, un tipo de datos que asocia valores con claves.</p>
                    <p>La clave puede ser un integer o un string o una combinación de ellos. El valor puede ser de cualquier tipo.</p>
                    <p>Elementos de Arreglo:</p>
                    <?php
                    $arreglo = ["Elemento_1", "Elemento_2", "Elemento_n"];
                    foreach ($arreglo as $key => $value) {
                        echo "key: $key ";
                        echo "value: $value";
                        echo "<br>";
                    }
                    ?>
                    <br>Elemento específico 2: <?= $arreglo[2] ?>
                    <br><br><p>Arreglo con clave.</p>
                    <?php
                    $array = [
                        "foo" => "bar",
                        "bar" => "foo",
                    ];
                    foreach ($array as $key => $value) {
                        echo "key: $key ";
                        echo "value: $value";
                        echo "<br>";
                    }
                    ?>
                    <br><p>Amoldamiento de tipo y sobrescritura.</p>
                    <?php
                    $array_amoldamiento = array(
                        1 => "a",
                        "1" => "b",
                        1.5 => "c",
                        true => "d",
                    );
                    foreach ($array_amoldamiento as $key => $value) {
                        echo "key: $key ";
                        echo "value: $value";
                        echo "<br>";
                    }
                    ?>
                    <br><p>Claves mixtas integer y string.</p>
                    <?php
                    $array_claves_mixtas = array(
                        "foo" => "bar",
                        "bar" => "foo",
                        100 => "baz",
                        -100 => "n...",
                    );
                    foreach ($array_claves_mixtas as $key => $value) {
                        echo "key: $key ";
                        echo "value: $value";
                        echo "<br>";
                    }
                    ?>
                    <br><p>Claves no en todos los elementos.</p>
                    <?php
                    $array_clave = array(
                        "a",
                        "b",
                        6 => "c",
                        "d",
                    );
                    foreach ($array_clave as $key => $value) {
                        echo "key: $key ";
                        echo "value: $value";
                        echo "<br>";
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