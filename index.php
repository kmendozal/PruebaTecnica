<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        body {
            background-color: hsl(0, 0.00%, 100.00%);
        }

        .jumbotron {
            padding: 4rem 2rem;
        }

        .login-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Estilos para la pantalla de carga */
        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            visibility: hidden;
            z-index: 9999;
        }

        /* Animación de la bolita de carga */
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #fff;
            border-top: 5px solid #007bff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>

    <!-- Overlay de carga -->
    <div id="loading" class="loading-container">
        <div class="spinner"></div>
    </div>

    <section class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="img/fondo2.jpg" alt="Login Image" class="login-image">
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body px-md-5 py-5">
                            <h1 class="fw-bold text-center mb-3">Bienvenidos</h1>
                            <p class="text-secondary text-center">Ingrese sus credenciales para continuar con la evaluación técnica.</p>
                            <form id="loginForm">
                                <div class="form-outline mb-3">
                                    <input type="email" id="email" class="form-control" required />
                                    <label class="form-label" for="email">Correo Electrónico</label>
                                </div>

                                <div class="form-outline mb-3">
                                    <input type="password" id="contrasena" class="form-control" minlength="6" required />
                                    <label class="form-label" for="contrasena">Contraseña</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-3">
                                    <input class="form-check-input me-2" type="checkbox" id="confirmar" required checked />
                                    <label class="form-check-label" for="confirmar">
                                        Confirmo que deseo iniciar sesión y que mis credenciales son correctas.
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                    Ingresar
                                </button>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="frontend/js/login.js"></script>

</body>
</html>
