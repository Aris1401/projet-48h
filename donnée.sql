INSERT INTO TypeObjectif (designationObjectif) VALUES
('Perte de poids'),
('Prise de masse musculaire'),
('Remise en forme');

INSERT INTO Genre (designationGenre) VALUES
('Homme'),
('Femme');

INSERT INTO Utilisateur (nom, prenom, email, motDePasse, image, idTypeObjectif, estAdmin) VALUES
('Doe', 'John', 'john.doe@example.com', 'password123', 'image1.jpg', 1, 0),
('Smith', 'Jane', 'jane.smith@example.com', 'password456', 'image2.jpg', 2, 1),
('Johnson', 'David', 'david.johnson@example.com', 'password789', 'image3.jpg', 3, 0);

INSERT INTO ProfilUtilisateur (idUtilisateur, poids, taille, dateDeNaissance, idGenre) VALUES
(1, 70.5, 175, '1990-05-15', 1),
(2, 65.2, 165, '1985-09-22', 2),
(3, 80.8, 180, '1995-02-10', 1);

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
(3, 3, 1.5, 2, -50);

INSERT INTO Plat (recette, nom, calorie, description, image) VALUES
('Recette de salade légère', 'Salade verte', 150, 'Salade composée de légumes frais.', 'salade.jpg'),
('Poulet rôti avec légumes', 'Poulet rôti', 300, 'Poulet rôti accompagné de légumes grillés.', 'poulet.jpg'),
('Pâtes à la bolognaise', 'Pâtes bolognaise', 400, 'Pâtes servies avec une sauce bolognaise.', 'pates.jpg');

INSERT INTO Regime (designationRegime, description, image, duree, variationPoids, prixRegime) VALUES
('Régime équilibré', 'Régime équilibré avec une répartition adéquate des nutriments.', 'regime_equilibre.jpg', 30, -2, 49.99),
('Régime protéiné', 'Régime axé sur une consommation élevée de protéines.', 'regime_proteine.jpg', 60, -5, 79.99),
('Régime végétarien', 'Régime sans viande, basé sur les aliments origine végétale.', 'regime_vegetarien.jpg', 30, -3, 59.99);

INSERT INTO TypePourcentage (designation) VALUES
('viande'),
('volaille'),
('poisson');

INSERT INTO RegimePourcentage (idRegime, idTypePourcentage, pourcentage) VALUES
(1, 1, 30),
(1, 2, 30),
(1, 3, 40),
(2, 1, 0),
(2, 2, 50),
(2, 3, 50),
(3, 1, 0),
(3, 2, 100),
(3, 3, 0);

INSERT INTO ProgrammeRegime (jour, idRegime, idPlat, idActiviteSport) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3);

INSERT INTO Code (code, valeurCode, etat) VALUES
('ABCD', 10.0, 1),
('EFGH', 20.0, 1),
('IJKL', 15.0, 0);

INSERT INTO ValidationCode (idCode, idUtilisateur, dateValidation) VALUES
(1, 1, '2023-06-01'),
(2, 2, '2023-06-05'),
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
