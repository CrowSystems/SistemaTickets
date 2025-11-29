<?php
    require_once("config/conexion.php");
    if(isset($_POST["enviar"]) and $_POST[""]=="si"){
        require_once("models/Usuario.php");
        $usuario = new Usuario();
        $usuario->login();
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tickets</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo_cesba.png" alt="logo"></a>
                    </div>
                    <h1 class="auth-title">Inicio de sesión</h1>
                    <p class="auth-subtitle mb-5">Ingresa con la información de tu usuario</p>

                    <form action="" method="post" id="login_form">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="usu_correo" id="usu_correo" placeholder="Correo">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="usu_pass" id="usu_pass" placeholder="Contraseña">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Recuerdame
                            </label>
                        </div>
                        <input type="hidden" name="enviar" class="form-control" value="si">
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Iniciar</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">¿No estas registrado? <a href="auth-register.html"
                                class="font-bold">Preciona
                                aquí</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">¿No recuerdas tu contraseña?</a>.</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
</body>
</html>