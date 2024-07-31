<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quiénes Somos?</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        body {
            background-color: #1A1A1A;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #FFFFFF;
            text-align: center;
        }
        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            box-sizing: border-box;
        }
        .header img {
            width: 40px;
            height: 40px;
        }
        .title {
            margin-top: 80px; /* Ajustar para dar más espacio entre el título y los iconos */
            font-size: 48px;
            font-family: 'Poppins', sans-serif;
        }
        .content {
            width: 90%;
            max-width: 800px;
            margin-top: 20px;
            text-align: left;
        }
        .content h2 {
            font-size: 36px;
            color: #FEF445;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
        }
        .version-info {
            margin-top: 20px;
            font-size: 16px;
            color: #FEF445;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            width: 90%;
            max-width: 400px;
            margin-top: auto;
            padding-bottom: 20px;
        }
        .nav-buttons button {
            width: 48%;
            padding: 10px;
            background-color: #FEF445;
            color: #1A1A1A;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .nav-buttons button:hover {
            background-color: #E6DA3B;
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="assets/images/profile.png" alt="Icono de Perfil">
        <button class="settings-button" onclick="window.location.href='settings.html';">
            <img src="assets/images/engranaje.png" alt="Icono de Ajustes">
        </button>
    </header>
    <h1 class="title">¿Quiénes Somos?</h1>
    <div class="content">
        <h2>CenturyLawyers</h2>
        <p>En CenturyLawyers, contamos con un equipo de abogados altamente calificados y con años de experiencia en el campo legal. Nuestro compromiso es proporcionar un servicio de la más alta calidad y asegurar que nuestros clientes reciban la mejor representación y asesoría legal posible.</p>
        <p>Nos especializamos en diversas áreas del derecho, incluyendo derecho corporativo, derecho familiar, derecho penal y más. Nuestro objetivo es proteger los derechos e intereses de nuestros clientes y ofrecer soluciones efectivas a sus problemas legales.</p>
        <p>La profesionalidad y el compromiso de nuestro equipo nos distinguen en el sector legal, y estamos dedicados a mantener los más altos estándares éticos y profesionales en todas nuestras prácticas.</p>
        <div class="version-info">
            <p>Versión de la Página: Beta</p>
        </div>
    </div>
    <div class="nav-buttons">
        <button onclick="window.history.back();">Atrás</button>
    </div>
</body>
</html>
