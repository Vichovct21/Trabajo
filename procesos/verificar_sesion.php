<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    // Calcular el tiempo transcurrido desde el inicio de sesión
    $elapsed_time = time() - $_SESSION["start_time"];

    // Si han pasado más de 30 minutos, cerrar la sesión
    if ($elapsed_time > 1800) {
        session_unset();
        session_destroy();
        echo "sesion_expirada";
    } else {
        echo "sesion_activa";
    }
} else {
    echo "sesion_inactiva";
}
?>
