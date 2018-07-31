<!DOCTYPE HTML>
<html>

<head>
  <title>E-SyS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/syle1.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  
</head>
  <div id="main">
    <header>
       <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php"><span class="logo_colour">E-SyS</span></a></h1>
          <h1>Escuela de Sistemas y Software.</h1>
          <aside >             
              
          </aside>         
         
        </div>
      </div>
        <div>
   
       <?php

try {
    require_once('conexion.php');
    $sql = "select * from persona where ced_p='0179296017'";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
        ?>
<div class="form">
      

      
      <div class="tab-content">
        <div id="signup">   
            <center><h1>MODIFICACIÓN DE DATOS</h1></center>
          
          <form action="guardar.php" method="get">
          
          <div class="top-row">
            <div class="field-wrap">
              
                  <h3>Nombre<span class="req">*</span></h3> 
              
                <input type="text" required autocomplete="off" name="nombre" value="<?php echo $datos['nombre_p']; ?>" />
            </div>
        
            <div class="field-wrap">
              
                <h3>Apellido<span class="req" >*</span></h3>
              
                <input type="text" required autocomplete="off" name="apellido"  value="<?php echo $datos['apellido_p']; ?>"/>
            </div>
          </div>
              
 
 
              
          <div class="field-wrap">
            
              <h3>Fecha de nacimiento<span class="req" >*</span></h3>
           
              <input type="date"required autocomplete="off" name="fecha" value="<?php echo $datos['fechanac_p']; ?>"/>
          </div>
              
          <div class="field-wrap">
            
              <h3>Seleccione su Genero<span class="req">*</span></h3> 
             <br>
              <br>

            <input type="radio" name="genero" value="1">   Masculino

            <input type="radio" name="genero" value="1">   Femenino
          </div>

          <div class="field-wrap">
           
              <h3>Correo Electronico<span class="req" >*</span></h3>  
            
              <input type="email" required autocomplete="off" name="correo" value="<?php echo $datos['correo_p']; ?>"/>
          </div>
          <?php echo $datos['ced_p']; ?>
           
          <button class="button button-block"/><INPUT TYPE="submit" NAME="accion" VALUE="Modificar datos"></button>
          <input type="hidden" name="ced_p" value="<?= $datos['ced_p']; ?>">
          </form>

        </div>
        
        <div id="login">   
            <center><h1> Bienvenido Otra Vez!</h1></center>
          
  

        </div>
        
      </div><!-- tab-content -->
      
</div>
        </div>
    <footer>
      <p>Copyright &copy; E-SyS | Facultad de Informática y Electrónica</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>