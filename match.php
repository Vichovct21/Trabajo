
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/match.css">
    <title>Violeta MATCH</title>
</head>
<body>
<header>
        <nav>
            <div>
                <a href="index.html">
                    <img src="img/MV.png" alt="Logo de Mujeres Violeta" width="50px" height="22px">
                </a>
            </div>
            <div>
                <!-- Enlaces de navegación -->
                <a href="index.html">Sobre Nosotros</a>
                <a href="match.php">MATCH</a>
                <a href="/work/index.html">Blog</a>
            </div>
            <div>
                <!-- Enlaces de login/register -->
                <a href="login.html">Login</a>
                <a href="registro_usuario.html">Register</a>
            </div>
        </nav>
    </header>
    <main>
    <div class="filtro">
        <h2>ENCUENTRA A TU ALIADO IDEAL </h2>
    </div>
    <div class="proyectos">
    <?php
include 'procesos/conexion.php';

// Consulta para obtener todos los proyectos
$sql = "SELECT * FROM proyecto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='proyecto'>";
        $imagen = htmlspecialchars($row["imagen"]);
        
        if (!empty($imagen) && file_exists($imagen)) {
            echo "<img src='" . $imagen . "' alt='Imagen del proyecto'>";
        } else {
            echo "No hay imagen disponible o la ruta es incorrecta";
        }

        echo "<h3>" . $row["nombre_proyecto"] . "</h3>";

        // Mostrar valoración con símbolos de estrellas
        $valoracion = $row["valoracion"];
        echo "<div class='rating'>";
        echo "<p>";
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $valoracion) {
                echo "⭐"; // Símbolo de estrella llena
            } else {
                echo "☆"; // Símbolo de estrella vacía
            }
        }
        echo "</p>";
        echo "</div>";
        echo "<p><strong>📍</strong> " . $row["pais_ciudad_barrio"] . "</p>";

        $descripcion_corta = $row["descripcion_corta"];
        $max_caracteres = 100; // Establece el número máximo de caracteres que deseas mostrar

        if (strlen($descripcion_corta) > $max_caracteres) {
            $descripcion_corta = substr($descripcion_corta, 0, $max_caracteres) . "...";
        }

        echo '<p id="desc">' . $descripcion_corta . '</p>';
        echo "<button> Leer Más </button>";

        echo "</div>";
    }
} else {
    echo "No hay proyectos disponibles.";
}

// Cerrar la conexión
$conn->close();
?>

    </div>
    </main>
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