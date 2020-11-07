create database lojaFullStackEletro;

create table produtos (
id int auto_increment,
categoria varchar(50),
descricao varchar(100),
preco float,
preco_venda float,
imagem varchar (150),
primary key (id)
);

select * from produtos;

insert into produtos(categoria,descricao,preco,preco_venda)
values ("geladeira" , "Eletrolux 2 Portas Cycle Defrost 260L 217v Branco",1700.89,1444.90,"/imagens/Geladeira Electrolux 2 Portas Cycle Defrost 260L 127v Branco");
insert into produtos (categoria,descricao,preco,preco_venda)
 values ("geladeira" , " Continental Frost Free - Duplex 370L TC41S", 2000.00,1800.49,"/imagens/Continental Frost Free - Duplex 370L TC41S.jpg");

select * from produtos;

alter table produtos modify imagem varchar(500);


insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("geladeira" , " Continental Frost Free - Duplex 472L TC56", 2500.00,2249.49,"/imagens/Continental%20Frost%20Free%20-%20Duplex%20Branco%20472L%20TC56.jpg ");
 
 insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("fogao" , "  Consul Acendimento Automático - CFO4 NARUNA", 800.99,750.89,"/imagens/Fog%C3%A3o%204%20Bocas%20Consul%20Acendimento%20Autom%C3%A1tico%20-%20CFO4%20NARUNA.jpg
 ");
  
  insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("fogao" ,"5 Bocas Consul Acendimento Automático", 800.99,750.89,"/imagens/Fog%C3%A3o%205%20Bocas%20Consul%20Acendimento%20Autom%C3%A1tico.jpg ");
  
  insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("microondas" , "Electrolux com Painel Integrado 31L MI41S - 220 Volts", 750.11,611.10,"/imagens/Micro-ondas%20Electrolux%20com%20Painel%20Integrado%2031L%20MI41S%20-%20220%20Volts.jpg ");
 
 insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("microondas" , " Continental Frost Free - Duplex 370L TC41S", 2000.00,1800.49,"/imagens/Micro-ondas%20Electrolux%20MTD30%20-%2020L.jpg ");
  
  
  insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("microondas" , " Continental Frost Free - Duplex 370L TC41S", 2000.00,1800.49,"/imagens/Microondas%20LG%20Easy%20Clean%2030%20L%20Branco%20220V%20MS3052RA.jpg");
  
  insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("Lavadora de Roupas" , "  Consul CWB09 ABANA - 9Kg 15 Programas de Lavagem", 1900.89,1089.90,"/imagens/Lavadora%20de%20Roupas%20Consul%20CWB09%20ABANA%20-%209Kg%2015%20Programas%20de%20Lavagem.jpg");
  
  insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("Lavadora de Roupas" , "  Electrolux LAC13 - 13Kg 12 Programas de Lavagem", 1700.89,1400.90,"/imagens/Lavadora%20de%20Roupas%20Electrolux%20LAC13%20-%2013Kg%2012%20Programas%20de%20Lavagem.jpg");
 
 insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("Lava_louca" , " Brastemp Ative! BLF08 AB - 8 Serviços", 2077.89,1888.99,"/imagens/Lava-Lou%C3%A7as%20Brastemp%20Ative!%20BLF08%20AB%20-%208%20Servi%C3%A7os.jpg");
 
 insert into produtos (categoria,descricao,preco,preco_venda,imagem)
 values ("lava_louca" , " Branca 8 Serviços (LV08B) - Electrolux", 2500.89,2089.19,"/imagens/Lava-lou%C3%A7as%20Branca%208%20Servi%C3%A7os%20(LV08B)%20-%20Electrolux.jpg");


create table pedidos (
id int auto_increment
nome_do_cliente varchar (100),
endereço varchar (100),
telefone int(11),
nome_do_prod varchar(150),
valor_unit float,
Quantidade int,
valor_total float
);
insert into pedidos values
(1 "Cristiana Almeida", "Av.São João, 500", 1198887898,  "geladeira",1444.90, 2,889.80),
(2 "Rose Pereira","Av.Chico Pontes,58", 1198887898, "microondas",611.1,1,611.1),
(3 "Pedro Henrique", "Av.Cruzeiro do Sul,580", 1198887898, "fogão",750.89,1,750.89),
(4, "Fabiana Rocha","Av.Guilherme Cotching, 700", 1198974582, "fogão", 750.89, 2 ,1501.78),
(5, "Tom Ribeiro","Largo da Concordia,80", 119857432, "lava-louca", 1888.99,1,1888.99),
(6, "Tomás Brito","Rua:Curuça,89", 1198574520, "lava-louca", 1888.99,1,1888.99);



