<?php
include 'db.php';

$sql_tablas = "
CREATE TABLE IF NOT EXISTS imagenes (
    id SERIAL PRIMARY KEY, 
    nombre VARCHAR(100), 
    ruta VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY, 
    username VARCHAR(50) UNIQUE, 
    password VARCHAR(255)
);";

pg_query($conexion, $sql_tablas);
pg_query($conexion, "INSERT INTO usuarios (username, password) VALUES ('admin', '1234') ON CONFLICT DO NOTHING");

echo "Instalación completada. <a href='login.php'>Ir al Login</a>";
?>