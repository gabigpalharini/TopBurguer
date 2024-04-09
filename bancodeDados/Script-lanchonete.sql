drop database if exists lanchonete;

create database lanchonete;

use lanchonete;

create table cliente(
 id int not null auto_increment,
 nome varchar(220) not null,
 endereco varchar(220) not null,
 telefone varchar(11) not null,
 email varchar(220) not null unique,
 cpf varchar(11) not null unique,
 password varchar(45) not null,
 primary key(id)
);


create table produtos(
id int not null auto_increment,
nome varchar(220) not null,
preco decimal(10,2),
ingredientes varchar(220) not null,
imagem blob not null,
primary key(id)
);

create table status(
id int not null auto_increment,
status varchar(50) not null,
primary key(id)
);

create table pedidos(
id int not null auto_increment,
valorTotal decimal(10,2),
status_id int not null,
clientes_id int not null,
primary key(id),
constraint fk_status_pedidos
   foreign key (status_id)
   references status(id),
  constraint fk_clientes_pedidos
    foreign key(clientes_id)
    references cliente(id)
);

create table produtos_has_pedidos(
produtos_id int not null,
pedidos_id int not null,
primary key(produtos_id, pedidos_id),
constraint fk_produtos_pedidos
   foreign key(produtos_id)
   references produtos(id),
constraint fk_pedidos_produtos
   foreign key(pedidos_id)
   references pedidos(id)
);