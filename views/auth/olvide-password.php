<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcio-pagina">Reestablece tu password, escribiendo tu email a continuacion:</p>

<?php
include_once __DIR__ . "/../templates/alertas.php"
?>

<form action="" method="POST" class="formulario">

    <div class="campo">
        <label for="email">Introduce tu email</label>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
    </div>

    <p class="campo">
        <!-- <input type="submit" class="boton" value="Restablecer Password"> -->
        <button type="submit" class="boton">Restablecer Password</button>
    </p>

</form>

<div class="acciones">
    <a href="/">Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>