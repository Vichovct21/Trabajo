<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violeta HUB</title>
    <link rel="stylesheet" type="text/css" href="estilos/styles.css">
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
                <a href="index.php">Sobre Nosotros</a>
                <a href="match.php">MATCH</a>
                <a href="blog.php">Blog</a>
            </div>
            <div>
                <?php
                    session_start();
                    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                        echo "<a href='registro_proyecto.html'>Registrar Proyecto</a>";
                        echo "<a href='procesos/cerrar_sesion.php'>Cerrar Sesión</a>"; 
                    } else {
                        echo "<a href='login.html'>Iniciar Sesión</a>";
                    }
                ?>
            </div>
        </nav>
    </header>
    <img class="banner" src="img/jenny-ueberberg-BaSeK7rwc1A-unsplash.jpg" alt="Imagen Header">
    <main> 
        <section class="content-text-1">
            <h2>¿Qué es el Ecosistema de Innovación y Creatividad?</h2>
            <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza clásica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera más de 2000 años de antigüedad...</p>
        </section>
        
        <section class="content-image">
            <img src="img/sam-mcnamara-p0ZvBVpW3KY-unsplash.jpg" alt="Imagen Derecha" style="width: 100%; height: auto;">
        </section>
    </main>
    <div>
        <section id="timeline">
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/801/801/nature)"></div>
              
              <div class="tl-year">
                <p class="f2 heading--sanSerif">2024</p>
              </div>
          
              <div class="tl-content">
                <h1>Objetivos</h1>
                <p>Biodiversidad
                    Cambio climático
                    Desarrollo Sostenible</p>
              </div>
          
            </div>
          
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/802/802/nature)"></div>
              
              <div class="tl-year">
                <p class="f2 heading--sanSerif">2025</p>
              </div>
          
              <div class="tl-content">
                <h1 class="f3 text--accent ttu">Objetivos</h1>
                <p>Seguridad alimentaria, nutrición, salud y bienestar</p>
              </div>
          
            </div>
          
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/803/803/nature)"></div>
              
              <div class="tl-year">
                <p class="f2 heading--sanSerif">2026</p>
              </div>
          
              <div class="tl-content">
                <h1 class="f3 text--accent ttu">Objetivos</h1>
                <p>STEAM- Ciencia, Tecnología, Ingeniería, Artes y Matemáticas</p>
              </div>
          
            </div>
          
            <div class="tl-item">
              
              <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>
              
              <div class="tl-year">
                <p class="f2 heading--sanSerif">2027</p>
              </div>
          
              <div class="tl-content">
                <h1 class="f3 text--accent ttu">Objetivos</h1>
                <p>Economías emergentes y tendencias</p>
              </div>
          
            </div>
            <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>
                
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2028</p>
                </div>
            
                <div class="tl-content">
                  <h1 class="f3 text--accent ttu">Objetivos</h1>
                  <p>Tecnología, Medio Ambiente, Desarrollo Humano</p>
                </div>
            
              </div>
              <div class="tl-item">
              
                <div class="tl-bg" style="background-image: url(https://placeimg.com/800/800/nature)"></div>
                
                <div class="tl-year">
                  <p class="f2 heading--sanSerif">2029</p>
                </div>
            
                <div class="tl-content">
                  <h1 class="f3 text--accent ttu">Objetivos</h1>
                  <p>Paz, alianzas y resultados para 2030</p>
                </div>
              </div>
              </section>
    </div>
    <div>
        <main> 
            <section class="content-text">
                <h2>¿Qué es <strong>VIOLETA HUB</strong>?</h2>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...</p>
            </section>
            
            <section class="content-image">
                <img src="img/becca-tapert-u5e1kqW6E3M-unsplash.jpg" alt="Imagen Derecha" style="width: 100%; height: auto;">
            </section>
        </main>
    </div>
    <div>
        <h2 class="text-center">Aliados y Colaboradores</h2>
        <section class="content-image-container">
            <div id="carrusel-container">
                <div class="circle">
                    <img src="img/logo1.png" alt="Imagen 1">
                </div>
                <div class="circle">
                    <img src="img/logo2.jpg" alt="Imagen 2">
                </div>
                <div class="circle">
                    <img src="img/logo3.png" alt="Imagen 3">
                </div>
                <div class="circle">
                    <img src="img/Procolombia-1.jpg" alt="Imagen 4">
                </div>
                <!-- Agrega más elementos según sea necesario -->
            </div>
        </section>
    </div>
    <h1 class="text-center">Fundadora</h1>
    <main> 
        <section class="content-image-izq">
            <img src="img/karen.png" alt="Imagen Izq" style="width: 100%; height: auto;">
        </section>
        <section class="content-text-izq">
            <h2>Biografía</h2>
            <p>
            <li>CEO Mujeres Violeta</li>
            <li>Co-Fundadora Fundación Mujeres Violeta</li>
            <li>Presidenta WEF Colombia</li>
            <li>Directora General WEF Los Angeles, California</li>
            </p>
            <p>Consultora y Formadora Empresarial en temas de Igualdad de Género con énfasis en Sororidad, Diversidad y Responsabilidad Social / Speaker Internacional / Multipremiada<br>
            <br>
            <strong>Global Chair G100 Mentoring & Motivation</strong><br>
            <strong>Co-creadora Violeta Film Fest </strong><br>
            <strong>Creadora Latin American Sustainable</strong><br>
            <strong>Fashion Week LASFW</strong></p>
        </section>
    </main>
    <footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Mujeres Violeta</h1>
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
