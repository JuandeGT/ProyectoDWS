<?php

namespace App\Model;

use App\Class\User;
use Ramsey\Uuid\Uuid;

use \PDO;

class userModel
{
    public static function getAllUsers():?array{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1","juande","ednauj");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $error){
            echo $error;
            return null;
        }
        $sql = "SELECT * FROM user";
        $sentenciaPrepareda = $conexion->prepare($sql);

        $sentenciaPrepareda->execute();

        $resultado = $sentenciaPrepareda->fetchAll(PDO::FETCH_ASSOC);

        if($resultado){
            $usuarios=[];
            foreach ($resultado as $user){
                $usuarios[]=User::createFromArray($user);
            }
            return $usuarios;
        }else{
            return null;
        }
    }

    public static function getUserById(string $id):?User{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1","juande","ednauj");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $error){
            echo $error;
            return null;
        }
        $sql = "SELECT * FROM user WHERE uuid = $id,";
        $sentenciaPrepareda = $conexion->prepare($sql);

        $sentenciaPrepareda->execute();

        $resultado = $sentenciaPrepareda->fetchAll(PDO::FETCH_ASSOC);

        if($resultado){
            foreach ($resultado as $user){
                $usuario=User::createFromArray($user);
            }
            var_dump($usuario);
            return $usuario;
        }else{
            return null;
        }
    }

    /*public static function getUserByUsername(string $username):?User{

    }

    public static function getUserByEmail(string $email):?User{

    }*/

    public static function saveUser(User $user):bool{
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=proyecto1","juande","ednauj");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $error){
            echo $error;
            return false;
        }
        $sql = "INSERT INTO user ( uuid, username, password, email, edad, type) values (:uuid,:username,:password,:email,:edad,:type)";
        $sentenciaPrepareda = $conexion->prepare($sql);

        $sentenciaPrepareda->bindValue('uuid',$user->getUuid());
        $sentenciaPrepareda->bindValue('username',$user->getUsername());
        $sentenciaPrepareda->bindValue('password',$user->getPassword());
        $sentenciaPrepareda->bindValue('email',$user->getEmail());
        $sentenciaPrepareda->bindValue('edad',$user->getEdad());
        $sentenciaPrepareda->bindValue('type',$user->getType()->name);

        $sentenciaPrepareda->execute();

        // Asigno el id generado en la BBDD al usuario
        $id = $conexion->lastInsertId();
        $user->setId($id);

        /*if ($sentenciaPrepareda->rowCount()>0){
            return true;
        }
        else{
            return false;
        }*/
        return $sentenciaPrepareda->rowCount() > 0;
    }


}