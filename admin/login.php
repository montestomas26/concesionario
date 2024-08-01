<?php
// Verifica si se han enviado datos mediante POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene las credenciales del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verifica las credenciales de administrador (esto es un ejemplo, debes implementar la autenticación adecuada)
    if ($usuario === 'locomontes' && $contrasena === '123') {
        header('Location: formulario.php');
        exit();
    } else {
        echo "<p>Credenciales incorrectas. Intenta de nuevo.</p>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="box">
        <span class="borderLine"></span>
        <form action="login.php" method="post">
            <h2>Iniciar Sesión</h2>
            <div class="inputBox">
                <!-- Input de usuario -->
                <input type="text" name="usuario" required="required">
                <span>Usuario</span>
                <i></i>
            </div>
            <div class="inputBox">
                <!-- Input de contraseña -->
                <input type="password" name="contrasena" required="required">
                <span>Contraseña</span>
                <i></i>
            </div>
            <!-- Boton de enviar -->
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>

</html>