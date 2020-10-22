create table pedidos (
nome_do_cliente varchar (100),
endereço varchar (100),
nome_do_prod varchar(150),
valor_unit float,
Quantidade int,
valor_total float
);

insert into pedidos values
("Cristiana Almeida", "Av.São João, 500", "geladeira",1444.90, 2,889.80),
("Rose Pereira","Av.Chico Pontes,58", "microondas",611.1,1,611.1),
("Pedro Henrique", "Av.Cruzeiro do Sul,580", "fogão",750.89,1,750.89);

select * from pedidos;

alter table pedidos add id int primary key auto_increment;

