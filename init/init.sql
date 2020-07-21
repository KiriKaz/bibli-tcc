CREATE DATABASE IF NOT EXISTS bibli;

USE bibli;

CREATE TABLE IF NOT EXISTS usuario (
    id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(85) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(60) NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    admin INT(1) NOT NULL DEFAULT 0
);

-- CREATE TABLE IF NOT EXISTS perfil (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     id_usuario INT(12) NOT NULL,
--     statustext VARCHAR(180) NOT NULL
-- )

-- CREATE TABLE IF NOT EXISTS activity (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     id_perfil INT(12) NOT NULL,
--     activitytext VARCHAR(600) NOT NULL
-- )

CREATE TABLE IF NOT EXISTS classe (
    id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    aulas_id INT(12) NOT NULL,
    nome VARCHAR(185) NOT NULL
);

CREATE TABLE IF NOT EXISTS aula (
    id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    aulas_id INT(12) NOT NULL,
    nome VARCHAR(185) NOT NULL,
    conteudo VARCHAR(8000) NOT NULL
);

-- CREATE TABLE IF NOT EXISTS classe (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     aulas_id INT(12) NOT NULL,
--     nome VARCHAR(125) NOT NULL,
--     conteudo VARCHAR(25000) NOT NULL,
-- )

-- CREATE TABLE IF NOT EXISTS aula (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     categoria_id INT(12) NOT NULL,
--     FOREIGN KEY(aula_id) REFERENCES aula(id)
-- )
-- 
-- ALTER TABLE aula ADD CONSTRAINT FOREIGN KEY(aulas_id) REFERENCES aulas(id);
-- 
-- CREATE TABLE IF NOT EXISTS usuario (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     username VARCHAR(85) NOT NULL,
--     
-- )
-- 
-- CREATE TABLE IF NOT EXISTS categoria (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT
--     aulas_id INT(12) NOT NULL,
--     nome VARCHAR(125) NOT NULL,
--     FOREIGN KEY(aulas_id) REFERENCES aulas(id)
-- )
-- 
-- ALTER TABLE aulas ADD CONSTRAINT FOREIGN KEY(categoria_id) REFERENCES categoria(id);