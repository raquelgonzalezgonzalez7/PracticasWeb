<?php
session_start();
include 'db.php';
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); exit(); }
$resultado = pg_query($conexion, "SELECT * FROM imagenes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head><title>Admin</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h1>Panel Control</h1>
        <a href="logout.php" class="btn btn-danger">Salir</a>
    </div>
    <div class="card p-4 mb-4">
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre_personalizado" class="form-control mb-2" placeholder="Nombre" required>
            <input type="file" name="imagen" class="form-control mb-2" required>
            <button class="btn btn-info w-100 text-white">Subir</button>
        </form>
    </div>
    <table class="table">
        <thead class="table-dark"><tr><th>ID</th><th>Nombre</th><th>Foto</th><th>Acción</th></tr></thead>
        <tbody>
            <?php while($row = pg_fetch_assoc($resultado)): ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><img src="<?=$row['ruta']?>" width="80"></td>
                <td><a href="eliminar.php?id=<?=$row['id']?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>