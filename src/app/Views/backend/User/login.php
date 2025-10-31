<?php
$titulo="Backend Netflix";
include_once(DIRECTORIO_TEMPLATE_BACKEND.'head.php');
include_once(DIRECTORIO_TEMPLATE_BACKEND.'hamburger.php');
include_once(DIRECTORIO_TEMPLATE_BACKEND.'header.php');
include_once(DIRECTORIO_TEMPLATE_BACKEND.'aside.php');
?>

<div>
        <h1>Bienvenido a Netflix</h1>
        <form action="/user/login" method="post">
            <label for="inputUsername">Nombre de Usuario</label>
            <input type="text" id="inputUsername" name="username" placeholder="Introduce tu usuario" aria-label="Input de Username">

            <label for="inputPassword">Introduce tu contraseña</label>
            <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña" aria-label="Input de Password">

            <input type="submit" value="Iniciar Sesión">
        </form>
</div>

<?php
include_once(DIRECTORIO_TEMPLATE_BACKEND.'footer.php');