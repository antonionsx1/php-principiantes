<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
        <title>Prueba de PHP</title>
    </head>
    <body>
        <div class="container border">
            <div class="row">
                <div class="col-xl-2 bd-sidebar border">
                    <?php 
                    include($_SERVER['DOCUMENT_ROOT'].'/php-principiantes/menu.php');
                    ?>
                </div>
                <div class="col-xl-10 border">
                    <?php
                    if ($_POST) {
                        echo '<pre>';
                        echo htmlspecialchars(print_r($_POST, true));
                        echo '</pre>';
                    }
                    ?>
                    <form action="" method="post">
                        Nombre:  <input type="text" class="form-control" name="personal[nombre]" /><br />
                        Email:   <input type="text" class="form-control" name="personal[email]" /><br />
                        Cerveza: <br />
                        <select multiple class="form-control" name="cerveza[]">
                            <option value="warthog">Warthog</option>
                            <option value="guinness">Guinness</option>
                            <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
                        </select><br />
                        <input type="submit" value="¡enviarme!" class="btn btn-outline-primary"/>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>