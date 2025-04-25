CREATE DATABASE db2ads;

USE db2ads;

CREATE TABLE tbUsuario(
 id int,
 email varchar(50),
 senha varchar(50),
 ativo varchar(1)
);

SELECT * FROM tbUsuario;