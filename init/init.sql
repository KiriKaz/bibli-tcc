CREATE DATABASE IF NOT EXISTS bibli;

USE bibli;

CREATE TABLE IF NOT EXISTS usuario (
    id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(85) NOT NULL,
    email VARCHAR(250) NOT NULL,
    password VARCHAR(60) NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
)

-- CREATE TABLE IF NOT EXISTS aula (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     aulas_id INT(12) NOT NULL,
--     nome VARCHAR(125) NOT NULL,
--     conteudo VARCHAR(25000) NOT NULL,
-- )
-- 
-- CREATE TABLE IF NOT EXISTS aulas (
--     id INT(12) PRIMARY KEY NOT NULL AUTO_INCREMENT,
--     aula_id INT(12) NOT NULL,
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