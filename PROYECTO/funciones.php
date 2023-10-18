<?php
if (isset($_GET['enviar'])) {
    $usuario = $_GET['Nombre'];
    $password = $_GET['clave'];
    $conexion = new mysqli('localhost', 'root', 'root', 'bd_proyecto');

    $consulta = "SELECT * FROM usuario WHERE Nombre='$usuario' AND clave='$password'";
    $resultado = $conexion->query($consulta);
    echo $consulta;
    if ($resultado == true) {
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {

                $nombres = $fila['Nombre'];
                $email = $fila['Correo_electronico'];
            }
            $resultado->close();
            header("location: resultado.php?mensaje=Nombre Usuario: " . $nombres . " " . "Dirección de correo:" . $email);
        } else {
            header('location: resultado.php?mensaje=fails');
        }
    }
}


function consultarUNO($nom, $cla)
{
    include("connect.php");

    $salida = "";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);
    $sql  = "select * from usuario where Nombre = '$nom' and clave = '$cla'";
    $resultado = $conexion->query($sql);
    //echo $sql;

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= 'ID USUARIO :'.$fila[0] . '<br>';
        $salida .= 'HOLA.. '.$fila[1] . '<br>';
        $salida .= 'TU CORREO ES: '.$fila[2] . '<br>';
        $salida .= 'ESTAS SUSCRITO:'.$fila[3] . '<br>';
        $salida .= 'TIPO DE PLAN :'.$fila[4] . '<br>';
        $salida .= 'CONTRASEÑA :'.$fila[5] . '<br>';
    }

    return $salida;
}
