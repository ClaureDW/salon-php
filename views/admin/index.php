<h1 class="nombre-pagina">Panel de Administracion</h1>

<?php
include_once __DIR__ . '/../templates/barra.php';
?>

<h2>Buscar Citas</h2>
<div class="busqueda">
    <form action="" class="formulario">
        <div class="campo">
            <label for="fecha">Fecha</label>
            <input id="fecha" type="date" name="fecha" value="<?= $fecha ?>">
        </div>
    </form>
</div>

<?php

if(count($citas) === 0 ) {
    echo "<h2>Sin Citas para esta fecha</h2>";
}

?>

<div id="citas-admin">
<ul class="citas">
    <?php
    $total = 0;
    $lastCita = count($citas) - 1; // Índice del último elemento
    foreach ($citas as $key => $cita) {
        // Solo mostramos los datos de la cita si es diferente de la anterior
        if ($key === 0 || $citas[$key - 1]->id !== $cita->id) {
            // Mostrar datos generales de la cita
            ?>
            <li>
                <p>ID: <span><?= $cita->id ?></span></p>
                <p>Hora: <span><?= $cita->hora ?></span></p>
                <p>Cliente: <span><?= $cita->cliente ?></span></p>
                <p>Email: <span><?= $cita->email ?></span></p>
                <p>Telefono: <span><?= $cita->telefono ?></span></p>
                <h3>Servicios</h3>
            <?php 
        }

        // Acumulamos el total
        $total += $cita->precio;
        ?>
            <p class="servicio"><?= $cita->servicio . " " . $cita->precio ?></p>
        <?php
        // Comprobamos si esta es la última cita o si el siguiente ID es diferente
        if ($key === $lastCita || $citas[$key + 1]->id !== $cita->id) {
            // Mostrar el total solo para la última cita de cada grupo
            ?>
            <p class="total">Total: <span><?= $total ?></span></p>
            </li>

            <form action="/api/eliminar" method="POST">
                <input type="hidden" name="id" value="<?= $cita->id ?>">
                <input type="submit" class="boton-eliminar" value="Eliminar">
            </form>

            <?php
            // Resetear el total para la siguiente cita
            $total = 0;
        }
    }
    ?>
</ul>
</div>

<?php $script = "<script src='build/js/buscador.min.js'></script>" ?>