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
/* falta parte 2*/