# agenda1

banco agenda1

create database agenda;
use agenda ;
create table agenda1(
id int (11) auto_increment not null,
nome varchar (20) not null,
sobreNome varchar (20),
telefone int (12)  not null, 
primary key (id),
unique key (telefone)
);
