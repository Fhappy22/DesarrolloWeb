<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajustes</title>
    <link rel="stylesheet" href="assets/css/settings.css">
</head>
<body>
    <div class="header">
        <a href="index.html"><img src="assets/images/profile.png" alt="Icono de Perfil"></a>
        <img src="assets/images/engranaje.png" alt="Icono de Ajustes">
    </div>
    <h1 class="title">Ajustes</h1>
    <div class="settings-container">
        <div class="settings-item">
            <span>Cambiar Tema</span>
            <img src="assets/images/modo-nocturno.png" alt="Icono de Tema">
        </div>
        <div class="settings-item" onclick="window.location.href='informacion-legal.html';">
            <span>Información Legal</span>
            <img src="assets/images/cumplimiento.png" alt="Icono de Información">
        </div>
        <div class="settings-item" onclick="window.location.href='informacion-version.html';">
            <span>Información de la Versión</span>
            <img src="assets/images/profile.png" alt="Icono de Versión">
        </div>
    </div>
    <div class="nav-buttons">
        <button onclick="window.history.back();">Atrás</button>
        <button onclick="window.location.href='main.php';">Continuar</button>
    </div>
</body>
</html>
