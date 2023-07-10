drop database regime;

create database regime;

use regime;

create table TypeObjectif(
    idTypeObjectif INTEGER PRIMARY KEY AUTO_INCREMENT,
    designationObjectif varchar(255) not null
);

create table Genre(
    idGenre INTEGER PRIMARY KEY AUTO_INCREMENT,
    designationGenre varchar(255) not null
);

create table Utilisateur(
    idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    email varchar(255) not null,
    motDePasse varchar(255) not null,
    idTypeObjectif integer not null,
    estAdmin integer not null, 
    Foreign Key (idTypeObjectif) REFERENCES TypeObjectif(idTypeObjectif)  
);

create table ProfilUtilisateur(
    idProfilUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur integer not null,
    poids decimal not null,
    taille decimal not null,
    dateDeNaissance DATE not null,
    idGenre integer,
    Foreign Key (idUtilisateur) REFERENCES Utilisateur(idUtilisateur),
    Foreign Key (idGenre) REFERENCES Genre(idGenre)
);

create table Activite(
    idActivite INTEGER PRIMARY KEY AUTO_INCREMENT,
    designationActivite varchar(255) not null,
    description text not null
);

create table Sport(
    idSport INTEGER PRIMARY KEY AUTO_INCREMENT,
    designationSport varchar(255) not null,
    description text not null
);

create table ActiviteSport(
    idActiviteSport INTEGER PRIMARY KEY AUTO_INCREMENT,
    idActivite integer not null,
    idSport integer not null,
    duree decimal not null,
    nombre decimal not null,
    variationPoids decimal not null,
    Foreign Key (idActivite) REFERENCES Activite(idActivite),
    Foreign Key (idSport) REFERENCES Sport(idSport)
);

create table Plat(
    idPlat INTEGER PRIMARY KEY AUTO_INCREMENT,
    recette text not null,
    nom varchar(255) not null,
    calorie decimal not null,
    description text not null,
    image varchar(255) not null
);

create table Regime(
    idRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
    designationRegime varchar(255) not null,
    description text not null,
    image varchar(255) not null,
    duree decimal not null,
    variationPoids decimal not null
);

create table ProgrammeRegime(
    idProgrammeRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
    jour INTEGER not null,
    idRegime integer not null,
    idPlat integer not null,
    idActiviteSport integer,
    Foreign Key (idRegime) REFERENCES Regime(idRegime),
    Foreign Key (idPlat) REFERENCES Plat(idPlat),
    Foreign Key (idActiviteSport) REFERENCES ActiviteSport(idActiviteSport)
);