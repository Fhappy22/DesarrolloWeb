<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Registro</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
    <div class="container">
        <h1>Registro</h1>
        <div class="profile-icon">
            <img src="assets/images/profile.png" alt="Icono de Perfil">
        </div>
        <div class="form-group">
            <form action = "php/registro_usuario_be.php" method="POST">
            <label for="email">Correo</label>
            <input type="email" id="email" name="correo" placeholder="Ingrese su correo">
            <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="contrasena" placeholder="Ingrese su contraseña">
        </div>
        <button class="submit-btn">Registrarse</button>
            </form>
        </div>

        <div class="login-link">
            <p>¿Ya tienes cuenta? <a href="index.php" class="login-btn">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>
