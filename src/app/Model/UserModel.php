<?php

namespace App\Model;

use App\Class\User;
use Ramsey\Uuid\Uuid;

class userModel
{
    public static function getAllUsers():array{
        $usuario1= new User(
            Uuid::uuid4(),
            "pabloM",
            "molbap",
            "pablom@gmail.com"
        );
        $usuario2= new User(
            Uuid::uuid4(),
            "Laura",
            "arual",
            "laura@gmail.com"
        );
        $usuarios=[$usuario1,$usuario2];

        return $usuarios;
    }
}