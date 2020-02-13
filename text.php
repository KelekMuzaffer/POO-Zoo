<?php

class Text{
    private static $suffix = " €";
    const SUFFIX = " €";

    /* Version public d'une private qui retourne la class avec self
     public static function  publicwithZero($chiffre){
        return self :: withZero($chiffre);
    }
*/

    public static function  withZero($chiffre){
        if ($chiffre < 9){
            return '0' . $chiffre. self::SUFFIX;
        }
        else{
            return $chiffre.self::$suffix;
        }

    }

}