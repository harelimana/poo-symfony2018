<?php
/**
 * Created by PhpStorm.
 * User: axxa
 * Date: 18.12.17
 * Time: 20:31
 */
require_once __DIR__.'Operations.php';
require_once __DIR__.'OperationSolver.php';

$generator = new Operations();

$generator->genererOperations(12);
$operations = $generator->getOperations();

foreach ($operations as $operation) {
    echo $operation . "\n";
}

var_dump(OperationSolver::solve($operations));