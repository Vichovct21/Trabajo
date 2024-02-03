<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/detalles.css">
    <title>Document</title>
</head>
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
<body>
<main>
<?php
include 'procesos/conexion.php';

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el id del proyecto desde la URL
$id_proyecto = $_GET['id'] ?? 0;

// Consulta para obtener los detalles del proyecto
$sql = "SELECT * FROM proyecto WHERE id_proyecto = $id_proyecto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    echo "<div class='proyecto-detalle'>";
    // Mostrar detalles del proyecto
    echo "<h2>" . $row["nombre_proyecto"] . "</h2>";

    // Verificar y mostrar la imagen del proyecto
    $imagen = htmlspecialchars($row["imagen"]);

    if (!empty($imagen)) {
        // Comprobar si la ruta es relativa y construir la ruta completa
        if (!file_exists($imagen) && file_exists($_SERVER['DOCUMENT_ROOT'] . $imagen)) {
            $imagen = $_SERVER['DOCUMENT_ROOT'] . $imagen;
        }

        if (file_exists($imagen)) {
            echo "<img src='" . $imagen . "' alt='Imagen del proyecto'>";
            echo "<h3>Valoración del Proyecto</h3>";
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
        } else {
            echo "No hay imagen disponible o la ruta es incorrecta";
        }
    } else {
        echo "No hay imagen disponible o la ruta está vacía";
    }

    // Mostrar más detalles del proyecto
    echo "<h3>Población a la que va dirigida</h3>";

// Obtener la cadena de población impactada desde la base de datos
$poblacion_impactada = $row["poblacion_impactada"];

// Dividir la cadena en un array usando la coma como delimitador
$poblacion_array = explode(", ", $poblacion_impactada);

// Mostrar cada elemento del array en una lista
echo "<ul>";
foreach ($poblacion_array as $grupo) {
    echo "<li>$grupo</li>";
}
echo "</ul>";

    echo "<h3>Descripción Larga</h3>";
    echo "<p>" . $row["descripcion_larga"] . "</p>";

    echo "<h3>¿Qué Ofrecemos?</h3>";
    echo "<p>" . $row["ofrece_proyecto"] . "</p>";

    echo "<h3>¿Qué buscamos?</h3>";
    echo "<p>" . $row["busca_crecimiento"] . "</p>";

    echo "<h3>Impacto del Proyecto</h3>";
    echo "<p>" . $row["impacto_proyecto"] . "</p>";

    echo "<h3 style='text-align: center;'>Nombre de la Organización</h3>";
    echo "<p style='text-align: center;'>" . $row["nombre_organizacion"] . "</p>";
    
    echo "<h3 style='text-align: center;'>Responsable del Proyecto</h3>";
    echo "<p style='text-align: center;'>" . $row["responsable_proyecto"] . "</p>";
    echo "</div>";
    echo "<div class='contact-button-container' style='text-align: center; margin-top: 20px;'>";
echo "<button class='contact-button' onclick='location.href=\"mailto:" . $row["correo_electronico"] . "\"'>Quiero contactar al responsable del proyecto</button>";
echo "</div>";
} else {
    echo "Proyecto no encontrado.";
}
// Cerrar la conexión
$conn->close();
?>
<div class="comentario-form-container">
    <h3>Deja un comentario y califica el proyecto</h3>
    <form action="procesos/procesar_comentario.php" method="post">
        <!-- Campo oculto para el ID del proyecto -->
        <input type="hidden" name="id_proyecto" value="<?php echo $id_proyecto; ?>">

        <!-- Campo de comentario -->
        <label for="comentario">Comentario:</label>
        <textarea name="comentario" id="comentario" required></textarea>

        <!-- Campo de valoración -->
        <div class="rating-container" id="rating-container">
            <input type="hidden" name="valoracion" id="valoracion" value="0">
            <span class="star" data-value="1">&#9733;</span>
            <span class="star" data-value="2">&#9733;</span>
            <span class="star" data-value="3">&#9733;</span>
            <span class="star" data-value="4">&#9733;</span>
            <span class="star" data-value="5">&#9733;</span>
        </div>

        <!-- Botón de enviar comentario -->
        <input type="submit" value="Enviar Comentario">
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('valoracion');

        stars.forEach(star => {
            star.addEventListener('mouseover', function () {
                highlightStars(Number(this.getAttribute('data-value')));
            });

            star.addEventListener('mouseout', function () {
                highlightStars(Number(ratingInput.value));
            });

            star.addEventListener('click', function () {
                ratingInput.value = this.getAttribute('data-value');
            });
        });

        function highlightStars(value) {
            stars.forEach(star => {
                if (Number(star.getAttribute('data-value')) <= value) {
                    star.style.color = '#FFD700'; /* Color dorado para estrellas seleccionadas */
                } else {
                    star.style.color = '#ccc'; /* Color gris para estrellas no seleccionadas */
                }
            });
        }
    });
</script>
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
