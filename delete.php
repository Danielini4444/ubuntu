<?php
include 'conexion.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

// Preparar y ejecutar la eliminación
$stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->execute([$id]);

// Redirigir a index.php
header('Location: index.php');
exit;
?>