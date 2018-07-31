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
            $sql = "select * from persona";
            $result=$conn->query($sql);

        } catch (Exception $e)
        {
            $error = $e->getMessage();
        }
        try {
            require_once('conexion.php');           
             $sql2 = "select * from estudiante";
             $result2=$conn->query($sql2);
        } catch (Exception $e)
        {
            $error = $e->getMessage();
        }
        ?>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup" onclick="mostrardos()">Registrarse</a></li>
        <script type="text/javascript">
            function mostrar(){
            document.getElementById('login').style.display = 'block';
            document.getElementById('signup').style.display = 'none';}
        </script>
        <li class="tab"><a href="#login" onclick="mostrar()">Iniciar Sesión</a></li>
         <script type="text/javascript">
            function mostrardos(){
            document.getElementById('signup').style.display = 'block';
            document.getElementById('login').style.display = 'none';}
        </script>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
            <center><h1>Sign Up for Free</h1></center>
          
          <form action="agregar_estu.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              
                  <h3>Nombre<span class="req">*</span></h3> 
              
                <input type="text" required autocomplete="off" name="nombre" />
            </div>
        
            <div class="field-wrap">
              
                <h3>Apellido<span class="req">*</span></h3>
              
                <input type="text" required autocomplete="off" name="apellido"/>
            </div>
          </div>
              
               <div class="field-wrap">
            
                   <h3>Cedula<span class="req">*</span></h3> 
              <input type="text" required autocomplete="off" name="cedula" />
          </div>
              
          <div class="field-wrap">
            
              <h3>Código<span class="req">*</span></h3> 
              <input type="text"required autocomplete="off" name="codigo" />
          </div>
              
          <div class="field-wrap">
            
              <h3>Fecha de nacimiento<span class="req">*</span></h3>
           
              <input type="date"required autocomplete="off" name="fecha" />
          </div>
              
          <div class="field-wrap">
            
              <h3>Seleccione su Genero<span class="req">*</span></h3> 
             <br>
              <br>

            <input type="radio" name="genero" value="1">   Masculino

            <input type="radio" name="genero" value="1">   Femenino
          </div>

          <div class="field-wrap">
           
              <h3>Correo Electronico<span class="req">*</span></h3>  
            
              <input type="email" required autocomplete="off" name="correo"/>
          </div>
          
          <div class="field-wrap">
                <h3>Contraseña<span class="req">*</span></h3> 
              <input type="password" required autocomplete="off" name="contrasena" />
          </div>
          
          <button class="button button-block"/><INPUT TYPE="submit" NAME="accion" VALUE="Registrase"></button>
          
          </form>

        </div>
        
        <div id="login">   
            <center><h1> Bienvenido Otra Vez!</h1></center>
          
            <form action="iniciar_sesion.php" method="post">
          
            <div class="field-wrap">
            <h3>Correo: <span class="req">*</span></h3>
            <input type="email" required autocomplete="off" name="correo"/>
          </div>
          
          <div class="field-wrap">
            <h3>Contraseña: <span class="req">*</span></h3>
            <input type="password" required autocomplete="off" name="contrasena"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" name="accion" class="button button-block"/><INPUT TYPE="submit" NAME="accion" VALUE="Iniciar Sesión"></button>
          
          </form>

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