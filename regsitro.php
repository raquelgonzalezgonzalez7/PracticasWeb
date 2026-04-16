<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexion = new mysqli("localhost", "root", "", "login_db");

    if ($conexion->connect_error) {
        die("Error de conexión");
    }

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios (usuario, correo) VALUES ('$usuario','$correo')";

    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Usuario registrado correctamente";
    } else {
        $mensaje = "Error: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>

<h2>Registro</h2>

<form method="POST">
    Usuario: <input type="text" name="usuario" required><br><br>
    Correo: <input type="email" name="correo" required><br><br>
    <button type="submit">Registrar</button>
</form>

<?php
if ($mensaje != "") {
    echo "<p style='color:green;'>$mensaje</p>";
}
?>

</body>
</html>

