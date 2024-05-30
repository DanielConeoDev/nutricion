CREATE TABLE `empresa` (
  `nit` VARCHAR(20) PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(50),
  `telefono` VARCHAR(15),
  `email` VARCHAR(100),
  `prefijo` VARCHAR(10),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_ultima_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `usuario` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) UNIQUE NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `rol` VARCHAR(20) NOT NULL,
  `estado` VARCHAR(20) NOT NULL,
  `imagen` VARCHAR(255),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_ultima_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `empresa_id` VARCHAR(30)
);

CREATE TABLE `fuentes` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `fecha_publicacion` DATE,
  `pais` VARCHAR(100),
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `grupos` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `id_fuentes` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `parte_analizada` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `tipo_analisis` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `componentes` (
  `id` INT PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion` TEXT,
  `id_tipo_analisis` INT,
  `codigo_alimento` VARCHAR(50),
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `alimentos` (
  `codigo` VARCHAR(50) PRIMARY KEY,
  `nombre` VARCHAR(255) NOT NULL,
  `id_fuente` INT,
  `id_grupo` INT,
  `id_parte_analizada` INT,
  `nit_empresa` VARCHAR(20),
  `id_usuario` INT,
  `fecha_modificacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP),
  `fecha_creacion` TIMESTAMP DEFAULT (CURRENT_TIMESTAMP)
);

CREATE TABLE `valor_componentes` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `valor` FLOAT NOT NULL,
  `id_componte` INT,
  `codigo_alimento` VARCHAR(50)
);

CREATE INDEX `usuario_index_0` ON `usuario` (`empresa_id`);

CREATE INDEX `fuentes_index_1` ON `fuentes` (`nit_empresa`);

CREATE INDEX `fuentes_index_2` ON `fuentes` (`id_usuario`);

CREATE INDEX `grupos_index_3` ON `grupos` (`nit_empresa`);

CREATE INDEX `grupos_index_4` ON `grupos` (`id_usuario`);

CREATE INDEX `grupos_index_5` ON `grupos` (`id_fuentes`);

CREATE INDEX `parte_analizada_index_6` ON `parte_analizada` (`nit_empresa`);

CREATE INDEX `parte_analizada_index_7` ON `parte_analizada` (`id_usuario`);

CREATE INDEX `tipo_analisis_index_8` ON `tipo_analisis` (`nit_empresa`);

CREATE INDEX `tipo_analisis_index_9` ON `tipo_analisis` (`id_usuario`);

CREATE INDEX `componentes_index_10` ON `componentes` (`id_tipo_analisis`);

CREATE INDEX `componentes_index_11` ON `componentes` (`nit_empresa`);

CREATE INDEX `componentes_index_12` ON `componentes` (`id_usuario`);

CREATE INDEX `alimentos_index_13` ON `alimentos` (`id_fuente`);

CREATE INDEX `alimentos_index_14` ON `alimentos` (`id_grupo`);

CREATE INDEX `alimentos_index_15` ON `alimentos` (`id_parte_analizada`);

CREATE INDEX `alimentos_index_16` ON `alimentos` (`nit_empresa`);

CREATE INDEX `alimentos_index_17` ON `alimentos` (`id_usuario`);

ALTER TABLE `valor_componentes` ADD FOREIGN KEY (`codigo_alimento`) REFERENCES `alimentos` (`codigo`);

ALTER TABLE `valor_componentes` ADD FOREIGN KEY (`id_componte`) REFERENCES `componentes` (`id`);

ALTER TABLE `usuario` ADD FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`nit`);

ALTER TABLE `fuentes` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `fuentes` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `grupos` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `grupos` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `grupos` ADD FOREIGN KEY (`id_fuentes`) REFERENCES `fuentes` (`id`);

ALTER TABLE `parte_analizada` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `parte_analizada` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `tipo_analisis` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `tipo_analisis` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `componentes` ADD FOREIGN KEY (`id_tipo_analisis`) REFERENCES `tipo_analisis` (`id`);

ALTER TABLE `alimentos` ADD FOREIGN KEY (`nit_empresa`) REFERENCES `empresa` (`nit`);

ALTER TABLE `alimentos` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

ALTER TABLE `alimentos` ADD FOREIGN KEY (`id_fuente`) REFERENCES `fuentes` (`id`);

ALTER TABLE `alimentos` ADD FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id`);

ALTER TABLE `alimentos` ADD FOREIGN KEY (`id_parte_analizada`) REFERENCES `parte_analizada` (`id`);