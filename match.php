
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
    <main>
        <div class="filtro">
            <h2>ENCUENTRA A TU ALIADO IDEAL </h2>
            <form method="GET">
    <label for="poblacion_impactada"></label>
    <select id="poblacion_impactada" name="poblacion_impactada">
        <option value="">Seleccionar población</option>
        <option value="niños_y_niñas">Niños y Niñas</option>
        <option value="jovenes">Jóvenes</option>
        <option value="mujeres">Mujeres</option>
        <option value="hombres">Hombres</option>
        <option value="lgbt">Comunidad LGBT</option>
        <option value="adultos_mayores">Adultos Mayores</option>
        <option value="indigenas">Indígenas</option>
        <option value="afrodescendientes">Afrodescendientes</option>
        <option value="migrantes">Migrantes</option>
        <option value="discapacidad">Personas con Discapacidad</option>
        <option value="desplazadas">Desplazadas</option>
        <option value="ley_paz">Personas vinculadas a la ley de la Paz</option>
        <option value="otros">Otros</option>
    </select>
    <label for="nombre_proyecto"></label>
    <input type="text" id="nombre_proyecto" name="nombre_proyecto" placeholder="Nombre Proyecto">
    <button type="submit">🔍</button>
</form>
        </div>
        <div class="proyectos">
<?php
include 'procesos/conexion.php';

$filtroPoblacion = $_GET['poblacion_impactada'] ?? '';
$nombreProyecto = $_GET['nombre_proyecto'] ?? '';

// Consulta para obtener todos los proyectos con el filtro y ordenados por valoración
$sql = "SELECT * FROM proyecto";

// Agregar condiciones según los parámetros recibidos
if (!empty($filtroPoblacion) || !empty($nombreProyecto)) {
    $sql .= " WHERE";

    // Condición para población impactada
    if (!empty($filtroPoblacion)) {
        $filtroPoblacion = $conn->real_escape_string($filtroPoblacion);
        $sql .= " poblacion_impactada LIKE '%$filtroPoblacion%'";

        // Agregar AND si también se proporciona un nombre de proyecto
        if (!empty($nombreProyecto)) {
            $sql .= " AND";
        }
    }

    // Condición para el nombre del proyecto
    if (!empty($nombreProyecto)) {
        $nombreProyecto = $conn->real_escape_string($nombreProyecto);
        $sql .= " nombre_proyecto LIKE '%$nombreProyecto%'";
    }
}

// Ordenar por valoración de forma descendente
$sql .= " ORDER BY valoracion DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='proyecto'>";
        $imagen = htmlspecialchars($row["imagen"]);

if (!empty($imagen) && file_exists($imagen)) {
    echo "<img src='" . $imagen . "' alt='Imagen del proyecto' style='width: 400px; height: 250px;'>"; // Ajusta los valores según tu preferencia
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
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
          echo "<a href='detalles_proyecto.php?id=" . $row["id_proyecto"] . "' 
          style='display: inline-block; /* Para que solo ocupe el ancho necesario */
          padding: 10px;
          background-color: #7e1e56;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          text-align: center;
          font-family: \"Quicksand\", sans-serif;
          text-decoration: none; /* Para quitar el subrayado */
          margin-left: 40%;
           /* Ajusta el margen superior según sea necesario */'>Leer Más</a>";
           
      } else {
          echo "<script>
              function verificarSesion() {
                  alert('Debes iniciar sesión para ver más detalles.');
                  window.location.href='login.html';
              }
          </script>";
          echo "<a href='#' onclick='verificarSesion()' 
          style='display: inline-block; /* Para que solo ocupe el ancho necesario */
          padding: 10px;
          background-color: #7e1e56;
          color: white;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          text-align: center;
          font-family: \"Quicksand\", sans-serif;
          text-decoration: none; /* Para quitar el subrayado */
          margin-left: 40%;
           /* Ajusta el margen superior según sea necesario */'>Leer Más</a>";
      }
        echo "</div>";
    }
} else {
    if (!empty($filtroPoblacion)) {
        echo "No hay proyectos disponibles para la población impactada: $filtroPoblacion.";
    } else {
        echo "No hay proyectos disponibles.";
    }
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
<!-- MOBIL-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const nav = document.querySelector('nav');

        mobileMenuBtn.addEventListener('click', function () {
            nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
<!-- MOBIL-->
</body>
</html>