<?php
$correo=$_POST[correo];
$contrasena=$_POST[contrasena];
try {
    require_once('conexion.php');
    $sql="select correo_p, contrasena, ced_p from persona inner join estudiante on ced_p=ced_e where correo_p = '$correo'";
    $result=$conn->query($sql);
    $datos=$result->fetch_assoc();
} catch (Exception $e) {
    $error = $e->getMessage();
}
if($correo= $datos['correo_p'] && $contrasena= $datos['contrasena'] ){
    session_start();
    $_SESSION['en_sesion'] = $datos['ced_p'];
    header("Location: pag_p.html");
}
?>