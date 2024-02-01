<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_organizacion = $_POST["nombre_organizacion"];
    $nombre_proyecto = $_POST["nombre_proyecto"];
    $responsable_proyecto = $_POST["responsable_proyecto"];
    $correo_electronico = $_POST["correo_electronico"];
    $numero_telefono = $_POST["numero_telefono"];
    $direccion = $_POST["direccion"];
    $pais_ciudad_barrio = $_POST["pais_ciudad_barrio"];
    $descripcion_corta = $_POST["descripcion_corta"];
    $descripcion_larga = $_POST["descripcion_larga"];
    $ofrece_proyecto = $_POST["ofrece_proyecto"];
    $busca_crecimiento = $_POST["busca_crecimiento"];
    $impacto_proyecto = $_POST["impacto_proyecto"];
    $tipo_moneda = $_POST["tipo_moneda"];
    $costo_total_proyecto = $_POST["costo_total_proyecto"];
    $poblacion_impactada = implode(", ", $_POST["poblacion_impactada"]);
    $referencias_trabajo = $_POST["referencias_trabajo"];
    $redes_sociales = $_POST["redes_sociales"];
    $pagina_web = $_POST["pagina_web"];

    var_dump($_FILES);
    // Verifica si el campo de archivo "imagen" está presente en la matriz $_FILES
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $targetDirectory = "../imagenes";
        echo $targetFile;

        $targetFile = $targetDirectory . '/' . basename($_FILES["imagen"]["name"]);

        // Mover el archivo al directorio de destino
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
            $imagen = $targetFile; // Guarda la ruta completa del archivo en lugar del nombre del archivo

            $sql = "INSERT INTO proyecto (nombre_organizacion, nombre_proyecto, responsable_proyecto, correo_electronico, numero_telefono, direccion, pais_ciudad_barrio, descripcion_corta, descripcion_larga, ofrece_proyecto, busca_crecimiento, impacto_proyecto, tipo_moneda, costo_total_proyecto, poblacion_impactada, referencias_trabajo, imagen, redes_sociales, pagina_web) 
                    VALUES (
                        '$nombre_organizacion', 
                        '$nombre_proyecto', 
                        '$responsable_proyecto', 
                        '$correo_electronico', 
                        '$numero_telefono', 
                        '$direccion', 
                        '$pais_ciudad_barrio', 
                        '$descripcion_corta', 
                        '$descripcion_larga', 
                        '$ofrece_proyecto', 
                        '$busca_crecimiento', 
                        '$impacto_proyecto', 
                        '$tipo_moneda', 
                        '$costo_total_proyecto', 
                        '$poblacion_impactada', 
                        '$referencias_trabajo', 
                        '$imagen', 
                        '$redes_sociales', 
                        '$pagina_web'
                    )";

            if ($conn->query($sql) === TRUE) {
                // Redirige al usuario a la página de éxito
                header("Location: ../registro_exitoso_proyecto.html");
                exit();
            } else {
                echo "Error al registrar el proyecto: " . $conn->error;
            }
        } else {
            echo "Error al mover el archivo al directorio de destino";
        }
    } else {
        echo "Error al cargar la imagen. Archivo no válido.";
    }
}

// Cerrar la conexión
$conn->close();
?>
