create database regime;
use regime;

create table genre(
    idGenre int primary key,
    Valeur varchar(50)
);

create table utilisateur(
    idUtilisateur int not null auto_increment primary key ,
    nom varchar(20),
    prenom varchar(50),
    genre int ,
    mail varchar(50),
    mdp varchar(14),
    foreign key(genre) references genre(idGenre)
);


create table InfoUtilisateur(
    IdInfoUtilisateur int not null primary key auto_increment,
    IdUtilisateur int not null,
    Poids double,
    Taille double,
    adresse varchar(30),
    telephone varchar(30),
    foreign key(IdUtilisateur) references  Utilisateur(IdUtilisateur)
);

insert into InfoUtilisateur(IdUtilisateur,Poids,Taille,adresse,telephone) value(1,70,160,'Vk II 21 bis','0320125410');

create table PorteMoney(
    IdPorteMoney  int not null primary key auto_increment,
    IdUtilisateur int not null,
    ValeurMoney double,
    foreign key(IdUtilisateur) references utilisateur(idUtilisateur)
);

insert into PorteMoney(IdUtilisateur,ValeurMoney) value(1,1000);

create table Objectif(
    IdObjectif int not null primary key auto_increment,
    NomObjectif varchar(100)
);

insert into Objectif(NomObjectif) value('Augmenter Poids'),('Diminuer Poids');

create table ObjectifClient(
    IdObjectifClient int not null primary key auto_increment,
    DateInsertion Timestamp default now(),
    IdClient int not null,
    IdObjectif int not null,
    ObjectifPoids double,
    foreign key(IdClient) references utilisateur(IdUtilisateur),
    foreign key(IdObjectif) references Objectif(IdObjectif)
);

-- 0 valide , 10 en attente de confirmation , 20 confirmer
create table Code(
    IdCode int not null primary key auto_increment,
    ValeurCode double unique,
    MontantCode double,
    Identifiant int default 0
);

create table CodeAttente(
    IdCodeAttenet int not null primary key auto_increment,
    IdUtilisateur int not null,
    IdCode int not null,
    foreign key(IdUtilisateur) references utilisateur(IdUtilisateur),
    foreign key(IdCode) references Code(IdCode)
);

create table Aliment(
    Id int  not null primary key auto_increment,
    Nom varchar(30),
    Poids double,
    Montant double,
    duree double default 1,
    PourcentageViande double,
    PourcentagePoisson double,
    PourcentageVolaille double
);

create table Sport(
    Id int  not null primary key auto_increment,
    Nom varchar(20),
    Poids double ,
    Duree double,
    NbrJours double default 1
);


-- -------------------------View
-- create view CodeAttenteValidation as(
--     select utilisateur.idUtilisateur,code.IdCode,utilisateur.nom,ValeurCode,MontantCode 
--     from Utilisateur join codeAttente 
--     on codeAttente.IdUtilisateur=utilisateur.idUtilisateur 
--     join Code 
--     on Code.IdCode = CodeAttente.IdCode
-- );

-- CREATE VIEW StatClient AS 


    SELECT Objectif.NomObjectif,count(idClient) as NombreClient,
    DATE_FORMAT(DateInsertion, '%M') AS Mois 
    FROM ObjectifClient 
    join Objectif on 
    Objectif.IdObjectif = ObjectifClient.IdObjectif GROUP BY DATE_FORMAT(DateInsertion, '%M') ,
    Objectif.IdObjectif
    ORDER BY MONTH(DateInsertion) ;
