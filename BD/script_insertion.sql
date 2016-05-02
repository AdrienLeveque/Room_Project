-- Script d'insertion

-- Statut client
INSERT INTO statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES ("association", 15.0, 0, false );
INSERT INTO statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES  ("ancien combattant", 100.0, 1, false  );
INSERT INTO statut (libelle_statut, reduction_statut, priorite_statut, sans_recette_statut) VALUES ("partis Politique", 100.0, 1, true  );

-- Type employe
INSERT INTO type_employe (libelle_type_employe, reduction_type_employe) VALUES("homme de ménage", 0 );
INSERT INTO type_employe (libelle_type_employe, reduction_type_employe) VALUES ("gardien", 10 );

-- Employe
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("acapela", "robert", "12 rue des chaudrons", "0612854582", "beber91@gmail.com", "robert", 1);
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("zinedine", "zidane", "stade de france", "0612854510", "zizou@gmail.com", "zidane", 2);
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("hollande", "françois", "cuisine de l'élisé", "065684582", "froufrou@gmail.com", "françois", 2);
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("barack", "obama", "maison blanche", "0912854582", "obaba91@gmail.com", "obama", 2);
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("ben", "laden", "dans une grotte", "0000000000", "alkaida@gmail.com", "laden", 1);
INSERT INTO employe (nom_employe, prenom_employe, adresse_employe, telephone_employe, courriel_employe, mdp_employe, id_type_employe) VALUES ("vladimir", "putin", "en russie", "0312854582", "putin@gmail.com", "vladimir", 2);

-- Client
INSERT INTO client (nom_client, prenom_client, adresse_client, telephone_client, courriel_client, date_naissance_client, mdp_client, id_statut_client) VALUES ("leveque", "adrien", "avec sa copine", "0725266547", "riri91@gmail.com", "12/01/1991", "riri", 4);
INSERT INTO client (nom_client, prenom_client, adresse_client, telephone_client, courriel_client, date_naissance_client, mdp_client, id_statut_client) VALUES ("catalin", "radu", "en region parisienne", "0725266548", "radu.catalin@gmail.com", "12/01/1972", "radu", 5);
INSERT INTO client (nom_client, prenom_client, adresse_client, telephone_client, courriel_client, date_naissance_client, mdp_client, id_statut_client) VALUES ("bailly", "benjamin", "dans l'appartement de ses parents", "0725266545", "eiren_whisper@gmail.com", "12/01/1991", "benjamin", 6);
INSERT INTO client (nom_client, prenom_client, adresse_client, telephone_client, courriel_client, date_naissance_client, mdp_client, id_statut_client) VALUES ("manaud", "audric", "en solo", "0725266522", "mano@gmail.com", "12/01/1991", "jaimeleschevres", 5);

-- Clef
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 100);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 101);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 102);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 103);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 104);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 105);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 106);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 107);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 108);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 109);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 111);
INSERT INTO clef (empruntee_clef, numero_clef) VALUES( false, 110);

-- Type_salle
INSERT INTO type_salle (libelle_type_salle) VALUES('grand');
INSERT INTO type_salle (libelle_type_salle) VALUES('petite');
INSERT INTO type_salle (libelle_type_salle) VALUES('moyen');

-- Salle
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, id_employe_salle) VALUES('A', 1, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 300, 100, 3, 1);
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, id_employe_salle) VALUES('B', 2, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 50, false, 200, 100, 2, null);
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, id_employe_salle) VALUES('C', 3, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 500, 200, 1, 1);
INSERT INTO Salle (nom_salle, numero_salle, adresse_salle, capacite_salle, gardien_salle, 
tarif_salle, caution_salle, id_type_salle, id_employe_salle) VALUES('D', 4, 'Université Paris-Sud 11, Bâtiment 640, 91400 Orsay', 100, true, 500, 200, 1, 1);

-- Salle_clef
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(1, 1);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(2, 1);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(3, 2);
INSERT INTO Salle_clef (id_clef, id_salle) VALUES(4, 3);

-- Reservation
INSERT INTO `reservation`(`date_debut`, `date_fin`, `etat_lieux_effectue`, `id_client_reservation`, `id_employe_reservation`, `id_salle_reservation`) VALUES ('2016-04-02' ,'2016-04-04', false , 1, 1, 1);
INSERT INTO `reservation`(`date_debut`, `date_fin`, `etat_lieux_effectue`, `id_client_reservation`, `id_employe_reservation`, `id_salle_reservation`) VALUES ('2016-05-01' ,'2016-05-04', false , 2, 2, 3);
INSERT INTO `reservation`(`date_debut`, `date_fin`, `etat_lieux_effectue`, `id_client_reservation`, `id_employe_reservation`, `id_salle_reservation`) VALUES ('2016-05-02' ,'2016-05-04', false , 3, 1, 2);
INSERT INTO `reservation`(`date_debut`, `date_fin`, `etat_lieux_effectue`, `id_client_reservation`, `id_employe_reservation`, `id_salle_reservation`) VALUES ('2016-05-03' ,'2016-05-05', false , 4, 3, 1);

-- matériel
INSERT INTO materiel(libelle_materiel, caution_materiel) VALUES ("chaise", 20);
INSERT INTO materiel(libelle_materiel, caution_materiel) VALUES ("table", 30);
INSERT INTO materiel(libelle_materiel, caution_materiel) VALUES ("ordinateur", 300);
INSERT INTO materiel(libelle_materiel, caution_materiel) VALUES ("video-projecteur", 100);
INSERT INTO materiel(libelle_materiel, caution_materiel) VALUES ("téléviseur", 200 );

-- matériel réservé
INSERT INTO materiel_reservee(id_reservation, id_salle, id_materiel, abime) VALUES (null, 1, 1, false);
INSERT INTO materiel_reservee(id_reservation, id_salle, id_materiel, abime) VALUES (null, 1, 2, false);
INSERT INTO materiel_reservee(id_reservation, id_salle, id_materiel, abime) VALUES (1, null, 1, false);
