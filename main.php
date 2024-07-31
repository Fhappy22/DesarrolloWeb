<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla Principal</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header class="header">
        <img src="assets/images/profile.png" alt="Icono de Perfil" class="header-icon">
        <button class="settings-button" onclick="window.location.href='settings.php';">
            <img src="assets/images/engranaje.png" alt="Icono de Ajustes" class="header-icon">
        </button>
    </header>
    <h1 class="title">CenturyGO</h1>
    <div class="main-content">
        <button class="main-button" onclick="window.location.href='citas.php';">
            <img src="assets/images/libro-abierto.png" alt="Icono de Libro" class="button-icon">
            Agendar Cita
        </button>
        <button class="secondary-button" onclick="window.location.href='viewC.php';">Ver Citas</button>
        <button class="secondary-button" onclick="window.location.href='us.php';">¿Quienes Somos?</button>
    </div>
    <footer class="nav-buttons">
        <button onclick="window.history.back();">Atrás</button>
        <button onclick="window.location.href='citas.php';">Agendar Cita</button>
    </footer>
</body>
</html>
