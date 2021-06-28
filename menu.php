<?php
$menu_nombre = "Estructuras de Control";
?>
<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="/php-principiantes/language/etiquetas.php">Etiquetas</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tipos de datos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/php-principiantes/language/types/compuestos/array.php">Array</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Variables</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Constants</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Expresiones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Operadores</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $menu_nombre ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/php-principiantes/language/control-structures/inclusion_ficheros.php">Inclusión de ficheros PHP</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Funciones</a>
        </li>
    </ul>
</nav>