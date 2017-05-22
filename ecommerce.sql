create database ecommerce;

use ecommerce;

create table CLIENTE (
codcliente int not null auto_increment primary key,
nome varchar(50) not null,
login varchar(12) not null,
senha int(15) check (senha>=000000 or senha<=999999999999999)
);
Alter Table CLIENTE add column telefone varchar(20);
Alter Table CLIENTE add column endereco varchar(80) not null;

create table FUNCIONARIO(
codfuncionario int not null auto_increment primary key,
nome varchar(50) not null,
login char(8) not null,
senha int(15) check (senha>=000000 or senha<=999999999999999)
);

Alter table FUNCIONARIO add column telefone varchar(20);
Alter Table CLIENTE drop column endereco;

Alter Table CLIENTE add column endereco varchar(70) not null;

use ecommerce;

create table COMPRA(
codcompra int not null auto_increment primary key,
codproduto int not null,
codfuncionario int not null,
codcliente int not null
);

create table produto(
codproduto int not null auto_increment primary key,
nome_produto varchar(20) not null,
categoria varchar(20) not null
);