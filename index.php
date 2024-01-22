<?php

require_once 'Alunno.php';


$alunni = array();


$alunno1 = new Alunno();
$alunno1->setNome('Mario');
$alunno1->setCognome('Rossi');
$alunno1->setEta(18);
$alunni[] = $alunno1;

$alunno2 = new Alunno();
$alunno2->setNome('Giulio');
$alunno2->setCognome('Neri');
$alunno2->setEta(20);
$alunni[] = $alunno2;


foreach ($alunni as $alunno) {
    $alunno->stampa();
}

?>