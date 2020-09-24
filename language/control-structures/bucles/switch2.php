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
                <div class="col-xl-10 index">
                    <h2>Switch 2</h2>
                    <form>
                        <div class="form-group row align-items-end">
                            <div class="col-xl-4">
                                <label>Digite la edad: </label>
                                <input name="age" type="text" class="form-control mcinform">
                            </div>
                            <div class="col-4">
                                <input type="submit" class="btn btn-outline-primary">
                            </div>
                        </div>
                    </form>
                    <?php
                    if (isset($_GET['age'])) {
                        $age = $_GET["age"];

                        echo "Edad: $age años.<br>";
                        echo "Etapa: ";

                        switch ($age) {
                            case $age <= 3:
                                echo 'Primera infancia.';
                                break;
                            case $age > 3 && $age <= 6;
                                echo 'Niñes temprana.';
                                break;
                            case $age > 6 && $age <= 11;
                                echo 'Niñes intermedia.';
                                break;
                            case $age > 11 && $age <= 17;
                                echo 'Adolescencia.';
                                break;
                            case $age > 17 && $age <= 35;
                                echo 'Juventud.';
                                break;
                            case $age > 35 && $age <= 50;
                                echo 'Madurez.';
                                break;
                            case $age > 50 && $age <= 65;
                                echo 'Adultes madura.';
                                break;
                            case $age > 65;
                                echo 'Tercera edad.';
                                break;
                            default:
                                break;
                        }
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


