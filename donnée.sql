INSERT INTO TypeObjectif (designationObjectif) VALUES
('Perte de poids'),
('Prise de masse '),
('IMC Ideal');

INSERT INTO Genre (designationGenre) VALUES
('Homme'),
('Femme');

INSERT INTO Utilisateur (nom, prenom, email, motDePasse, image, idTypeObjectif, estAdmin) VALUES
('Doe', 'John', 'john.doe@example.com', 'password123', 'image1.jpg', 1, 0),
('Smith', 'Jane', 'jane.smith@example.com', 'password456', 'image2.jpg', 2, 1),
('Johnson', 'David', 'david.johnson@example.com', 'password789', 'image3.jpg', 3, 0),
('Kevin', 'Trent', 'kevin.trent@example.com', 'password101', 'image4.jpg', 1, 0),
('Alex', 'Mercer', 'alex.mercer@example.com', 'password112', 'image5.jpg', 2, 0;

INSERT INTO ProfilUtilisateur (idUtilisateur, poids, taille, dateDeNaissance, idGenre) VALUES
(1, 70.5, 175, '1990-05-15', 1),
(2, 542, 163, '1985-09-22', 2),
(3, 80.8, 180, '1995-02-10', 1),
(4, 88.4, 189, '1986-04-07', 2),
(5, 95.7, 198, '1994-12-21', 1);

INSERT INTO Activite (designationActivite, description) VALUES
('Course à pied', 'Activité de course à pied en plein air.'),
('Musculation', 'Entraînement en salle de musculation.'),
('Yoga', 'Pratique du yoga pour la relaxation et la souplesse.');

INSERT INTO Sport (designationSport, description) VALUES
('Football', 'Jeu de football en équipe.'),
('Natation', 'Nage dans la piscine pour entraînement cardio.'),
('Tennis', 'Pratique du tennis sur le court.');

INSERT INTO ActiviteSport (idActivite, idSport, duree, nombre, variationPoids) VALUES
(1, 1, 1.5, 1, -100),
(2, 2, 1.0, 3, 0),
(3, 3, 1.5, 2, -50),
(2, 2, 1.0, 3, 0),
(3, 3, 1.5, 2, -50);


INSERT INTO Plat (recette, nom, calorie, description, image) VALUES
('Salade,tomate,oignon', 'Salade verte',90, 'Salade légère.', '#.jpg'),
('Pomme de terre,coriandre', 'Salada de pomme de terre', 200, 'Une autre façon de manger des pommes de terre', '#.jpg'),
('Banane,pomme,ananas,fraise', 'Salade de fruit', 300, 'Dessert sain mais savoureux', '#.jpg'),
('Carotte,crème liquide,oignon', 'Soupe de carotte', 150, 'Soupe de carotte bien chaude', '#.jpg'),
('Tomate,crème liquide,oignon', 'Soupe de tomate', 200, 'Soupe de tomate bien onctueuse', '#.jpg'),
('Spaghetti,coulis de tomate,viande haché', 'Pâtes bolognaise', 500, 'Pâtes servies avec une sauce bolognaise.', '#.jpg'),
('Spaghetti,fromage,thyn','Pâtes carbonara', 450, 'Pâtes carbonara bien frais', '#.jpg'),

INSERT INTO Regime (designationRegime, description, image, duree, variationPoids, prixRegime) VALUES
('Régime équilibré', 'Régime équilibré avec une répartition adéquate des nutriments.', '#.jpg', 30, -2, 49.99),
('Régime protéiné', 'Régime axé sur une consommation élevée de protéines.', '#.jpg', 60, -5, 79.99),
('Régime végétarien', 'Régime sans viande, basé sur les aliments origine végétale.', '#.jpg', 30, -3, 59.99),
('Régime avec fruit', 'Régime axé sur une consommation élevée de fruits.', '#.jpg', 60, -5, 79.99),
('Régime avec viande', 'Régime avec viande, et seulement avec.', '#.jpg', 30, -3, 59.99);

INSERT INTO TypePourcentage (designation) VALUES
('viande'),
('volaille'),
('poisson');

INSERT INTO RegimePourcentage (idRegime, idTypePourcentage, pourcentage) VALUES
(1, 1, 30),
(1, 1, 30),
(1, 5, 40),
(2, 4, 0),
(2, 2, 50),
(2, 3, 50),
(3, 3, 0),
(3, 1, 100),
(3, 4, 0),
(4, 6, 0),
(4, 6, 50),
(4, 5, 50),
(5, 2, 0),
(5, 1, 100),
(5, 4, 0);

INSERT INTO ProgrammeRegime (jour, idRegime, idPlat, idActiviteSport) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3);

INSERT INTO Code (code, valeurCode, etat) VALUES
('4G8EF', 10000.0, 0),
('D9ZN2', 2000.0, 0),
('165NB', 15000.0, 0),
('4WNTE', 100000.0, 0),
('9481F', 20000.0, 0),
('GJH91', 150000.0, 0),
('EW486', 100000.0, 0),
('R7E4D', 20000.0, 0),
('234RE', 1500.0, 0),
('RVG65', 10000.0, 0),
('E651R', 2000.0, 0),
('84R6F', 1500.0, 0),
('4G8F6', 10000.0, 0),
('F542D', 200000.0, 0),
('3SA68', 15000.0, 0);

INSERT INTO ValidationCode (idCode, idUtilisateur, dateValidation) VALUES
(1, 1, '2023-06-01'),
(2, 4, '2023-06-05'),
(3, 3, '2023-06-10');

INSERT INTO Transaction (dateTransaction, sortie, entre, idUtilisateur) VALUES
('2023-06-01', 50.0, 0, 1),
('2023-06-02', 0, 100.0, 2),
('2023-06-03', 30.0, 0, 3);

INSERT INTO HistoriqueAchatRegime (idUtilisateur, idRegime, montant, dateAchat) VALUES
(1, 1, 50.0, '2023-06-01'),
(2, 2, 80.0, '2023-06-05'),
(3, 3, 60.0, '2023-06-10');

INSERT INTO TypeAbonnement (designation, prix, reduction) VALUES
('Gold', 50000, 15);

INSERT INTO Abonnement (idUtilisateur, idTypeAbonnement, dateDebut, dateFin) VALUES
(1, 1, '2023-06-01', '2024-06-30');
