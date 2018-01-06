<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 18.12.17
 * Time: 20:30
 */

class Operations
{
    public $operators = ['+', '-', '/', '*'];
    private $operand1;
    private $operand2;
    private $operator;
    private $operations = [];
    
    public function constructOperation()
    {
        $this->operand1 = rand(1, 10);
        $this->operand2 = rand(1, 10);
        $this->operator = $this->operators[array_rand($this->operators, 1)];
        
        return $this->operand1 . ' ' . $this->operator . ' ' . $this->operand2;
    }
    
    public function genererOperations($quantite)
    {
        if (is_int($nombre)) {
            for ($i = 0; $i < $quantite; $i++) {
                $this->operations[$i] = $this->constructOperation();
                
            }
        } else {
            die("il ya erreur sur le nombre d'opérations fourni !")}
    }
    
    public function getOperations()
    {
        return $this->operations;
    }
    
    private function ajouterAddition()
    {
    
    }
    
    private function ajouterSoustraction()
    {
    
    }
    
    private function ajouterMultiplication()
    {
    
    }
    
    private function ajouterDivision()
    {
    
    }
}