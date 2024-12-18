<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Eleige tus servicios a continuación</p>

<?php
    include_once __DIR__.'/../templates/barra.php';
?>

<div id="app">

    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">información Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div class="seccion" id="paso-1">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div class="listado-servicios" id="servicios"></div>
    </div>
    <div class="seccion" id="paso-2">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>
        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Nombre" value="<?= $nombre ?>" disabled>
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" min="<?= date('Y-m-d') ?>">
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" id="hora">
            </div>

            <input type="hidden" id="id" value="<?= $id ?>">

        </form>
    </div>
    <div class="seccion contenido-resumen" id="paso-3">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
    </div>

    <div class="paginacion">
        <button class="boton" id="anterior">
            &laquo; Anterior
        </button>

        <button class="boton" id="siguiente">
            Siguiente &raquo;
        </button>
    </div>

</div>

<?= $script = "
    <link href='https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js'></script>
    <script src='/build/js/app.min.js'></script>
"; ?>