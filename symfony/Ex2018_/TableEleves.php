<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 12.12.17
 * Time: 16:10
 */
include_once 'Eleve.php';

class TableEleves
{
    public $tabEleves = [];
    public function genererEleve($nombre){
        for($i=0;$i<$nombre;$i++){
            $tabEleves[$i] = $this->Eleve::getNomComplet();
        /*    for($j=0;$j<$nombre;$j++){
                $tabEleves[$i][$j] = $this->getAdresse();
            } */
            
        }
        return $this->TableEleves::$tabEleves;
    }
}
varDumptabEleves;