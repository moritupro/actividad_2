<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    // Obtener el nombre enviado por el formulario
    $nombre = htmlspecialchars($_POST['nombre']);

    // Respuesta con un saludo personalizado
    echo "<h1>¡Hola, $nombre! Bienvenido.</h1>";
} else {
    // Si no se envió el nombre, redirigir al formulario
    echo "<h1>No se ha ingresado ningún nombre.</h1>";
}
?>
