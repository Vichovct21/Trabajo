<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $contrasena = $_POST["contrasena"];

    // Consulta utilizando sentencias preparadas para prevenir la inyección de SQL
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE username = ? AND contrasena = ?");
    $stmt->bind_param("ss", $username, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Iniciar la sesión
        session_start();

        // Establecer variables de sesión
        $_SESSION["username"] = $username;
        $_SESSION["loggedin"] = true;
        $_SESSION["start_time"] = time(); // Guardar el tiempo de inicio de sesión

        // Redirigir al usuario después del inicio de sesión
        header("Location: ../index.php");
        exit();
    } else {
        // Usuario no encontrado
        echo '<script>
        alert("Usuario y/o Contraseña incorrecta");
        window.location.href="../login.html";</script>';
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si la solicitud no es POST, redirigir a alguna página de error o realizar otra acción necesaria
    header("Location: ../error.html");
    exit();
}
?>
