create database db_buscaphp;
select * from tbl_livro where nome like '%code%';
use db_buscaphp;

create table tbl_livro (
id int auto_increment primary key,
nome varchar(300) not null
);

insert into tbl_livro (nome) values ('Code Clean');
insert into tbl_livro (nome) values ('Engenharia de Software');
insert into tbl_livro (nome) values ('Domain Driven Design');


## O comando LIKE é usado junto com where substituindo 
## o =, >, <, != ... e serve para encontrar resultados 
## semelhantes ao desejado. O % indica a substituição alter
## de algum termo. Por exemplo para pesquisar "livro legal"
## é digitado "Livro%" ou "%legal"
select * from tbl_livro where nome like '%code%';