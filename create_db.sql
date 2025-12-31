-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS mi_proyecto_db;

-- Usar la base de datos
USE mi_proyecto_db;

-- Crear la tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(20)
);