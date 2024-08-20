CREATE DATABASE BANCO

USE BANCO

CREATE TABLE fluxo_caixa (     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,     data DATE NOT NULL,     tipo VARCHAR(10) NOT NULL,     valor DECIMAL(10,2) NOT NULL,     historico VARCHAR(150) NOT NULL,     cheque VARCHAR(3) NOT NULL )

select sum(case when tipo = 'entrada' then valor else 0 end) - sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa LIMIT 0, 1000
