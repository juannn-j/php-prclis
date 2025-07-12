CREATE TABLE usuario (
    idusuario SERIAL PRIMARY KEY,
    correo VARCHAR(50) NOT NULL,
    passwd VARCHAR(10) NOT NULL
);

CREATE TABLE proyecto (
    idproyecto SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100) NOT NULL,
);

CREATE TABLE cliente (
    idcliente SERIAL PRIMARY KEY,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
);

CREATE TABLE asignacion (
    idasignacion SERIAL PRIMARY KEY,
    fechainicio DATE NOT NULL,
    fechafinal DATE NOT NULL
    idproyecto INT NOT NULL,
    idcliente INT NOT NULL,
    CONSTRAINT fk_proyecto_cliente
        FOREIGN KEY (idproyecto)
        REFERENCES proyecto(idproyecto),
    CONSTRAINT fk_cliente_proyecto
        FOREIGN KEY (idcliente)
        REFERENCES cliente(idcliente)
);
