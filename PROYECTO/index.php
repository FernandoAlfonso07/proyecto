<?php
include('funciones.php');

$nom = $_GET['NOM'];
$cla = $_GET['CLA'];

echo "<a href='perfil.php?NOM=$nom&CLA=$cla'>INGRESAR</a>";
