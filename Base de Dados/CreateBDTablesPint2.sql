create table ComerciantesP(
	UserID int,
	IDComerciante int Identity(1,1),
	Username varchar,
	Palavrachave varchar,
	Colaborador int,
	Nome varchar,
	Idade int,
	Morada int,
	Sexo varchar,
	Telefone int,
	email varchar,
	constraint PK_IDComerciante Primary key(IDComerciante),
	constraint FK_C_UserID Foreign key(UserID) references UtilizadoresP(UserID)
)
create table ColaboradoresP(
	IDComerciante int ,
	IDColaborador int Identity(1,1),
	Username varchar,
	Palavrachave varchar,
	email varchar,
	constraint PK_IDColaborador Primary key(IDColaborador),
	constraint FK_C_IDComerciante Foreign key(IDComerciante) references ComerciantesP(IDComerciante)
)
create table PromoçoesP(
	IDComerciante int,
	IDPromoçao int Identity(1,1),
	DataInicio int,
	DataFim int,
	constraint PK_IDPromoçao Primary key(IDPromoçao),
	constraint FK_P_IDComerciante Foreign key(IDComerciante) references ComerciantesP(IDComerciante)
)
create table HistoricoAcessoP(
	UserID int,
	IDHistorico int Identity(1,1),
	Data_Acesso int ,
	Data_Saida int,
	Hora int,
	constraint PK_IDHistorico Primary key(IDHistorico),
	constraint FK_H_UserID Foreign key(UserID) references UtilizadoresP(UserID)
)