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