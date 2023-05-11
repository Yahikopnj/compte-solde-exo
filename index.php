<?php

require_once("./Compte.php");

$comptea = new Compte();

$comptea->name = "jean";
$comptea->solde =1000;
 
var_dump($comptea);

$comptea->crediter(100);

$comptea->affiche();

$comptea->debiter(10);

$comptea->affiche();
?>