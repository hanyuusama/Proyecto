<?php
$nombre=$_POST[nombre];
$apellido=$_POST[apellido];
$cedula=$_POST[cedula];
$codigo=$_POST[codigo];
$fecha=$_POST[fecha];
$genero=$_POST[genero];
$corre=$_POST[correo];
$contraseña=$_POST[contrasena];
try {
    require_once('conexion.php');
    $sql="insert into persona(ced_p, nombre_p, apellido_p, genero_p, fechanac_p, correo_p, contrasena,calificacion) 
        values ('$cedula','$nombre','$apellido','$genero','$fecha','$corre','$contraseña',1)";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
try {
    require_once('conexion.php');
    $sql2="insert into estudiante(c_estudiante,ced_e) 
        values ('$codigo','$cedula')";
    $result2=$conn->query($sql2);
} catch (Exception $e) {
    $error = $e->getMessage();
}

try {
               $nci = str_split($cedula);
               $len= count($nci);
              
               for($i=0;$i<($len-1);$i++)
               {
                   if($i%2==0)
                   {
                       $aux = ((intval($nci[$i]))*2);
                       
                       if($aux>10)
                       {
                           $aux-=9;
                       }
                       $sum+=$aux;  
                   }
                   else
                   {
                       $aux1 = ((intval($nci[$i]))*1);
                       
                       if($aux1>10)
                       {
                           $aux1-=9;
                       }
                       $sum+=$aux1;
                   }
                    
               }
               $dec=(((floor($sum/10))+1)*10);
               
               $ver=$dec - $sum;
               
               if($ver==$nci[9])
               {
                   printf("Cédula Correcta");
               }
               else
               {
                   printf("Datos Erróneos");
               }
               
               

            } catch (Exception $e)
            {
                $error = $e->getMessage();
            }
        
header("Location: pag_p.html");
?>