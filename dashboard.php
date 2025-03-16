<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }
        .masthead-avatar {
            width: 150px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <header class="text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <img class="masthead-avatar mb-3" src="img/bienvenido.png" alt="Avatar" />
            <h1 class="text-uppercase mb-3" id="nombreUsuario"></h1>
            <button id="cerrarSesion" class="btn btn-light mt-3">Cerrar Sesión</button>
        </div>
    </header>

    <script src="frontend/js/dashboard.js"></script>
</body>
</html>
