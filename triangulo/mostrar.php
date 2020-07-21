<?php

require_once 'triangulo.php';

$triangulo = new Triangulo();
$triangulo->setBase($_POST['base']);
$triangulo->setAltura ($_POST['altura']);
$triangulo->imprimir ();
$triangulo->area ();

