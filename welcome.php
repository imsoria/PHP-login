<?php
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Welcome</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>This is a page to show the correct login</p>
    <a href="logout.php">Logout</a>
</body>
</html>