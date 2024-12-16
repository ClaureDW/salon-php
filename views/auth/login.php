<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<?php 
    include_once __DIR__."/../templates/alertas.php"
?>

<form action="" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Correo Electrónico" name="email" value="<?= santzar($auth->email)?>">
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Contraseña" name="password">
    </div>

    <p class="campo">
        <!-- <input type="submit" class="boton" value="Iniciar Sesión"> -->
        <button type="submit" class="boton">Iniciar Sesión</button>
    </p>
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
    <a href="/olvide">¿Olvidaste tu Contraseña?</a>
</div>