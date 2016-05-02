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