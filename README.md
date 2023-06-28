# RETO
CRUD PHP

#BASE DE DATOS:

CREATE DATABASE campuslands;

CREATE TABLE pais(
	 idPais INT PRIMARY KEY AUTO_INCREMENT,
	 nombrePais VARCHAR(50) NOT NULL
);

CREATE TABLE departamento(
	idDep INT PRIMARY KEY AUTO_INCREMENT,
	nombreDep VARCHAR(50) NOT NULL,
	idPais INT NOT NULL,
	FOREIGN KEY (idPais) REFERENCES pais(idPais)
);

CREATE TABLE region(
	idReg INT PRIMARY KEY AUTO_INCREMENT,
	nombreReg VARCHAR(60) NOT NULL,
	idDep INT NOT NULL,
	FOREIGN KEY (idDep) REFERENCES departamento(idDep)
);

CREATE TABLE campers(
	idCamper VARCHAR(20) NOT NULL UNIQUE,
	nombreCamper VARCHAR(50) NOT NULL,
	apellidoCamper VARCHAR(50) NOT NULL,
	fechaNac date,
	idReg INT NOT NULL,
	FOREIGN KEY (idReg) REFERENCES region(idReg)
);

#inserciones a la base de datos:
INSERT INTO pais (nombrePais) VALUES ('Colombia');
INSERT INTO pais (nombrePais) VALUES ('Panama');
INSERT INTO pais (nombrePais) VALUES ('Brasil');
INSERT INTO pais (nombrePais) VALUES ('Peru');

INSERT INTO departamento (nombreDep,idPais) VALUES ('Santander',1);
INSERT INTO departamento (nombreDep,idPais) VALUES ('Boyaca',1),('Bolivar',1),('Norte de Santander',1),('Valle del Cauca',1);

INSERT INTO region (nombreReg,idDep) VALUES ('Bucaramanga',1),('Tunja',2),('Cucuta',4);
