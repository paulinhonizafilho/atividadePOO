<?php

require_once 'media.php';

$media = new Media();
$media->setNota1($_POST['nota1']);
$media->setNota2 ($_POST['nota2']);
$media->setNota3 ($_POST['nota3']);
$media->setNota4 ($_POST['nota4']);
$media->imprimir ();
$media->media ();