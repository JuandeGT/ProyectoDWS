<?php

$titulo="Añadir pelicula";
include_once("views/template/head.php");
include_once("views/template/header.php");
$tituloSection = "Añadir Película";
include_once("views/template/main.php");

?>

<form action="/pelicula" method="post">
<div class="mb-3">
    <label for="exampleFormControlInputTitulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Introduce el título">
</div>
<div class="mb-3">
    <label for="FormControlInputFecha" class="form-label">Example textarea</label>
    <input type="date" class="form-control" name="fecha_estreno" id="FormControlInputFecha" rows="3"></input>
</div>
    <div class="mb-3">
        <label for="FromControlSelectGenero" class="form-label">Géreno</label>
        <select class="form-select" name="genero" id="FromControlSelectGenero" aria-label="Default select example">
            <option selected value="accion">Acción</option>
            <option value="drama">Drama</option>
            <option value="comedia">Comedia</option>
            <option value="slasher">Slasher</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="Enviar">
    </div>
</form>

<?php


