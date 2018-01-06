<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 12.12.17
 * Time: 19:20
 */

include_once 'Eleve.php';
include_once 'TableEleves.php';

$eleve = new Eleve;

$eleve->genererEleve(1);

$eleve->setNom("khaddafi");
$eleve->setPrenom("Mouamar");
$eleve->setCp("6000");
$eleve->setRue("Rue Nanon");
$eleve->setVille("Gnanon");
