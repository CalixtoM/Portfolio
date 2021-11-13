CREATE DATABASE MSLand;

USE MSLand;

CREATE TABLE leads(
cd_lead int not null auto_increment primary key,
nm_lead varchar(30) not null,
ds_leademail varchar(30) not null,
nr_telefone int not null,
nr_celular int not null
);

create table tb_usuario(
cd_usuario int auto_increment primary key ,
nm_usuario varchar(255) not null,
ds_email varchar(255) not null,
ds_senha varchar(255) not null
);