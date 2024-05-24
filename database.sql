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
