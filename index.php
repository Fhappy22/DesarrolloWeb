<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Ingreso</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="profile-icon">
            <img src="assets/images/profile.png" alt="Icono de Perfil">
        </div>
        <h1>Inicie Sesión</h1>
        <form action="php/login_usuario_be.php" method="POST">
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" id="email" name="correo" placeholder="Ingrese su correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contrasena" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit" class="submit-btn">Ingresar</button>
        </form>
        <div class="signup-link">
            <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
