<?php
    function generatePassword(int $caracteres):string{

        return "Tu contraseña de $caracteres caracteres es: ";
    }

    /*
    //El declare sirve para que todos los tipos estén declarados y no puedan ser de cualquier tipo
    declare(strict_types=1);
    //Ejemplo de programación web avanzade para generar contraseñas
    const SOLO_NUMEROS = 1;
    const NUMEROS_LETRAS = 2;

    function generatePassword(int $caracteres, int $condiciones=NUMEROS_LETRAS):string{
        //La condición se haria con un match en el que depende del numero de condicion generaría una contraseña u otra

        return "Tu contraseña de $caracteres caracteres es: ";
    }

    function ejemploParametros(string $mensaje, int $numero1=6){

    }

    function ejemploParametrosVariables (...$parametros){

    }

    ejemploParametrosVariables(15,266,"HOLA");
    ejemploParametros("Hola");
    generatePassword(16, NUMEROS_LETRAS);
    */