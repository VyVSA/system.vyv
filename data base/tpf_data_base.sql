CREATE DATABASE tpf_data_base;

USE tpf_data_base;

CREATE TABLE usuarios (
	id		            INT(10) AUTO_INCREMENT PRIMARY KEY,
	documento 	        INT(20),
	nombre 		        VARCHAR(50),
	apellido 		    VARCHAR(50),
	celular		        VARCHAR(20),
	correo_electronico	VARCHAR(100),
	direccion		    VARCHAR(100),
	contrasenha	        VARCHAR(8),
	estado		        INT(2),
	perfil		        INT(2)
);