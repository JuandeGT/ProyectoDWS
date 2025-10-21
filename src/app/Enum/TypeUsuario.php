<?php

namespace App\Enum;

enum TypeUsuario
{
    case NORMAL;
    case ANUNCIOS;
    case ADMIN;

    public static function stringToUserType(string $type):TypeUsuario{

        return match (strtolower($type)){
            "normal"=>TypeUsuario::NORMAL,
            "anuncios"=>TypeUsuario::ANUNCIOS,
            "admin"=>TypeUsuario::ADMIN,
            default=>TypeUsuario::NORMAL
        };

    }

}
