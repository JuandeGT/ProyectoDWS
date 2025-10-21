<?php

namespace App\Controller;

use App\Interface\ControllerInterface;
use App\Model\userModel;
use Ramsey\Uuid\Uuid;
use App\Class\User;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControllerInterface
{

    function index()
    {
        $usuarios = UserModel::getAllUsers();
        include_once DIRECTORIO_VISTAS_ADMINISTRACION."allusers.php";

        //return json_encode($usuario1);
    }

    function show($id)
    {
        return "Estos son los datos del usuario $id";
    }

    function store()
    {

        var_dump(User::validateUser($_POST));

    }

    function update($id)
    {
        echo "$id";
        parse_str(file_get_contents("php://input"), $editData);
        var_dump($editData);
    }

    function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    function create()
    {
        return "formulario para crear usuario";
    }

    function edit($id)
    {
        // TODO: Implement edit() method.
    }
}