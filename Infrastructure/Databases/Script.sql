
CREATE DATABASE IF NOT EXISTS gestion_financiera;
USE gestion_financiera;

-- Tabla usuario
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numero_identificacion INT NOT NULL,
    tipo_identificacion ENUM('Tarjeta de Identidad', 'Cédula de ciudadanía', 'Pasaporte', 'Cédula de extranjería') NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    pregunta_recordar_contrasena VARCHAR(255) NOT NULL,
    respuesta_recuperar_contrasena VARCHAR(255) NOT NULL,
    primer_nombre VARCHAR(50) NOT NULL,
    segundo_nombre VARCHAR(50),
    primer_apellido VARCHAR(50) NOT NULL,
    segundo_apellido VARCHAR(50),
    genero ENUM('Masculino', 'Femenino'),
    email VARCHAR(100) NOT NULL,
    numero_telefono INT,
    foto VARCHAR(255),
    rol ENUM('Usuario', 'Administrador') NOT NULL,
    pais VARCHAR(50) NOT NULL,
    ciudad VARCHAR(50) NOT NULL
);

-- Tabla ingreso
CREATE TABLE ingresos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    fecha_recepcion DATE DEFAULT CURRENT_DATE,
    nombre_ingreso VARCHAR(100) NOT NULL,
    valor_ingreso DECIMAL(10, 2) NOT NULL CHECK (valor_ingreso > 0),
    fuente_ingreso VARCHAR(100) NOT NULL,
    descripcion_ingreso TEXT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO usuarios (
    numero_identificacion, tipo_identificacion, contrasena,
    pregunta_recordar_contrasena, respuesta_recuperar_contrasena,
    primer_nombre, segundo_nombre, primer_apellido, segundo_apellido,
    genero, email, numero_telefono, foto, rol, pais, ciudad
) VALUES (
    123456, 'Cédula de ciudadanía', 'mi_contraseña_segura',
    '¿Nombre de tu primera mascota?', 'Firulais',
    'Carlos', 'Alberto', 'González', 'Pérez',
    'Masculino', 'carlos@example.com', 987654321, 'foto.jpg',
    'Usuario', 'Colombia', 'Bogotá'
);

INSERT INTO ingresos (
    id_usuario, nombre_ingreso, valor_ingreso, fuente_ingreso, descripcion_ingreso
) VALUES (
    1, 'Salario', 1500.00, 'Empresa Privada', 'Pago mensual de salario'
);

ALTER TABLE usuario RENAME TO usuarios;
ALTER TABLE Factura RENAME TO Facturas;


Drop table usuarios;
Drop table ingresos;