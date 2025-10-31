<?php

namespace App\Controller;

use App\Interface\ControllerInterface;
use App\Model\UserModel;
use Ramsey\Uuid\Uuid;
use App\Class\User;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControllerInterface
{

    function index()
    {
        $usuarios = UserModel::getAllUsers();
        include_once DIRECTORIO_USER_BACKEND."allusers.php";

        //return json_encode($usuario1);
    }

    function show($id)
    {
        if(isset($_SESSION['username'])){
            //Muestro la vista con los datos del usuario
        }else{
            //Muestro una vista de no se puede acceder a estos datos
        }
        return "Estos son los datos del usuario $id";
    }

    function store()
    {

        $usuario=User::validateUserCreation($_POST);

        $_SESSION['usuario']=$usuario;
        if($usuario->getType()->name=="ADMIN"){
            $usuarios = UserModel::getAllUsers();
            include_once "app/Views/backend/userpanel.php";
        }else{
            var_dump($_SESSION);
            /*var_dump(empty($_SESSION['usuario']));*/
        }


    }

    function update($id)
    {
        return "El usuario $id ha sido modificado";
        // en caso de error: $editData=[];
        //Leo del fichero input los datos que me han llegado en la petición PUT
        parse_str(file_get_contents("php://input"), $editData);

        //Añado el uuid a los datos que me han llegado en la petición PUT
        $editData['uuid']=$id;

        //Valido los datos que me han llegado en la petición PUT
        $usuario = User::validateUserEdit($editData);

        //TODO guardo el usuario actualizado en la base de datos

        //Muestro los datos del usuario o los errores en la petición si los hay
        var_dump($usuario);
    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    function create()
    {
        include_once DIRECTORIO_USER_BACKEND."register.php";

    }

    function edit($id)
    {
        // Recuperar los datos de un usuario del Modelo
        $usuario = UserModel::getUserById($id);

        // Llamar a la vista que me muestre los datos del usuario
        include_once DIRECTORIO_USER_BACKEND."editUser.php";

    }

    function verify(){
        /*$_POST['username'];
        $_POST['password'];*/
        /*var_dump(password_verify($_POST['password'],$hash));*/

        /*var_dump($_SESSION);*/
        if (isset($_SESSION['usuario']) && isset($_POST['username'], $_POST['password'])) {
            $usuario = $_SESSION['usuario'];
            $hash=password_hash($usuario->getPassword(),PASSWORD_DEFAULT);

            // Comprobar si el nombre de usuario coincide
            /*if ($usuario->getUsername() === $_POST['username']) {

                // Verificar contraseña: primero la escrita, luego la almacenada (hash)
                if (password_verify($_POST['password'], $hash)) {
                    echo "Login correcto";
                } else {
                    echo "Login incorrecto (contraseña errónea)";
                }
            } else {
                echo "Login incorrecto (usuario no coincide)";
            }*/
            if($usuario->getUsername() === $_POST['username'] && password_verify($_POST['password'], $hash)){
                echo "Login correcto";
            } else{
                echo "ERROR, no te voy a decir dónde, búscate la vida puto retrasado";
            }
        } else {
            echo "Faltan datos o no hay sesión activa.";
        }


        /*var_dump($_POST);
        $idUsuario="706fd07e-d403-45bb-8a79-aca9886aae1d";

        //Petición a la base de datos para comprobar si el usuario existe


        //Si es correcto el login
        $_SESSION['username']=$_POST['username'];
        $_SESSION['uuid']=$idUsuario;

        var_dump($_SESSION);*/
    }

    function logout(){
        session_destroy();
    }

    function show_login(){
        include_once DIRECTORIO_USER_BACKEND."login.php";
    }

}