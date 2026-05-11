<?php
include 'db.php';
if (ob_get_length()) ob_clean();
$res = pg_query($conexion, "SELECT nombre, ruta FROM imagenes ORDER BY id DESC");
$imgs = pg_fetch_all($res) ?: [];
header('Content-Type: application/json');
echo json_encode($imgs);
?>