<?php
// Incluir la base de datos
include '../db/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $modelo = $_POST["modelo"];
    $descripcion = $_POST["descripcion"];

    // Procesar la foto_perfil subida
    $imagen = $_FILES['imagen']['name'];
    $imagen_temp = $_FILES['imagen']['tmp_name'];
    $ruta_imagen = 'img/' . $imagen;
    move_uploaded_file($imagen_temp, $ruta_imagen);

    // Conectar a la base de datos
    $con = conectarDB();

    // Preparar la consulta SQL
    $sql = "INSERT INTO motos (nombre, modelo, descripcion, imagen) VALUES ('$nombre', '$modelo', '$descripcion', '$imagen')";

    if ($con->query($sql) === TRUE) {
        echo "<script> alert('la moto se subio correctamente')</script>";
        echo "<script> window.location.href='./formulario.php' </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Cerrar la conexión
    $con->close();
}
