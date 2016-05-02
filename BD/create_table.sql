drop table if exists Statut;
drop table if exists Client;
drop table if exists Clef;
drop table if exists Type_salle;
drop table if exists Salle;
drop table if exists Materiel;

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
id_type_de_salle int(11) not null,
constraint PK_salle PRIMARY KEY (id_salle),
constraint Fk_salle_type_salle FOREIGN KEY (id_type_de_salle) REFERENCES Type_salle (id_type_salle),
constraint Fk_salle_clef FOREIGN KEY (id_clef_salle) REFERENCES Clef (id_clef)
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
libelle_maerial varchar(20) not null,
caution_material float(5,2) not null,
quantite_materiel int(11) not null,
id_salle int(11),
constraint PK_materiel PRIMARY KEY (id_materiel),
constraint Fk_materiel_salle FOREIGN KEY (id_salle) REFERENCES Clef (id_salle)
);

CREATE TABLE IF NOT EXISTS Salle_materiel(
id_salle_materiel int(11) not null AUTO_INCREMENT,
id_salle int(11) not null,
id_materiel int(11) not null,
quantite_material int not null,
constraint PK_salle_materiel PRIMARY KEY (id_salle_materiel),
constraint Fk_salleMateriel_salle FOREIGN KEY (id_salle) REFERENCES Salle (id_salle),
constraint Fk_salleMateriel_materiel FOREIGN KEY (id_materiel) REFERENCES Materiel (id_materiel)
);

CREATE TABLE IF NOT EXISTS Depot(
id_depot int(11) not null AUTO_INCREMENT,
libelle_depot varchar(20) not null,
adresse varchar(20) not null,
constraint PK_depot PRIMARY KEY (id_depot)
);

CREATE TABLE IF NOT EXISTS Ligne_materiel(
id_ligne_materiel int(11) not null AUTO_INCREMENT,
quantite_ligne_material int(11) not null,
id_materiel_dansLigne int(11) not null,
constraint PK_ligne_materiel PRIMARY KEY (id_ligne_materiel),
constraint Fk_ligneMateriel_materiel FOREIGN KEY (id_materiel_dansLigne) REFERENCES Materiel (id_materiel)
);

CREATE TABLE IF NOT EXISTS Materiel_abime(
id_materiel_abime int(11) not null AUTO_INCREMENT,
quantite_materiel_abime int(11) not null,
id_materiel int(11) not null,
constraint PK_materiel_abime PRIMARY KEY (id_materiel_abime),
constraint Fk_materielAbime_materiel FOREIGN KEY (id_materiel) REFERENCES Materiel (id_materiel)
);

CREATE TABLE IF NOT EXISTS Reservation(
id_reservation int(11) not null,
date_debut date not null,
date_fin date not null,
etat_lieux_effectue boolean not null,
constraint PK_reservation PRIMARY KEY (id_reservation)
);