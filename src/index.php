<?php
include_once "vendor/autoload.php";
include_once "env.php";
include_once "auxiliar/funciones.php";

//Directorio para inserta o utilizar la clase RouteCollector
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

//instancia una variable de la calse RouteCollector
$router = new RouteCollector();

//Definir las rutas de mi aplicación

$router->get('/',function(){
    return 'Estoy en la página principal';
});

$router->get('/administrador',function(){
    include_once "admin/welcome.php";
});

$router->get( '/login',function(){
    include_once "views/indice.php";
});
$router->post('/login', function (){
    var_dump($_POST);
});

$router->delete('/pelicula/{id}',function ($id){
    echo "La pelicula a borrar tiene el id $id";
});

$router->get('/calculodni',function (){
    if(isset($_GET['dni'])){
        echo calcularLetraDNI($_GET['dni']);
    }else{
        echo "Parámetro incorrecto";
    }
    
});

$router->get('/administrador/add-pelicula', function (){
    include_once "admin/views/add-pelicula.php";
});

$router->post('/pelicula', function (){
    #var_dump($_POST);
    #echo json_encode($_POST);

});

$router->get('/pass',function (){
    echo "Se va a generar una contraseña</br>";
    var_dump($_GET);

    if(isset($_GET['num1'])){
        echo generatePassword($_GET['num1']);
    }else{
        echo "Tienes que pasarme un parámetro llamado num1";
    }
});



//Resolver la ruta que debemos cargar
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch (HttpRouteNotFoundException $e){
    return include_once "views/404.html";
}

// Print out the value returned from the dispatched function
echo $response;
