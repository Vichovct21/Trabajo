<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violeta HUB</title>
    <link rel="stylesheet" type="text/css" href="estilos/blog.css">
    <link rel="icon" href="img/MV.png" type="image/x-icon">
</head>
<body>
<header>
        <nav>
            <div>
                <a href="index.php">
                    <img src="img/MV.png" alt="Logo de Mujeres Violeta" width="50px" height="22px">
                </a>
            </div>
            <div>
                <!-- Enlaces de navegación -->
                <a href="index.php">Sobre Nosotros</a>
                <a href="match.php">MATCH</a>
                <a href="/work/index.html">Blog</a>
            </div>
            <div>
            <?php                
session_start();
// Verificar si hay una sesión activa
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Si está logeado, muestra el enlace para cerrar sesión
    echo "<a href='registro_proyecto.html'>Registrar Proyecto</a>";
    echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesión</a>"; 
} else {
    // Si no está logeado, muestra el enlace para iniciar sesión
    echo "<a href='login.html'>Iniciar Sesión</a>";
}
?>
            </div>
        </nav>
    </header>
   <div class="titulo"> 
    <h1>BLOG Violeta</h1>
    <p>Bienvenidos a un espacio dedicado a la creatividad y expresión artística de mujeres.</p>
  </div>

    <div class="blog-post">
        <div class="image-container">
            <img src="img/blog1.png" alt="Imagen del blog">
        </div>
        <div class="content">
            <h2>Violeta Film Festival, por más mujeres en el cine</h2>
            <p>En el sector de las artes y los festivales de cine, aún es baja la participación de mujeres.  En Colombia…</p>
            <p>Por kalorenabs / 19 de September de 2023</p>
            <a href="https://violetafilmfest.com/" class="boton">Leer más</a>
        </div>
    </div>


 <div class="blog-post">
    <div class="image-container">
        <img src="img/WEF-Panel-5-770x470.webp" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>CORRESPONSABLES</h2>
        <p>Llega a Bogotá el evento que se ha celebrado en más de 30 países a nivel internacional y que los próximos 27 y 28 de Julio en la ciudad de Bogotá.</p>
        <p>Por kalorenabs / 17 de Agosto de 2023</p>
        <a href="https://yulder.co/el-empoderamiento-economico-femenino-eje-tematico-del-wef-colombia-2023/" class="boton">Leer más</a>
    </div>
</div>

 <div class="blog-post">
    <div class="image-container">
        <img src="img/Panel-final-WEB-Colombia-768x391.jpg" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>LA NOTA ECONÓMICA</h2>
        <p>La IV versión del WEF Colombia 2023, puso sobre la mesa una propuesta disruptiva e innovadora, puesto que su agenda completa abarcó 6 días. La agenda arrancó con el WEF itinerante, realizando 11 conferencias en los planteles educativos de siete universidades de Bogotá, las cuales convocaron docentes y estudiantes para escuchar las ponencias y conferencias …</p>
        <p>Por kalorenabs / 17 de Agosto de 2023</p>
        <a href="https://lanotaeconomica.com.co/movidas-empresarial/seis-dias-de-empoderamiento-femenino-en-el-women-economic-forum-colombia-2023/" class="boton">Leer más</a>
    </div>
</div>

<div class="blog-post">
    <div class="image-container">
        <img src="img/las dos orilas.webp" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>LAS DOS ORILLLAS / LA NOTA CIUDADANA</h2>
        <p>Fecha: 2 de febrero de 2024</p>
        <p>Por kalorenabs / 17 de Agosto de 2023</p>
        <a href="https://www.las2orillas.co/evento-mundial-de-mujeres-lideres-llega-a-bogota/" class="boton">Leer más</a>
    </div>
</div>

<div class="blog-post">
    <div class="image-container">
        <img src="img/Panel-final-WEB-Colombia-768x391.jpg" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>¡Destacadas líderes colombianas e internacionales se unen al Women Economic Forum – WEF LATAM Colombia 2023 para impulsar la equidad y la sostenibilidad!</h2>
        <p>El Women Economic Forum – WEF LATAM Colombia 2023 está listo para recibir a algunas de las voces más influyentes del mundo en la lucha…</p>
        <p>Por kalorenabs / 9 de Junio de 2023</p>
        <a href="https://mujeres-violeta.com/2023/06/09/destacadas-lideres-colombianas-e-internacionales-se-unen-al-women-economic-forum-wef-latam-colombia-2023-para-impulsar-la-equidad-y-la-sostenibilidad/" class="boton">Leer más</a>
    </div>
</div>

<div class="blog-post">
    <div class="image-container">
        <img src="img/Karen-Bruges-Mujeres-Violeta-Academia-Violeta-WEF-Latam-Colombia.jpg" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>Comunicado</h2>
        <p>La colombiana Karen Brugés nombrada Global Chair para Mentoring & Motivation del G100: Grupo de 100 Líderes Mundiales • Karen Brugés, una destacada líder en…</p>
        <p>Por kalorenabs / 18 de Mayo de 2023</p>
        <a href="https://mujeres-violeta.com/2023/05/18/comunicado/" class="boton">Leer más</a>
    </div>
</div>

<div class="blog-post">
    <div class="image-container">
        <img src="img/es lo mismo sexo que genero.png" alt="Imagen del blog">
    </div>
    <div class="content">
        <h2>¿Es lo mismo sexo que género?</h2>
        <p>Es importante entender que sexo y género son conceptos diferentes, aunque a menudo se utilizan indistintamente en el lenguaje cotidiano. El sexo se refiere a…</p>
        <p>Por kalorenabs / 19 de Marzo de 2023</p>
        <a href="https://mujeres-violeta.com/2023/03/19/es-lo-mismo-sexo-que-genero/" class="boton">Leer más</a>
    </div>
</div>


<div class="pagination">
    <a href="blog.php" class="page-number">1</a>
    <a href="blog2.php" class="page-number">2</a>
    <a rel="next" class="next" href="blog2.php">Siguiente »</a>
</div>

<!-- Pie de pagina -->
<footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">Mujeres Violeta</h1>
          
      <h2>Contacto</h2>
      
      <address>
          Cajicá, Cundinamarca, Colombia<br>
            
        <a class="footer__btn" href="MujeresVioleta:karen.bruges@mujeres-violeta.com">Correo Electrónico</a>
      </address>
    </div>
    
    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Redes Sociales</h2>
  
        <ul class="nav__ul">
          <li>
            <a href="#">Facebook</a>
          </li>
  
          <li>
            <a href="#">Instagram</a>
          </li>
              
          <li>
            <a href="#">YouTube</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Nosotras</h2>
        
        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Fundación Mujeres Violeta</a>
          </li>
          
          <li>
            <a href="#">WEF Colombia</a>
          </li>
          
          <li>
            <a href="#">Mujeres Violeta</a>
          </li>
        </ul>
      </li>
      
      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>
        
        <ul class="nav__ul">
          <li>
            <a href="#">Politicas de Privacidad</a>
          </li>
          
          <li>
            <a href="#">Términos de Uso</a>
          </li>
          
          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>
    
    <div class="legal">
      <p>&copy; 2024 Mujeres Violeta. Todos los derechos reservados</p>
      
      <div class="legal__links">
        <span>Hecho con <span class="heart">♥</span> Vimax</span>
      </div>
    </div>
  </footer>

</body>
</html>