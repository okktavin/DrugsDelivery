CREATE DATABASE IF NOT EXISTS pharmacy_db;
USE pharmacy_db;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS farmacias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cep VARCHAR(10) NOT NULL
);
