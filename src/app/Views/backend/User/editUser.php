<html>
<head>
    <title>Modificar Usuario</title>
</head>
<body>

<h1>Bienvenido a Netflix</h1>
    <label for="inputUsername">Nombre de Usuario</label>
    <input type="text" id="inputUsername" name="username" placeholder="Introduce tu usuario" aria-label="Input de Username" value="<?=$usuario->getUsername()?>" required>

    <label for="inputPassword">Introduce tu contraseña</label>
    <input type="password" id="inputPassword" name="password" placeholder="Introduce tu contraseña" aria-label="Input de Password" value="<?=$usuario->getPassword()?>" required>

    <label for="inputEmail">Introduce tu correo</label>
    <input type="email" id="inputEmail" name="email" placeholder="Introduce tu email" aria-label="Input de Email" value="<?=$usuario->getEmail()?>" required>

    <label for="inputEdad">Edad de Usuario</label>
    <input type="number" id="inputEdad" name="edad" placeholder="Introduce tu edad" aria-label="Input de Edad">

    <label for="inputType">Tipo de Usuario</label>
    <select type="text" id="inputType" name="type" placeholder="Introduce tu tipo" aria-label="Input de Type" value="Normal">
        <option value="normal">Normal</option>
        <option value="anuncios">Anuncios</option>
        <option value="admin">Admin</option>
    </select>

    <button type="button" class="btn btn-primary" onclick="" >Modificar Usuario</button>

    <script>

    </script>

</form>
</body>
</html>