# Comandos para criação do banco de dados do Microblog

## 1) Criar banco de dados (ajuste para conter seu nome)
CREATE DATABASE progweb_microblog_seunome CHARACTER SET "utf8mb4";

## 2) Criar tabela de usuários
CREATE TABLE usuarios(
	id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45) NOT NULL,
	email VARCHAR(40) NOT NULL UNIQUE, -- garante que o e-mail será único
  	senha VARCHAR(255) NOT NULL,
	tipo ENUM('admin','editor') NOT NULL
);

## 3) Criar tabela de posts
CREATE TABLE posts(
	id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	data DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, -- pega a data atual no momento
	titulo VARCHAR(100) NOT NULL,
	texto TEXT NOT NULL,
	resumo TEXT NOT NULL,
  	imagem VARCHAR(40) NOT NULL, -- aqui guardaremos somente o nome.ext da imagem
  	usuario_id SMALLINT NOT NULL
);

## 4) Criar chave estrangeira para relacionamento entre as tabelas
ALTER TABLE posts 
  ADD CONSTRAINT fk_posts_usuarios 
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id); 