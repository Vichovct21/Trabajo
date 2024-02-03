<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de usuario de la sesión (asegúrate de haber iniciado sesión antes)
    session_start();
    $username = $_SESSION["username"] ?? '';

    if(empty($username)){
        // Si el nombre de usuario no está disponible, puedes redirigir a la página de inicio de sesión
        header("Location: ../login.html");
        exit();
    }

    $id_proyecto = $_POST["id_proyecto"];
    $comentario = $_POST["comentario"];
    $valoracion = $_POST["valoracion"];

    // Insertar comentario en la tabla comentarios
    $sql = "INSERT INTO comentarios (id_proyecto, username, comentario, valoracion, fecha_creacion) 
            VALUES ('$id_proyecto', '$username', '$comentario', '$valoracion', NOW())";
    $conn->query($sql);

    // Actualizar la valoración del proyecto (sumar la nueva valoración)
    $sql = "SELECT SUM(valoracion) as total_valoraciones, COUNT(*) as cantidad_comentarios FROM comentarios WHERE id_proyecto = $id_proyecto";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $total_valoraciones = $row['total_valoraciones'];
        $cantidad_comentarios = $row['cantidad_comentarios'];

        // Calcular el nuevo promedio
        $nueva_valoracion = ($total_valoraciones + $valoracion) / ($cantidad_comentarios + 1);

        // Actualizar la valoración del proyecto
        $sql = "UPDATE proyecto SET valoracion = $nueva_valoracion WHERE id_proyecto = $id_proyecto";
        $conn->query($sql);
    }

    // Redirigir a la página de detalles del proyecto
    header("Location: ../detalles_proyecto.php?id=$id_proyecto");
}

// Cerrar la conexión
$conn->close();
?>
