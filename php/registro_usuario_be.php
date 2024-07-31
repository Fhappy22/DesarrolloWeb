<?php
include 'conexion_be.php';

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Encriptar la contraseña usando sha512
$contrasena_encriptada = hash('sha512', $contrasena);

// Verificar si el correo ya existe
$check_email_query = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = mysqli_query($conn_usuarios, $check_email_query);

if (mysqli_num_rows($result) > 0) {
    // Si el correo ya existe, mostrar un mensaje de alerta
    echo "
    <script>
        alert('El correo ya está registrado. Por favor, use otro correo.');
        window.location = '../register.php';
    </script>";
} else {
    // Si el correo no existe, insertar el nuevo usuario con la contraseña encriptada
    $query = "INSERT INTO usuarios (correo, contrasena) VALUES ('$correo', '$contrasena_encriptada')";
    $ejecutar = mysqli_query($conn_usuarios, $query);

    if ($ejecutar) {
        echo "
        <script>
            alert('Usuario registrado exitosamente');
            window.location = '../index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Error al registrar el usuario');
            window.location = '../register.php';
        </script>";
    }
}

mysqli_close($conn_usuarios);
?>
