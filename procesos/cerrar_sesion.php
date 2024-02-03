<?php
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir a la página de inicio (o a donde quieras después de cerrar sesión)
header("Location: ../index.php");
exit();
?>
