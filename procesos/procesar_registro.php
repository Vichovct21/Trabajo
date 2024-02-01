<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

        // Obtener las demás variables
        $numero_contacto = $_POST["numero_contacto"];
        $pais_ciudad_barrio = $_POST["pais_ciudad_barrio"];
        $domicilio_organizacion = $_POST["domicilio_organizacion"];
        $numero_identificacion = $_POST["numero_identificacion"];
        $tipo_organizacion = $_POST["tipo_organizacion"];

        // Preparar la declaración SQL
        $sql = "INSERT INTO usuarios (username, nombres, apellidos, correo, contrasena, numero_contacto, pais_ciudad_barrio, domicilio_organizacion, numero_identificacion, tipo_organizacion) 
                VALUES ('$username', '$nombres', '$apellidos', '$correo', '$contrasena', '$numero_contacto', '$pais_ciudad_barrio', '$domicilio_organizacion', '$numero_identificacion', '$tipo_organizacion')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>
                    window.location.href = "../index.html";
                    alert("Usuario registrado exitosamente");
                  </script>';
        } else {
            echo "Error al registrar el usuario: " . $conn->error;
        }
    }

// Cerrar la conexión
$conn->close();
?>
