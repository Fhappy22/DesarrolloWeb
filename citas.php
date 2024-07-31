<!-- citas.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href="assets/css/citas.css">
</head>
<body>
    <div class="header">
        <a href="index.html"><img src="assets/images/profile.png" alt="Icono de Perfil"></a>
        <img src="assets/images/engranaje.png" alt="Icono de Ajustes">
    </div>
    <h1 class="title">Agendar Cita</h1>
    <form action="viewC.php" method="POST">
        <div class="main-content">
            <div class="textarea-container">
                <h2 class="subtitle">Descripción del Caso</h2>
                <textarea name="case-description" class="textarea" placeholder="Escriba aquí la descripción de su caso..."></textarea>
            </div>
            <div class="date-time-container">
                <label for="appointment-date" class="date-time-label">Fecha</label>
                <input type="date" id="appointment-date" name="appointment-date" class="date-time-input">
                <label for="appointment-time" class="date-time-label">Hora</label>
                <input type="time" id="appointment-time" name="appointment-time" class="date-time-input">
            </div>
            <div class="file-upload">
                <img src="assets/images/carpeta.png" alt="Icono de Subida">
                <label for="file-upload">Subir Archivo</label>
                <input type="file" id="file-upload" name="file-upload">
            </div>
        </div>
        <div class="nav-buttons">
            <button type="button" onclick="window.history.back();">Atrás</button>
            <button type="submit">Continuar</button>
        </div>
    </form>
</body>
</html>
