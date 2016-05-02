drop table if exists Materiel_reservee;
drop table if exists Reservation;
drop table if exists Materiel;
drop table if exists Salle_clef;
drop table if exists Salle;
drop table if exists Type_salle;
drop table if exists Clef;
drop table if exists Employe;
drop table if exists Type_employe;
drop table if exists Client;
drop table if exists Statut;


CREATE TABLE IF NOT EXISTS Statut(
id_statut int(11) not null AUTO_INCREMENT,
libelle_statut varchar(20) not null,
reduction_statut float(2,2) not null,
priorite_statut int(11) not null,
sans_recette_statut boolean not null,
constraint PK_statut PRIMARY KEY (id_statut)
);

CREATE TABLE IF NOT EXISTS Client(
id_client int(11) not null AUTO_INCREMENT,
nom_client varchar(20) not null,
prenom_client varchar(20) not null,
adresse_client varchar(40) not null,
telephone_client varchar(20), 
courriel_client varchar(30) not null,
date_naissance_client date not null,
mdp_client varchar(20) not null,
id_statut_client int(11) not null,
constraint PK_client PRIMARY KEY (id_client),
constraint Fk_client_statut FOREIGN KEY (id_statut_client) REFERENCES Statut (id_statut)
);

CREATE TABLE IF NOT EXISTS Type_employe(
id_type_employe int(11) not null AUTO_INCREMENT,
libelle_type_employe varchar(20) not null,
reduction_type_employe float(2,2) not null,
constraint PK_materiel_reservee PRIMARY KEY (id_type_employe)
);

CREATE TABLE IF NOT EXISTS Employe(
id_employe int(11) not null AUTO_INCREMENT,
nom_employe varchar(20) not null,
prenom_employe varchar(20) not null,
adresse_employe varchar(40) not null,
telephone_employe varchar(20), 
courriel_employe varchar(30) not null,
mdp_employe varchar(20) not null,
id_type_employe int(11) not null,
constraint PK_employe PRIMARY KEY (id_employe),
constraint Fk_employe_typeEmploye FOREIGN KEY (id_type_employe) REFERENCES Type_employe (id_type_employe)
);

CREATE TABLE IF NOT EXISTS Clef(
id_clef int(11) not null AUTO_INCREMENT,
emruntee_clef boolean not null,
numero_clef int(11) not null,
constraint PK_cleft PRIMARY KEY (id_clef)
);

CREATE TABLE IF NOT EXISTS Type_salle(
id_type_salle int(11) not null AUTO_INCREMENT,
libelle_type_salle varchar(20) not null,
constraint PK_type_salle PRIMARY KEY (id_type_salle)
);

CREATE TABLE IF NOT EXISTS Salle(
id_salle int(11) not null AUTO_INCREMENT,
nom_salle varchar(20) not null,
numero_salle int(11) not null,
adresse_salle varchar(30) not null,
capacite_salle int(11) not null,
gardien_salle boolean not null,
tarif_salle float(5,2) not null,
caution_salle float(5,2) not null,
id_type_salle int(11) not null,
id_employe_salle int(11),
constraint PK_salle PRIMARY KEY (id_salle),
constraint Fk_salle_type_salle FOREIGN KEY (id_type_salle) REFERENCES Type_salle (id_type_salle)
);

CREATE TABLE IF NOT EXISTS Salle_clef(
id_salle_clef int(11) not null  AUTO_INCREMENT,
id_clef int(11) not null,
id_salle int(11) not null,
constraint PK_salle_clef PRIMARY KEY (id_salle_clef),
constraint Fk_salle_clef_salle FOREIGN KEY (id_salle) REFERENCES Salle (id_salle),
constraint Fk_salle_clef_clef FOREIGN KEY (id_clef) REFERENCES Clef (id_clef)
);

CREATE TABLE IF NOT EXISTS Materiel(
id_materiel int(11) not null AUTO_INCREMENT,
libelle_maeriel varchar(20) not null,
caution_materiel float(5,2) not null,
abime_materiel boolean not null,
id_salle int(11),
constraint PK_materiel PRIMARY KEY (id_materiel),
constraint Fk_materiel_salle FOREIGN KEY (id_salle) REFERENCES Salle (id_salle)
);

CREATE TABLE IF NOT EXISTS Reservation(
id_reservation int(11) not null AUTO_INCREMENT,
date_debut date not null,
date_fin date not null,
etat_lieux_effectue boolean not null,
id_client_reservation int(11) not null,
id_employe_reservation int(11) not null, 
id_salle_reservation int(11) not null,
constraint PK_reservation PRIMARY KEY (id_reservation),
constraint Fk_reservation_client FOREIGN KEY (id_client_reservation) REFERENCES Client (id_client),
constraint Fk_reservation_salle FOREIGN KEY (id_salle_reservation) REFERENCES Salle (id_salle),
constraint Fk_reservation_employe FOREIGN KEY (id_employe_reservation) REFERENCES Employe (id_employe)
);

CREATE TABLE IF NOT EXISTS Materiel_reservee(
id_materiel_reservee int(11) not null AUTO_INCREMENT,
id_reservation int(11) not null,
id_materiel int(11) not null,
constraint PK_materiel_reservee PRIMARY KEY (id_materiel_reservee),
constraint Fk_materiel_reservee_materiel FOREIGN KEY (id_materiel) REFERENCES Materiel (id_materiel),
constraint Fk_materiel_reservee_reservation FOREIGN KEY (id_reservation) REFERENCES Reservation (id_reservation)
);

