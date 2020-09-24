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
                    <h2>Operaciones</h2>
                    <form>
                        <div class="form-group row">
                            <div class="col-xl-4">
                                <label>Número 1:</label>
                                <input name="number_1" type="text" class="form-control mcinform">
                            </div>
                            <div class="col-xl-4">
                                <label>Número 2:</label>
                                <input name="number_2" type="text" class="form-control mcinform">
                            </div>
                            <div class="col-xl-4">
                                <label>Operación:</label>
                                <select class="form-control" name="option">
                                    <option value="suma">Suma</option>
                                    <option value="resta">Resta</option>
                                    <option value="multiplicacion">Multiplicacion</option>
                                    <option value="division">Division</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="submit" class="btn btn-outline-primary float-right">
                            </div>
                        </div>
                    </form>
                    <label>Resultado de la operación:</label>
                    <?php
                    if (isset($_GET['number_1'])) {
                        $number_1 = $_GET["number_1"];
                        $number_2 = $_GET["number_2"];
                        $option = $_GET["option"];

                        switch ($option) {
                            case "suma":
                                echo 'Suma ' . $number_1 . ' + ' . $number_2 . ' = ' . ($number_1 + $number_2);
                                break;
                            case "resta":
                                echo 'Resta ' . $number_1 . ' - ' . $number_2 . ' = ' . ($number_1 - $number_2);
                                break;
                            case "multiplicacion":
                                echo 'Multiplicacion ' . $number_1 . ' * ' . $number_2 . ' = ' . ($number_1 * $number_2);
                                break;
                            case "division":
                                echo 'Division ' . $number_1 . ' / ' . $number_2 . ' = ' . ($number_1 / $number_2);
                                break;
                            default:
                                echo 'Opcion invalida';
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