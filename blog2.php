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
                <a href="blog.php">Blog</a>
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
    <div class="blog-post">
        <div class="image-container">
            <img src="img/importancia de brecha.png" alt="Imagen del blog">
        </div>
        <div class="content">
            <h2>La importancia de reducir las brechas de género</h2>
            <p>En la actualidad, el tema de la igualdad de género cada vez se torna más importante y relevante en la sociedad. A pesar de los…</p>
            <p>Por kalorenabs / 12 de Marzo de 2023</p>
            <a href="https://mujeres-violeta.com/2023/03/12/la-importancia-de-reducir-las-brechas-de-genero/" class="boton">Leer más</a>
        </div>
    </div>

    <div class="blog-post">
        <div class="image-container">
            <img src="img/es lo mismo sexo que genero.png" alt="Imagen del blog">
        </div>
        <div class="content">
            <h2>Hábitos para el Crecimiento Personal</h2>
            <p>Un hábito según la RAE, es un modo especial de proceder o conducirse adquirido por repetición de actos iguales y/o semejantes originado por tendencias instintivas. …</p>
            <p>Por kalorenabs / 10 de Junio de 2021</p>
            <a href="https://mujeres-violeta.com/2021/06/10/habitos-para-el-crecimiento-personal/" class="boton">Leer más</a>
        </div>
    </div>

    <div class="blog-post">
        <div class="image-container">
            <img src="img/sorority7-1.webp" alt="Imagen del blog">
        </div>
        <div class="content">
            <h2>Sororidad en Acción</h2>
            <p>Y si la vida nos invita a generar uniones y vínculos que nos permitan avanzar como un equipo de Mujeres que se apoyan para crecer.…</p>
            <p>Por kalorenabs / 3 de Junio de 2021</p>
            <a href="https://mujeres-violeta.com/2021/06/03/sororidad-en-accion/" class="boton">Leer más</a>
        </div>
    </div>

    <div class="blog-post">
        <div class="image-container">
            <img src="img/Mujeres-Violeta-Liderazgo-Ser.jpg" alt="Imagen del blog">
        </div>
        <div class="content">
            <h2>Liderazgo Transformador desde el SER</h2>
            <p>Para liderar a otros, debo iniciar liderándome. Y este proceso inicia desde nuestro autoconocimiento, al tener la capacidad de confrontar aquellas creencias, dudas y miedos…</p>
            <p>Por kalorenabs / 24 de Mayo de 2021</p>
            <a href="https://mujeres-violeta.com/2023/03/19/es-lo-mismo-sexo-que-genero/" class="boton">Leer más</a>
        </div>
    </div>



    <div class="pagination">
        <a href="blog.php" class="page-number">Anterior</a>
        <a href="blog2.php" class="page-number">2</a>
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