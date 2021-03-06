<!DOCTYPE HTML>
<html>

<head>
  <title>E-SyS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
 <?php
        try {
            require_once('conexion.php');
            $sql = "select titulo, fecha from pregunta";
            $result=$conn->query($sql);

        } catch (Exception $e)
        {
            $error = $e->getMessage();
        }
        
        ?>
<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Foro<span class="logo_colour"> E-SyS</span></a></h1>
          <h2>Escuela de Sistemas y Software.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">Inicio</a></li>
          <li><a href="foro.php">Foro</a></li>
          <li><a href="page.php">Noticias</a></li>
          <li><a href="another_page.php">Perfiles</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div class="gallery">
        <ul class="images">
          <li class="show"><img width="950" height="300" src="images/1.jpg" alt="photo_one" /></li>
          <li><img width="950" height="300" src="images/2.jpg" alt="seascape" /></li>
          <li><img width="950" height="300" src="images/3.jpg" alt="seascape" /></li>
        </ul>
      </div>
        <h2> Publicar Pregunta </h2>
        <form action="insertar_pregunta.php" method="post">
          <div class="form_settings">
            <p><span>Título:</span><input type="text" name="titulo" value="" /></p>
            <p><span>Contenido:</span><textarea type="text" rows="8" cols="50" name="contenido"></textarea></p>
            <p><span>Palabra Clave:</span><input type="text" name="palabra" value="" /></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input type="submit" name="accion" value="Publicar" /></p>
          </div>
        </form>
      <div class="content">
          <center><TABLE  CELLSPACING=5 CELLPADDING=5 width="100%">
            <TR>
                <TD align="center">&nbsp;<h1>Título</h1></TD>
                <TD align="center">&nbsp;<h2>Fecha</h2>&nbsp;</TD>
                
           
            
                 <?php
                while($row = $result->fetch_array())
                {
                    printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>",$row["titulo"],$row["fecha"]);
                }
                
                $result->close();
                $conn->close();
            ?>
            </tr>
                


              </table></center>        
      </div>
        <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="#">First Link</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">And Another</a></li>
            <li><a href="#">One More</a></li>
            <li><a href="#">Last One</a></li>
          </ul>
        </div>
      </div>
      
    </div>
    <footer>
      <p>Copyright &copy; E-SyS | Facultad de Informática y Electrónica</p>
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




           

