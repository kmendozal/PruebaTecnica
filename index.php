<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: hsl(0, 0%, 96%);
        }

        .jumbotron {
            padding: 4rem 2rem;
        }

        .btn-social {
            color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin: 5px;
        }

        .btn-facebook { background-color: #3b5998; }
        .btn-google { background-color: #dd4b39; }
        .btn-twitter { background-color: #1da1f2; }
        .btn-github { background-color: #333; }

        .btn-social:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

<section class="jumbotron">
    <div class="container">
        <div class="row align-items-center">
            <!-- Texto de la izquierda -->
            <div class="col-lg-6">
                <h1 class="fw-bold display-4">
                    Bienvenidos <br />
                    <span class="text-primary">Iniciar Sesion</span>
                </h1>
                <p class="text-secondary">
                    Por favor, ingrese sus credenciales para continuar con la evaluación técnica.
                </p>
            </div>

            <!-- Formulario de registro -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body px-md-5 py-5">
                        <form>
                            <!-- Email -->
                            <div class="form-outline mb-3">
                                <input type="email" id="email" class="form-control" required />
                                <label class="form-label" for="email">Correo Electrónico</label>
                            </div>

                            <!-- Password -->
                            <div class="form-outline mb-3">
                                <input type="password" id="password" class="form-control" required />
                                <label class="form-label" for="password">Contraseña</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-3">
                                <input class="form-check-input me-2" type="checkbox" id="subscribe" checked />
                                <label class="form-check-label" for="subscribe">
                                    Confirmo que deseo iniciar sesión y que mis credenciales son correctas.
                                </label>
                            </div>

                            <!-- Botón de registro -->
                            <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                Ingresar
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- Fin formulario -->
        </div>
    </div>
</section>

<!-- MDBootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>
