<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $res = pg_query_params($conexion, "SELECT ruta FROM imagenes WHERE id=$1", array($id));
    $datos = pg_fetch_assoc($res);
    if ($datos && file_exists($datos['ruta'])) unlink($datos['ruta']);
    pg_query_params($conexion, "DELETE FROM imagenes WHERE id=$1", array($id));
}
header("Location: admin.php");
?>