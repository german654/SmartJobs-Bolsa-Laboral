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


CREATE TABLE IF NOT EXISTS empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    ruc VARCHAR(20) UNIQUE,
    direccion VARCHAR(255),
    telefono VARCHAR(15),
    correo VARCHAR(100),
    descripcion TEXT,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Crear tabla postulaciones
CREATE TABLE IF NOT EXISTS postulaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_oferta INT,
    fecha_postulacion DATE,
    estado VARCHAR(50),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral(id)
);

-- Crear tabla categorias_laborales
CREATE TABLE IF NOT EXISTS categorias_laborales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT
);

-- Crear tabla oferta_categoria
-- Relación muchos a muchos entre ofertas laborales y categorías laborales
CREATE TABLE IF NOT EXISTS oferta_categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_oferta INT,
    id_categoria INT,
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral(id),
    FOREIGN KEY (id_categoria) REFERENCES categorias_laborales(id)
);

-- Crear tabla comentarios
CREATE TABLE IF NOT EXISTS comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_oferta INT,
    comentario TEXT,
    fecha_comentario DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral(id)
);


-- Crear tabla oferta_laboral
CREATE TABLE IF NOT EXISTS oferta_laboral (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    horario VARCHAR(100),
    remuneracion DECIMAL(10, 2),
    id_empresa VARCHAR(255)
);



-- Crear tabla oferta_laboral
CREATE TABLE IF NOT EXISTS oferta_laboral (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descripcion TEXT,
    horario VARCHAR(100),
    remuneracion DECIMAL(10, 2),
    id_empresa VARCHAR(255)
);