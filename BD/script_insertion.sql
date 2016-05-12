-- Script d'insertion

-- client_statut
INSERT INTO client_statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES ("association", 15.0, 0, false );
INSERT INTO client_statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES  ("ancien combattant", 100.0, 1, false  );
INSERT INTO client_statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES ("partis Politique", 100.0, 1, true  );

-- users
INSERT INTO users (nom, prenom, adresse, code_postal, ville, telephone, email, date_naissance, password, admin) 
VALUES ("leveque", "adrien", "avec sa copine", 9874, "Orsay", "0725266547", "riri91@gmail.com", "12/01/1991", "riri", false);
INSERT INTO users (nom, prenom, adresse, code_postal, ville, telephone, email, date_naissance, password, admin)
VALUES ("catalin", "radu", "en region parisienne", 9874, "Orsay", "0725266548", "radu.catalin@gmail.com", "12/01/1972", "radu", true);
INSERT INTO users (nom, prenom, adresse, code_postal, ville, telephone, email, date_naissance, password, admin)
VALUES ("bailly", "benjamin", "dans l'appartement de ses parents",9874, "Orsay", "0725266545", "eiren_whisper@gmail.com", "12/01/1991", "benjamin", false);
INSERT INTO users (nom, prenom, adresse, code_postal, ville, telephone, email, date_naissance, password, admin) 
VALUES ("manaud", "audric", "en solo", "0725266522", "mano@gmail.com", 9874, "Orsay","12/01/1991", "jaimeleschevres", 3);


-- Type employe
INSERT INTO type_employe (libelle_type_employe, reduction_type_employe) VALUES("homme de ménage", 0 );
INSERT INTO type_employe (libelle_type_employe, reduction_type_employe) VALUES ("gardien", 10 );

-- Type_salle
INSERT INTO type_salle (libelle_type_salle) VALUES('petite');
INSERT INTO type_salle (libelle_type_salle) VALUES('moyenne');
INSERT INTO type_salle (libelle_type_salle) VALUES('grande');

-- Clef
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 100);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 101);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 102);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 103);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 104);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 105);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 106);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 107);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 108);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 109);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 111);
INSERT INTO clef (clef_empruntee, numero_clef) VALUES( false, 110);

-- Employe
INSERT INTO employe (id_user, id_type_employe) VALUES (1,1);
INSERT INTO employe (id_user, id_type_employe) VALUES (2,2);
INSERT INTO employe (id_user, id_type_employe) VALUES (3,2);

-- Client
INSERT INTO client (id_users, id_client_statut) VALUES (1, 1);
INSERT INTO client (id_users, id_client_statut) VALUES (2, 2);
INSERT INTO client (id_users, id_client_statut) VALUES (3, 3);

-- Salle
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, image) VALUES('A', 1, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 300, 100, 3,'images.jpe');
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, image) VALUES('B', 2, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 50, false, 200, 100, 2,'images1.jpe');
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle,image) VALUES('C', 3, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 500, 200, 1,'images2.jpe');
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle,image) VALUES('D', 4, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 500, 200, 1,'images3.jpe');

-- Salle_clef
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(1, 1);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(2, 1);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(3, 2);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(4, 3);

-- matériel
INSERT INTO materiel(libelle_materiel, caution_materiel, quantite) VALUES ("chaise", 20, 20);
INSERT INTO materiel(libelle_materiel, caution_materiel, quantite) VALUES ("table", 30, 30);
INSERT INTO materiel(libelle_materiel, caution_materiel, quantite) VALUES ("ordinateur", 300, 40);
INSERT INTO materiel(libelle_materiel, caution_materiel, quantite) VALUES ("video-projecteur", 100, 50);
INSERT INTO materiel(libelle_materiel, caution_materiel, quantite) VALUES ("téléviseur", 200, 60);

-- Reservation
INSERT INTO reservation(date_debut, date_fin, etat_des_lieux_effectue, id_user, id_employe, id_salle_reservation) VALUES ('2016-04-02' ,'2016-04-04', false , 1, 1, 1);
INSERT INTO reservation(date_debut, date_fin, etat_des_lieux_effectue, id_user, id_employe, id_salle_reservation) VALUES ('2016-05-01' ,'2016-05-04', false , 2, 2, 3);
INSERT INTO reservation(date_debut, date_fin, etat_des_lieux_effectue, id_user, id_employe, id_salle_reservation) VALUES ('2016-05-02' ,'2016-05-04', false , 3, 1, 2);
INSERT INTO reservation(date_debut, date_fin, etat_des_lieux_effectue, id_user, id_employe, id_salle_reservation) VALUES ('2016-05-03' ,'2016-05-05', false , 4, 3, 1);

-- matériel réservé
INSERT INTO materiel_reserve(id_reservation, id_materiel, abime) VALUES (1, 1, false);
INSERT INTO materiel_reserve(id_reservation, id_materiel, abime) VALUES (1, 2, false);
INSERT INTO materiel_reserve(id_reservation, id_materiel, abime) VALUES (1, 1, false);

-- employe_salle
INSERT INTO employe_salle(id_employe, id_salle) VALUES (1, 1);
INSERT INTO employe_salle(id_employe, id_salle) VALUES (2, 2);
INSERT INTO employe_salle(id_employe, id_salle) VALUES (3, 3);

-- mairie
INSERT INTO mairie(libele, adresse, code_postal, ville, telephone, email) 
VALUES ("Orsay", "dans l'appartement de ses parents",9874, "Orsay", "0725266545", "eiren_whisper@gmail.com");

-- horaire
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Lundi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Mardi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Mercredi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Jeudi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Vendredi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Samdi", "10:30", "12", "13:30", "16:30", 1);
INSERT INTO horaire(jour, date_debut_matin, date_fin_matin, date_debut_soir, date_fin_soir, id_mairie) 
VALUES ("Dimanche", "0", "0", "0", "0", 1);

-- salle_matériel
INSERT INTO salle_materiel(id_salle,id_materiel) VALUES(1,1);
INSERT INTO salle_materiel(id_salle,id_materiel) VALUES(1,2);
INSERT INTO salle_materiel(id_salle,id_materiel) VALUES(1,3);
