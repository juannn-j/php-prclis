CREATE TABLE usuario (
    idusuario SERIAL PRIMARY KEY,
    correo VARCHAR(50) NOT NULL,
    passwd VARCHAR(10) NOT NULL
);

CREATE TABLE proyecto (
    idproyecto SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100) NOT NULL
);

CREATE TABLE cliente (
    idcliente SERIAL PRIMARY KEY,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

CREATE TABLE asignacion (
    idasignacion SERIAL PRIMARY KEY,
    fechainicio DATE NOT NULL,
    fechafinal DATE NOT NULL,
    estado VARCHAR(20) NOT NULL,
    idproyecto INT NOT NULL,
    idcliente INT NOT NULL,
    CONSTRAINT fk_asignacion_proyecto FOREIGN KEY (idproyecto) REFERENCES proyecto(idproyecto),
    CONSTRAINT fk_asignacion_cliente FOREIGN KEY (idcliente) REFERENCES cliente(idcliente)
);

INSERT INTO usuario (correo, passwd) VALUES
('juan@example.com', 'abc123'),
('ana@example.com', 'qwe456'),
('mario@example.com', 'xyz789');

INSERT INTO proyecto (nombre, descripcion) VALUES
('WebApp', 'Aplicación web de ventas'),
('ERP', 'Sistema ERP para gestión empresarial'),
('Intranet', 'Intranet corporativa interna');

INSERT INTO cliente (nombres, apellidos, telefono) VALUES
('Carlos', 'Ramirez', '987654321'),
('Lucía', 'Paredes', '912345678'),
('Miguel', 'Vega', '956789123');

INSERT INTO asignacion (fechainicio, fechafinal, estado, idproyecto, idcliente) VALUES
('2025-07-01', '2025-07-31', 'En progreso', 1, 1),
('2025-06-15', '2025-08-15', 'Pendiente', 2, 2),
('2025-05-01', '2025-06-30', 'Completado', 3, 3);
