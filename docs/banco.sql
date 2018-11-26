create database bancoOtica;
use bancoOtica;

create table fornecedor (
	id int primary key,
	nomeResponsavel varchar (150),
	nomeEmpresa varchar(150),
	cnpj varchar(150),
	endereco varchar(150),
	numero int,
	bairro varchar(150),
	cidade varchar (150),
	email varchar(150),
	telefone varchar(150),
	produto int
);

create table produto (
	id int primary key,
	nome varchar (150),
	marca varchar(150),
	quantidade int,
	preco float,
	fornecedor int
);

create table cliente (
	id int primary key,
	endereco varchar(150),
	numero int,
	bairro varchar(150),
	cidade varchar(150),
	nome varchar(150),
	cpf int,
	rg int,
	telefone int,
	email varchar(150)
);

create table consulta (
	id int primary key,
	data date,
	medico varchar(150),
	enderecoClinica varchar(150),
	numero int,
	bairro varchar(150),
	cidade varchar(150),
	telefone int,
	odEsf varchar(50),
	oeEsf varchar (50),
	odCil varchar (50),
	oeCil varchar (50),
	eixoD varchar (50),
	eixoE varchar (50),
	adicao varchar (50),
	dnpSn varchar (50),
	lentes varchar (50),
	observacoes varchar (100),
	armacoes varchar (50),
	alturaCo varchar (50),
	opticoResponsavel varchar (150),
	crooOptico varchar (50),
	crmMedico varchar (50),
	armacaoVertical varchar (50),
	armacaoHorizontal varchar (50),
	armacaoDiagonal varchar(50),
	ponte varchar (50),
	cliente int
);

create table Venda (
	id int primary key, 
	produto int, 
	cliente int,
	funcionario int,
	quantidade int,
	valorTotal float
);

create table Encomenda (
	id int primary key, 
	funcionario int, 
	cliente int, 
	produto int,
	fornecedor int,
	quantidade int
);

create table Funcionario (
	id int primary key, 
	nome varchar (150),
	endereco varchar (150),
	numero int,
	bairro varchar (150),
	cidade varchar (150),
	telefone int, 
	email varchar (150)
);



	
alter table Produto add Constraint fk_fornecedor_produto foreign key (fornecedor) references Fornecedor (id);
alter table Venda add Constraint fk_produto_venda foreign key (produto) references Produto (id); 
alter table Venda add Constraint fk_cliente_venda foreign key (cliente) references Cliente (id);
alter table Venda add Constraint fk_funcionario_venda foreign key (funcionario) references Funcionario (id);
alter table Encomenda add Constraint fk_produto_encomenda foreign key (produto) references Produto (id);
alter table Encomenda add Constraint fk_funcionario_encomenda foreign key (funcionario) references Funcionario (id);
alter table Encomenda add Constraint fk_cliente_encomenda foreign key (cliente) references Cliente (id);
alter table Encomenda add Constraint fk_fornecedor_encomenda foreign key (fornecedor) references Fornecedor (id);
alter table Consulta add Constraint fk_cliente_consulta foreign key (cliente) references Cliente (id);
