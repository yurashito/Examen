create database regime;
use regime;

create table genre(
    idGenre int primary key,
    Valeur varchar(50)
);

insert into genre value(0,'Homme'),(1,'Femme');

create table utilisateur(
    idUtilisateur int not null auto_increment primary key ,
    nom varchar(20),
    prenom varchar(50),
    genre int ,
    mail varchar(50),
    mdp varchar(14),
    foreign key(genre) references genre(idGenre)
);

insert into utilisateur(nom,prenom,genre,mail,mdp) value('Razafinjatovo','Diary',1,'Diary@gmail.com',0000);

create table InfoUtilisateur(
    IdInfoUtilisateur int not null primary key auto_increment,
    IdUtilisateur int not null,
    Poids double,
    Taille double,
    foreign key(IdUtilisateur) references  Utilisateur(IdUtilisateur)
);

create table PorteMoney(
    IdPorteMoney  int not null primary key,
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


-- 0 valide , 10 en attente de confirmation , 20 confirmer
create table Code(
    IdCode int not null primary key auto_increment,
    ValeurCode double,
    MontantCode double,
    Identifiant int
);

create table CodeAttente(
    IdCodeAttenet int not null primary key auto_increment,
    IdUtilisateur int not null,
    IdCode int not null,
    foreign key(IdUtilisateur) references utilisateur(IdUtilisateur),
    foreign key(IdCode) references Code(IdCode)
);
