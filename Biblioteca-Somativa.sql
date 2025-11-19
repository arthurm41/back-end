CREATE DATABASE Biblioteca;

USE Biblioteca;

CREATE TABLE biblioteca (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    ano INT NOT NULL,
    genero VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL
);
