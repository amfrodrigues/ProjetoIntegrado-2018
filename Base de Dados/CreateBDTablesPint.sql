/* Criaçao das tabelas*/
create table UtilizadoresP(
	 UserID int Identity(1,1),
	 constraint PK_UserID Primary key (UserID)
)
create table AdministradorP(
UserID int ,
IDAdmin int Identity(1,1),
constraint PK_IDAdmin Primary key (IDAdmin),
constraint FK_A_UserID Foreign key (UserID) references UtilizadoresP(UserID)
)
create table ClientesP(
	UserID int,
	IDCliente int Identity(1,1),
	Username varchar,
	palavrachave varchar,
	Nome varchar,
	Idade int,
	Morada varchar,
	Sexo varchar,
	Telefone int,
	email varchar,
	Notificacao int , 
	Favoritos binary,
	Area_De_interesse binary,
	constraint PK_IDCliente Primary key(IDCliente),
	constraint FK_Cl_UserID Foreign key(UserID) references UtilizadoresP(UserID)
)
create table Areas_De_Interesse(
	IDCliente int,
	IDArea_de_interesse int identity(1,1),
	Restaracao	binary,
	Pastelaria	binary,
	Calcado		binary,
	Mecanica	binary,
	Florista	binary,
	Mobiliario	binary,
	constraint Pk_IDArea_de_interesse Primary key(IDArea_de_interesse),
	constraint FK_A_IDCliente Foreign key (IDCliente) references ClientesP(IDCliente)
)
create table FavoritosP(
	IDCliente int,
	IDFavoritos int identity(1,1),
	Restaracao	binary,
	Pastelaria	binary,
	Calcado		binary,
	Mecanica	binary,
	Florista	binary,
	Mobiliario	binary,
	constraint PK_IDFavoritos Primary key(IDFavoritos),
	constraint FK_F_IDCliente Foreign key(IDCliente) references ClientesP(IDCliente)
)
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