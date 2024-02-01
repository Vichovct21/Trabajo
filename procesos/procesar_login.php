<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $contrasena = $_POST["contrasena"];

    // Consulta para verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario autenticado
        echo "Inicio de sesión exitoso";
    } else {
        // Usuario no encontrado
        echo "Nombre de usuario o contraseña incorrectos";
    }
}
// Cerrar la conexión
$conn->close();
?>
