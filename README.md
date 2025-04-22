# 🍲 Sistema de Doações - MVC com PHP e MySQL

Sistema web para conectar **doadores de alimentos** a **instituições de caridade**, utilizando padrão de arquitetura **MVC** e conexão com banco de dados MySQL via **PDO Singleton**.

## ✨ Funcionalidades

- Cadastro de Doadores
- Cadastro de Instituições
- Registro de Doações
- Estrutura modular em MVC
- Integração com banco de dados MySQL
- Estilização com Tailwind CSS
- Pronto para expansão (como retirada de doações)

---

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- MySQL / phpMyAdmin
- XAMPP (Ambiente local)
- HTML5 + Tailwind CSS
- Padrão MVC com DAO, Service, Controller, Template e Singleton

---

## 📁 Estrutura de Diretórios


---

## 🧱 Banco de Dados

### Nome do banco: `doacoes`

### Script SQL:
```sql
CREATE DATABASE IF NOT EXISTS doacoes;
USE doacoes;

CREATE TABLE doadores ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100) NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL 
); 

CREATE TABLE instituicoes ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(150) NOT NULL, 
    endereco VARCHAR(255) NOT NULL 
); 

CREATE TABLE doacoes ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    doador_id INT, 
    instituicao_id INT, 
    descricao TEXT NOT NULL, 
    data_doacao DATE NOT NULL, 
    FOREIGN KEY (doador_id) REFERENCES doadores(id), 
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) 
);

▶️ Como Rodar o Projeto Localmente
Instale o XAMPP

Mova a pasta mvc20251 para dentro do diretório htdocs/

Inicie Apache e MySQL no painel do XAMPP

Acesse http://localhost/phpmyadmin e:

Crie o banco com o nome doacoes

Cole e execute o script SQL acima

Acesse http://localhost/mvc20251 no navegador

👥 Autores
Rayssa Silva — responsável pela estrutura base, doadores e instituições
Mateus — responsável pela parte de doações e retiradas

