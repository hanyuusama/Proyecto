<?php
$ced_p=$GET[ced_p];
echo $ced_p;
$nombre=$_GET[nombre];
$apellido=$_GET[apellido];
$fecha=$_GET[fecha];
$genero=$_GET[genero];
$corre=$_GET[correo];

try {
    require_once('conexion.php');
    $sql="UPDATE persona SET nombre_p='$nombre',apellido_p='$apellido', fechanac_p='$fecha',genero_p='$genero',correo_p='$corre', 
                                WHERE ced_p='$ced_p'";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}

header("Location: modifica.php");
?>