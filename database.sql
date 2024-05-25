-- Crear la tabla empresa
CREATE TABLE empresa (
    nit VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    estado VARCHAR(50),
    telefono VARCHAR(15),
    email VARCHAR(100),
    prefijo VARCHAR(10),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_ultima_modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE usuario (
    id INT UNSIGNED ZEROFILL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    imagen VARCHAR(255),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_ultima_modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    empresa_id VARCHAR(30),
);

ALTER TABLE usuarios AUTO_INCREMENT = 0000;

-- Ahora, agregamos la relación en cascada
ALTER TABLE usuario
ADD CONSTRAINT fk_empresa_usuario
FOREIGN KEY (empresa_id)
REFERENCES empresa(nit)
ON DELETE CASCADE
ON UPDATE CASCADE;