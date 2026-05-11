<?php
// Quitamos session_start de aquí para evitar el "Notice"
$host = "127.0.0.1";
$port = "5432";
$dbname = "proyecto_carrusel";
$user = "raquel";
$pass = "raquel2507";

$conexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

if (!$conexion) {
    die("Error de conexión: " . pg_last_error());
}

pg_query($conexion, "SET search_path TO public");
?>