<div class="barra">
    <p>Hola: <?= $nombre ?? ''; ?></p>
    <a class="boton" href="/logout">Cerrar Sesión</a>
</div>

<?php if (isset($_SESSION['admin'])) : ?>
    <div class="barra-servicios">
        <a href="/admin" class="boton">Citas</a>
        <a href="/servicios" class="boton">servicios</a>
        <a href="/servicios/crear" class="boton">Nuevo Servicio</a>
    </div>
<?php endif; ?>