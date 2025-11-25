CREATE DATABASE sistema_usuarios CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sistema_usuarios;

-- ==============================
-- TABELA: usuarios
-- ==============================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    data_nascimento DATE,
    genero VARCHAR(20),
    endereco VARCHAR(255),
    cidade VARCHAR(100),
    estado VARCHAR(50),
    cep VARCHAR(20),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE logs_acesso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    data_login TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ip VARCHAR(50),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

CREATE TABLE configuracoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_config VARCHAR(100) UNIQUE,
    valor TEXT
);

INSERT INTO usuarios (nome, email, senha, telefone, cidade, estado)
VALUES 
('Administrador', 'admin@sistema.com', '123456', '11999999999', 'São Paulo', 'SP');

INSERT INTO configuracoes (nome_config, valor)
VALUES 
('tema', 'claro'),
('itens_por_pagina', '10');