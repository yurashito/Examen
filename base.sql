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
    adresse varchar(30),
    telephone varchar(30),
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

create table Aliment(
    Id int  not null primary key auto_increment,
    Nom varchar(30),
    Poids double,
    Montant double,
    duree double 
);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Riz aux légumes ', 0.4, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Pâtes à la carbonara', 0.3, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Steak avec frites et salade', 0.6, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Pizza avec fromage', 0.8,20000.0, 300);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Brocoli', -0.2, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Thon en conserve', -0.15, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Yaourt grec sans gras', -0.1, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Chou-fleur', -0.3, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Blanc de poulet grillé', -0.25, 20000.0, 1);


create table Sport(
    Id int  not null primary key auto_increment,
    Nom varchar(20),
    Poids double ,
    Duree double,
    NbrJours double
);

INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Course à pied', -0.5, 30.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Natation', 0.7, 45.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Haltérophilie', 0.4, 60.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Yoga', 0.2, 60.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Cyclisme', 1, 90.0, 1);


insert into Sport values(null , 'basket' , -1.5 , 38 , 1);
