<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar sesión</title>
</head>
<body>

    <header>
        <nav id="navbar">
            <div class="container">
                <img src="images/logo_CAFECH.png" width="60px" class="logotype">
                <ul class="textbutton">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="nosotros.php">Nosotros</a>
                    </li>
                    <li>
                        <a href="#">Galería</a>
                    </li>
                    <li>
                        <a href="#">Productos</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="#">Log in</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="bg-gray d-flex justify-content-center aling-item-center vh-100">
        <div class="col"></div>

        <div class="col"> <br>
            <div class="bg-white p-5 rounded-5 text-secundary shadow" width="30rem">
                <div class="d-flex justify-content-center">
                    <img src="images/log in.png" alt="login-icon" height="90px">
                </div>

                <div class="text-center fs-1 fw-bold">Iniciar sesión</div>
                <div>
                    <input class="form-control bg-light" type="text" placeholder="username">
                </div>
                <br>
                <div>
                    <input class="form-control bg-light" type="password" placeholder="password">
                </div>

                <div class="d-flex justify-content-around aling-items-center gap-1">
                    <input class="form-check-input" type="checkbox">
                    <div class="pt-1 fs-0.9rem">Recuerdame</div>
                </div>

                <div class="pt-1">
                    <a href="#" class="text-decoration-none text-info fw-semibold fst-italic fs-0.9rem">¿Olvidaste tu contraseña?</a>
                </div>

                <div class="btn btn-info text-white w-100 mt-4 shadow-5m">Iniciar sesión</div>
                
                <div class="d-flex gap-1 justify-content-center mt-1">
                    <div>¿No tienes una cuenta?</div>
                    <a href="#" class="text-decoration-none text-info fw-semibold">Registrarse</a>
                </div>

                <div class="p-3 shadow-5m">
                    <div class="border-bottom text-center" style="height: 0.9rem">
                        <span class="bg-white px-3">or</span>
                    </div>
                </div>
                <div class="btn d-flex gap-2 justify-content-center border mt-3">
                    <img src="images/google.png" alt="google-icom" height="30px">
                    
                    <div class="fw-semibold text-secundary">Continue with Google</div>
                </div>
            </div>
        </div>
        <br>

        <div class="col"></div>
    </section>
    
</body>
</html>