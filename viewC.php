<!-- viewC.php -->
<?php
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $caseDescription = isset($_POST['case-description']) ? $_POST['case-description'] : '';
    $appointmentDate = isset($_POST['appointment-date']) ? $_POST['appointment-date'] : '';
    $appointmentTime = isset($_POST['appointment-time']) ? $_POST['appointment-time'] : '';
} else {
    // Redirige si no se ha enviado el formulario
    header("Location: citas.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Citas</title>
    <link rel="stylesheet" href="assets/css/viewC.css">
</head>
<body>
    <div class="header">
        <a href="index.html"><img src="assets/images/profile.png" alt="Icono de Perfil"></a>
        <img src="assets/images/engranaje.png" alt="Icono de Ajustes">
    </div>
    <h1 class="title">Ver Citas</h1>
    <div class="list-container">
        <div class="list-item">
            <h2>Descripción del Caso:</h2>
            <p><?php echo htmlspecialchars($caseDescription); ?></p>
        </div>
        <div class="list-item">
            <h2>Fecha:</h2>
            <p><?php echo htmlspecialchars($appointmentDate); ?></p>
        </div>
        <div class="list-item">
            <h2>Hora:</h2>
            <p><?php echo htmlspecialchars($appointmentTime); ?></p>
        </div>
    </div>
    <div class="nav-buttons">
        <button onclick="window.history.back();">Atrás</button>
        <button onclick="window.location.href='main.php';">Continuar</button>
    </div>
</body>
</html>
