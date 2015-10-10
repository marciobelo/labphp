drop database if exists bazar;
create database bazar;
use bazar;
create table categoria
(
	id_categoria integer primary key,
	descricao varchar(40) not null
);

insert into categoria values (1,'Ferragens');
insert into categoria values (2,'Elétrica');
