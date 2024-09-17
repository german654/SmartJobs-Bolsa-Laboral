-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS bolsa_laborall;
USE bolsa_laborall;

-- Tabla admin (ya existente)
CREATE TABLE IF NOT EXISTS admin
(
    id       TINYINT(4)   NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email    VARCHAR(150) NOT NULL,
    password VARCHAR(50)  NOT NULL
) COLLATE = utf8mb3_unicode_ci;

-- Tabla usuarios
CREATE TABLE IF NOT EXISTS usuarios
(
    id         INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rs  VARCHAR(100) DEFAULT NULL,
    apellido   VARCHAR(100) DEFAULT NULL,
    dni        VARCHAR(20)  DEFAULT NULL,
    ruc        VARCHAR(20)  DEFAULT NULL,
    correo     VARCHAR(100) DEFAULT NULL,
    celular    VARCHAR(15)  DEFAULT NULL,
    rol        VARCHAR(50)  DEFAULT NULL,
    user       VARCHAR(50)  DEFAULT NULL,
    pasword    VARCHAR(255) DEFAULT NULL,
    archivo_cv VARCHAR(255) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla empresas
CREATE TABLE IF NOT EXISTS empresas
(
    id          INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(255) NOT NULL,
    ruc         VARCHAR(20) UNIQUE,
    direccion   VARCHAR(255),
    telefono    VARCHAR(15),
    correo      VARCHAR(100),
    descripcion TEXT,
    usuario_id  INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla oferta_laboral (modificada según esquema actual)
CREATE TABLE IF NOT EXISTS oferta_laboral
(
    id           INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo       VARCHAR(255) NOT NULL,
    descripcion  TEXT,
    categoria    VARCHAR(100),
    lugar        VARCHAR(100),
    horario      VARCHAR(100),
    remuneracion DECIMAL(10, 2),
    id_empresa   VARCHAR(255)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla postulaciones
CREATE TABLE IF NOT EXISTS postulaciones
(
    id                INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario        INT NOT NULL,
    id_oferta         INT NOT NULL,
    fecha_postulacion DATE,
    estado            VARCHAR(50),
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id),
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla categorias_laborales
CREATE TABLE IF NOT EXISTS categorias_laborales
(
    id          INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100) NOT NULL,
    descripcion TEXT
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla oferta_categoria (relación muchos a muchos entre ofertas y categorías laborales)
CREATE TABLE IF NOT EXISTS oferta_categoria
(
    id           INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_oferta    INT NOT NULL,
    id_categoria INT NOT NULL,
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral (id),
    FOREIGN KEY (id_categoria) REFERENCES categorias_laborales (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

-- Tabla comentarios
CREATE TABLE IF NOT EXISTS comentarios
(
    id               INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario       INT NOT NULL,
    id_oferta        INT NOT NULL,
    comentario       TEXT,
    fecha_comentario DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id),
    FOREIGN KEY (id_oferta) REFERENCES oferta_laboral (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_general_ci;

# -- Candidato
# correo: infoeliasar@gmail.com
# contraseña: Soloyo_12

# -- Empresa
# correo: infoeliasar@gmail.com
# contraseña: 123