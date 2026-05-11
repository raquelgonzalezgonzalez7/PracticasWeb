<!DOCTYPE html>
<html lang="es">
<head>
    <title>Carrusel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>#contenedor-ajax { min-height: 400px; background: #222; display: flex; align-items: center; justify-content: center; overflow: hidden; }</style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center">Carrusel Dinámico</h2>
        <div class="card shadow">
            <div id="contenedor-ajax"><div class="text-white">Cargando...</div></div>
            <div class="p-3 d-flex justify-content-between">
                <button id="btn-prev" class="btn btn-primary">Anterior</button>
                <div id="info" class="text-center"></div>
                <button id="btn-next" class="btn btn-primary">Siguiente</button>
            </div>
        </div>
    </div>
    <script>
        let imagenes = [], index = 0;
        function update() {
            if(imagenes.length == 0) return;
            const img = imagenes[index];
            $('#contenedor-ajax').empty().append(`<img src="${img.ruta}" style="height:400px;width:100%;object-fit:cover">`);
            $('#info').html(`<b>${img.nombre}</b><br>${index+1}/${imagenes.length}`);
        }
        $.getJSON('get_imagenes.php', function(data) { imagenes = data; update(); });
        $('#btn-next').click(() => { index = (index + 1) % imagenes.length; update(); });
        $('#btn-prev').click(() => { index = (index - 1 + imagenes.length) % imagenes.length; update(); });
    </script>
</body>
</html>