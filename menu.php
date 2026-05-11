<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal - Proyecto Carrusel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fce4ec; display: flex; align-items: center; justify-content: center; height: 100 vh; }
        .card { border-radius: 20px; padding: 30px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .btn-pink { background-color: #f06292; color: white; margin: 10px; width: 200px; }
        .btn-pink:hover { background-color: #ec407a; color: white; }
    </style>
</head>
<body>
    <div class="card bg-white">
        <h2 style="color: #d81b60;">Proyecto Carrusel Dinámico</h2>
        <p class="text-muted">Ing. Raquel - TESVG</p>
        <hr>
        <a href="index.php" class="btn btn-pink">Ver Carrusel Público</a>
        <br>
        <a href="login.php" class="btn btn-pink">Panel de Administración</a>
    </div>
</body>
</html>