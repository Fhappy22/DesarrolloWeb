<?php
include 'conexion_be.php';

$correo = ($_POST["correo"]); // Eliminar espacios adicionales
$contrasena = ($_POST["contrasena"]); // Eliminar espacios adicionales

$validar_login = mysqli_query($conn_usuarios, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");
if(mysqli_num_rows($validar_login) > 0){
    header("location: ../main.php");
    exit;
}else{
    echo"<script>
    alert('Usuario no existe');
    window.location = '../index.php';

    </script>";
    exit;
}
?>
