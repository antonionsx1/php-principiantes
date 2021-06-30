<div class="col-xl-10">
    <h1>Inclusión de ficheros PHP</h1><br>
    <code>
        <pre>
        require('/directorio/fichero');
        include('/directorio/fichero');
        require_once('/directorio/fichero');
        include_once('/directorio/fichero');
        </pre>
    </code>
    <code>require</code> produce un error fatal y la terminación del script si falla.<br>
    <code>include</code> solo produce un warning.<br>
    <code>include_once</code> y <code>require_once</code> para incluir definiciones estáticas.
    <?= $menu_nombre ?>
</div>