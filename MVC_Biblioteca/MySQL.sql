create database mvc_biblioteca;
use mvc_biblioteca;

create table livro(
	ID integer auto_increment primary key,
    TITÚLO varchar(255),
    AUTOR varchar(255),
	ANO_PUBLICAÇAO varchar(255),
    EDITORA varchar(255)
);

select * from livro;
