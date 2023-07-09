create database regime;
use regime;

create table utilisateur(
    idUtilisateur int not null auto_increment primary key ,
    nom varchar(20),
    prenom varchar(50),
    genre int ,
    mail varchar(50),
    mdp varchar(14)
);

create table InfoUtilisateur(
    IdInfoUtilisateur int not null primary key auto_increment,
    IdUtilisateur int not null,
    Poids double,
    Taille double,
    foreign key(IdUtilisateur) references  Utilisateur(IdUtilisateur)
);

create table Objectif(
    IdObjectif int not null primary key auto_increment,
    NomObjectif varchar(100)
);

insert into Objectif(NomObjectif) value('Augmenter Poids'),('Diminuer Poids');

create table Code(
    IdCode int not null primary key auto_increment,
    ValeurCode double,
    MontantCode double,
    Identifiant int
);