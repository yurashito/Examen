insert into genre value(0,'Homme'),(1,'Femme');

INSERT INTO utilisateur (nom, prenom, genre, mail, mdp)
VALUES
    ('Rakoto', 'Jean', 0, 'jean.rakoto@gmail.com', 0000),
    ('Rasoana', 'Marie', 1, 'marie.rasoana@gmail.com', 0000),
    ('Andriamihaja', 'Hery', 0, 'hery.andriamihaja@gmail.com', 0000),
    ('Razafindramanitra', 'Sophie', 1, 'sophie.razafindramanitra@gmail.com', 0000),
    ('Rakotomalala', 'Andry', 0, 'andry.rakotomalala@gmail.com', 0000);

---------------------- Aliment et sport
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Riz aux légumes ', 0.4, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Pâtes à la carbonara', 0.3, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Steak avec frites et salade', 0.6, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Pizza avec fromage', 0.8,20000.0, 300);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Brocoli', -0.2, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Thon en conserve', -0.15, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Yaourt grec sans gras', -0.1, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Chou-fleur', -0.3, 20000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Blanc de poulet grillé', -0.25, 20000.0, 1);

INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Avocat toast', 0.2, 10000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Lasagnes', 0.6, 30000.0, 1);
INSERT INTO Aliment (Nom, Poids, Montant, Duree) VALUES ('Smoothies protéinés', 0.5, 8000.0, 1);


INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Course à pied', -0.5, 30.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Natation', 0.7, 45.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Haltérophilie', 0.4, 60.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Yoga', 0.2, 60.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Cyclisme', 1, 90.0, 1);
INSERT INTO Sport (Nom, Poids, Duree, NbrJours) VALUES ('Randonnée', -1, 60.0, 1);

------------------------------ Code
INSERT INTO Code (ValeurCode, MontantCode)
VALUES
    (12345, 60000),
    (67890, 75000),
    (23456, 80000),
    (78901, 90000),
    (34567, 65000),
    (89012, 70000),
    (45678, 55000),
    (90123, 60000),
    (56789, 70000),
    (23451, 55000),
    (67895, 80000),
    (34512, 90000),
    (78956, 75000),
    (90134, 65000),
    (56781, 55000);

----------------Porte Money
insert into PorteMoney(IdUtilisateur,ValeurMoney) value(1,0);
insert into PorteMoney(IdUtilisateur,ValeurMoney) value(2,0);
insert into PorteMoney(IdUtilisateur,ValeurMoney) value(3,0);
insert into PorteMoney(IdUtilisateur,ValeurMoney) value(4,0);
insert into PorteMoney(IdUtilisateur,ValeurMoney) value(5,0);
