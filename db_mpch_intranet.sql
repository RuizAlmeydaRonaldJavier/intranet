-- Eliminamos la base de datos si esta creada
DROP DATABASE IF EXISTS db_tributario;
-- Creamos la base de datos
CREATE DATABASE db_tributario;
-- Usamos la base de datos
USE db_tributario;


-- ******** TABLAS
-- Creamos la tabla usuarios
CREATE TABLE personas
(
  per_idPersona               INT(6) NOT NULL AUTO_INCREMENT,
  per_codigo                  VARCHAR(6) NOT NULL,
  per_nombre                  VARCHAR(45),
  per_apellido                VARCHAR(45),
  per_dni                     INT(8),
  per_direccion               VARCHAR(60),
  per_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  per_fechaModificacion       DATETIME,
  per_fechaEliminacion        DATETIME,
  per_idEstado                INT(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (per_idPersona)
);

CREATE TABLE empresas
(
  emp_idEmpresa               INT(6) NOT NULL AUTO_INCREMENT,
  emp_codigo                  VARCHAR(6) NOT NULL,
  emp_razonSocial             VARCHAR(60) NOT NULL,
  emp_ruc                     INT(11) NOT NULL,
  emp_direccion               VARCHAR(60) NOT NULL,
  emp_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  emp_fechaModificacion       DATETIME,
  emp_fechaEliminacion        DATETIME,
  emp_idEstado                INT(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (emp_idEmpresa)
);

CREATE TABLE contribuyentes
(
  con_idContribuyente         INT(6) NOT NULL AUTO_INCREMENT,
  con_codigo                  VARCHAR(6) NOT NULL,
  con_direccionFiscal         VARCHAR(60) NOT NULL,
  con_codigoConyugue          VARCHAR(6) NOT NULL DEFAULT 'P00001',
  con_idTipoContribuyente     INT(6) NOT NULL,
  con_codigoPersonaEmpresa    VARCHAR(6) NOT NULL,
  con_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  con_fechaModificacion       DATETIME,
  con_fechaEliminacion        DATETIME,
  con_idEstado                INT(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (con_idContribuyente)
);

CREATE TABLE tipo_contribuyentes
(
  tcon_idTipoContribuyente     INT(6) NOT NULL AUTO_INCREMENT,
  tcon_tipoContribuyente       INT(15) NOT NULL,
  tcon_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  tcon_idEstado                INT(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (tcon_idTipoContribuyente)
);

CREATE TABLE anios
(
  ani_idAnio                  INT(6) NOT NULL AUTO_INCREMENT,
  ani_anio                    INT(4) NOT NULL,
  ani_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  ani_idEstado                INT(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (ani_idAnio)
);

CREATE TABLE estados
(
  est_idEstado                INT(6) NOT NULL AUTO_INCREMENT,
  est_estado                  VARCHAR (15) NOT NULL,
  est_fechaRegistro           TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (est_idEstado)
);

CREATE TABLE accesos
(
  acc_idAcceso                INT(6) NOT NULL AUTO_INCREMENT,
  acc_clave                   VARCHAR(6) NOT NULL,
  acc_correoElectronico       VARCHAR(60) NOT NULL,
  acc_codigoContribuyente     VARCHAR(6) NOT NULL,
  acc_fechaRegistro           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  acc_fechaModificacion       DATETIME,
  acc_fechaEliminacion        DATETIME,
  acc_idEstado                INT(6) NOT NULL DEFAULT 1,
  PRIMARY KEY (acc_idAcceso)
);

/*CREATE TABLE calculo_impuesto 
 cimp_numPre
 cimp_basImp
 cimp_basImpAfec
 cimp_impAnual
 cimp_Form
 cimp_total
*/



-- ******** RELACIONES
-- Relacion de la tabla usuarios con pefiles
ALTER TABLE anios ADD CONSTRAINT fk_anio_estado FOREIGN KEY (ani_idEstado) REFERENCES estados (est_idEstado);

ALTER TABLE tipo_contribuyentes ADD CONSTRAINT fk_tipo_contribuyente_estado FOREIGN KEY (tcon_idEstado) REFERENCES estados (est_idEstado);

ALTER TABLE personas ADD CONSTRAINT fk_persona_estado FOREIGN KEY (per_idEstado) REFERENCES estados (est_idEstado);

ALTER TABLE empresas ADD CONSTRAINT fk_empresa_estado FOREIGN KEY (emp_idEstado) REFERENCES estados (est_idEstado);

ALTER TABLE contribuyentes ADD CONSTRAINT fk_contribuyente_estado FOREIGN KEY (con_idEstado) REFERENCES estados (est_idEstado);

ALTER TABLE accesos ADD CONSTRAINT fk_acceso_estado FOREIGN KEY (acc_idEstado) REFERENCES estados (est_idEstado);





-- ******** DATOS POR DEFECTO
-- Insertar perfiles
INSERT INTO estados (est_estado) VALUES ('Activo'), ('Inactivo'), ('Suspendido');

INSERT INTO anios (ani_anio) VALUES ('2015'), ('2016'), ('2017'), ('2018'), ('2019'), ('2020'), ('2021');

INSERT INTO tipo_contribuyentes (tcon_tipoContribuyente) VALUES ('Persona'), ('Empresa');

INSERT INTO personas (per_codigo, per_nombre, per_apellido, per_dni, per_direccion) VALUES 
('P00001', '', '', '', ''),
('P00002', 'Carlos Alfredo', 'Cassano Vilca', '23431243', 'San Clemente - Pisco'), 
('P00003', 'Luis Miguel', 'Lopez Rodriguez', '78623491', 'Santo Domingo - Chincha'), 
('P00004', 'Maria Rosa', 'Munayco Napa', '43914578', 'Lomo Largo - Sunampe');

INSERT INTO empresas (emp_codigo, emp_razonSocial, emp_ruc, emp_direccion) VALUES 
('E00001', 'Hipermercados Tootus', '21982145261', 'Avenida Pilpa'), 
('E00002', 'Inversiones Plaza Vea', '21563758621', 'Urbanización lo viñedos'), 
('E00003', 'Telefonica del Perú', '230965789030', 'Ovalo de la amistad');

INSERT INTO contribuyentes (con_codigo, con_direccionFiscal, con_codigoConyugue, con_idTipoContribuyente, con_codigoPersonaEmpresa) VALUES 
('C00001', 'San Clemente - Pisco', 'P00001', '1', 'P00002'),
('C00002', 'Santo Domingo - Chincha', 'P00004', '1', 'P00003'),
('C00003', 'Avenida Pilpa', 'P00001', '2', 'E00001'),
('C00004', 'Urbanización lo viñedos', 'P00001', '2', 'E00002'),
('C00005', 'Ovalo de la amistad', 'P00001', '2', 'E00003');

INSERT INTO accesos (acc_clave, acc_correoElectronico, acc_codigoContribuyente) VALUES 
('123456', 'prueba@gmail.com', 'C00001'),
('654321', 'test@gmail.com', 'C00002'),
('123456', 'prueba@gmail.com', 'C00004');