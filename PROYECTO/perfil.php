<?php
include('funciones.php');

$nom = $_GET['NOM'];
$cla = $_GET['CLA'];

echo consultarUNO($nom, $cla);
?>

<a href="menu.php">Volver</a>