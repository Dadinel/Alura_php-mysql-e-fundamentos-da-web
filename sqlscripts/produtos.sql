create table produtos (id integer auto_increment primary key, nome varchar(255), preco decimal(10,2));
alter table produtos add column descricao text;
update produtos set descricao = 'Descricao deste produto';