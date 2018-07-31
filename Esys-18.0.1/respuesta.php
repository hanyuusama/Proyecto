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
    $id= $_GET['Id_pregunta'];
        try {
            require_once('conexion.php');
            $sql = "select * from pregunta where (Id_pregunta=$id)";
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
          <h1><a href="pag_p.html">Foro<span class="logo_colour"> E-SyS</span></a></h1>
          <h2>Escuela de Sistemas y Software.</h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="pag_p.html">Inicio</a></li>
          <li><a href="foro.php">Foro</a></li>
          <li><a href="page.php">Noticias</a></li>
          <li><a href="another_page.php">Perfiles</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div class="gallery">
        <ul class="images">
          <li class="show"><img width="950" height="300" src="images/index1.png" alt="photo_one" /></li>
          <li><img width="950" height="300" src="images/index2.jpg" alt="seascape" /></li>
          <li><img width="950" height="300" src="images/index3.jpg" alt="seascape" /></li>
        </ul>
      </div>
        
      <div class="content">
          <h1>Pregunta</h1>
          <center><TABLE  border=0 CELLSPACING=5 CELLPADDING=5 width="100%">
            <TR>
                <TD align="center">&nbsp;<h2>Título</h2>&nbsp;</TD>
                <TD align="center">&nbsp;<h2>Contenido</h2>&nbsp;</TD>
                <TD align="center">&nbsp;<h2>Fecha</h2>&nbsp</TD>
                
                
                       
                 <?php
                while($row = $result->fetch_array())
                {
                    printf("<tr><td>&nbsp;<center>%s&nbsp;</center></td>
                            <td>&nbsp;<center>%s&nbsp;</center></td>
                            <td>&nbsp;<center>%s&nbsp;</center></td>                            
                           </tr>",$row["titulo"],$row["contenido"],$row["fecha"]);
                }
                
                $result->close();
                $conn->close();
            ?>
            </tr>
                


              </table></center>  
          <br>
          <h1>Responder Pregunta</h1>
          <h2> Completa los campos</h2>
        <form action="insertar_respuesta.php" method="post">
          <div class="form_settings">
           
            <p><span>Contenido:</span><textarea type="text" rows="8" cols="50" name="contenido"></textarea></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input type="submit" name="accion" value="Responder" /></p>
          </div>
        </form>
      </div>
        <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>New Website Launched</h4>
          <h5>January 1st, 2012</h5>
          <p>2012 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        </div>
        <div class="sidebar">
          <h3>Enlaces Útiles</h3>
          <ul>
            <li><a href="https://www.espoch.edu.ec/"> ESPOCH </a></li>
            <li><a href="https://login.microsoftonline.com/d7f86710-01e1-461d-8599-758de4542e2b/oauth2/authorize?client_id=982ff87f-27ff-450f-b225-d1d36cc22368&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dhVA7fKWGnNz4nITbR4YonmqUa0Gd5A2za3dqA1XSUfXhYzWxIkoGEGJbqCWcyOpRmoW1NQ3mX8uaXR3e7AF3omvIsTrdLw20-oP3IykFGfh_tbyLWdJvTnY51SC_pmwrVrrfNVy_7tIZb1M2umyfqQ&nonce=636681858284031914.NjY4MGRkYmEtYjA5Zi00ZGUwLThlNGQtYTQ5YzJmZjc0Zjg5YThjYmNlNmQtOTU3OC00MjMyLWE1ZjktNTY1ZDJmMjE1Njc2"> Oasis </a></li>
            <li><a href="https://elearning.espoch.edu.ec/"> Aula Virtual </a></li>
            <li><a href="https://elearning.espoch.edu.ec/"> Calendario Académico </a></li>
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