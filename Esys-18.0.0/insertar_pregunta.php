<?php
$titulo=$_POST[titulo];
$contenido=$_POST[contenido];
$codigo=4;
$fecha=date("Y-m-d");
$palabra=$_POST[palabra];
try {
    require_once('conexion.php');
    $sql="insert into pregunta(titulo,contenido,fecha,palabraclave,codigo_estudiante) 
        values ('$titulo','$contenido','$fecha','$palabra','$codigo')";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
header("Location: foro.php");
?>