create database db_buscaphp;

use db_buscaphp;

create table tbl_livro (
id int auto_increment primary key,
nome varchar(300) not null
);

insert into tbl_livro (nome) values ('Code Clean');
insert into tbl_livro (nome) values ('Engenharia de Software');
insert into tbl_livro (nome) values ('Domain Driven Design');