<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 19.12.17
 * Time: 00:02
 */

class OperationSolver
{
    public static $resultats = [];
    private static $foo = [];
    
    public static function solve($tableau)
    {
        self::$foo = array_map(function($item) {
            eval("\$resultat = ($item) + 0;"); //eval is not secure
            return self::$resultats[$item] = $resultat;
        }, $tableau);
        return self::$resultats;
    }
    
}