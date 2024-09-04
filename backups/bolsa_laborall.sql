-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS bolsa_laborall;
USE bolsa_laborall;

-- Crear tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre_rs` varchar(100) DEFAULT NULL,
  `dni` varchar(20) DEFAULT NULL,
  `ruc` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `pasword` varchar(255) DEFAULT NULL,
  `archivo_cv` varchar(255) DEFAULT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Crear tabla oferta_laboral
CREATE TABLE IF NOT EXISTS oferta_laboral (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    horario VARCHAR(100),
    remuneracion DECIMAL(10, 2),
    id_empresa VARCHAR(255)
);