select * from pedidos

alter table pedidos add column 
 telefone int(11) not null
after endereço;

alter table pedidos modify column id int first;

update pedidos
set telefone = 1198887898
where  1;

insert into pedidos values 
(4, "Fabiana Rocha","Av.Guilherme Cotching, 700", 1198974582, "fogão", 750.89, 2 ,1501.78),
(5, "Tom Ribeiro","Largo da Concordia,80", 119857432, "lava-louca", 1888.99,1,1888.99),
(6, "Tomás Brito","Rua:Curuça,89", 1198574520, "lava-louca", 1888.99,1,1888.99);
