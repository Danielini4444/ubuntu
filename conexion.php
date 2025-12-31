<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$dbname = 'mi_proyecto_db';
$username = 'root';
$password = ''; // Deja vacío por ahora, o pon la contraseña aquí si es necesario

try {
    // Crear conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar PDO para que lance excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Manejar errores de conexión
    die("Error de conexión: " . $e->getMessage());
}
?>