<?php
session_start();

// Verifica si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica las credenciales del usuario (esto puede ser más complejo en una aplicación real)
    if ($username === "username" && $password === "password") {
        // Inicio de sesión exitoso, redirige a la página de bienvenida
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
    } else {
        echo "Password or username incorrect. Start again.";
    }
}
?>