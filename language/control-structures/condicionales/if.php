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
                    <h2>If</h2>
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

//                        if ($age >= 18) {
//                            echo 'Es mayor de edad.';
//                        } else {
//                            echo 'Es menor de edad.';
//                        }

                        if ($age >= 18):
                            echo 'Es mayor de edad.';
                        else:
                            echo 'Es menor de edad.';
                        endif;
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

