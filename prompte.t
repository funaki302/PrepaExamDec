 [] Ajouter un nouveau trajet.
        [] page : ajoutTrajet.php dans view
           [] formulaire dajout 
           [] bouton ajouter
           [] routes.php :
              -> [] insertion en utilisant une fonction placer dans
                    controllers/ProductController.php :
                  -[] function insertTrajet() 
              
              -> [] redirection vers Alltrajet.php: qui affiche tout les trajets
                   en utilisant la function getAllTrajet que lon va encore cree dans                 
                    controllers/ProductController.php :
  sachant que ma base est ceci : CREATE TABLE IF NOT EXISTS gt_trajet (
    idTrajet INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dateHeureDebut DATETIME NOT NULL,
    dateHeureFin DATETIME DEFAULT NULL,
    distance DECIMAL(10,2) DEFAULT NULL,
    idChauffeur INT UNSIGNED DEFAULT NULL,
    idVehicule INT UNSIGNED DEFAULT NULL,
    idRecette INT UNSIGNED DEFAULT NULL,
    idCarburant INT UNSIGNED DEFAULT NULL,
    pointDepart VARCHAR(255) DEFAULT NULL,
    pointArrivee VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY (idTrajet),
    FOREIGN KEY (idChauffeur) REFERENCES gt_chauffeur(idChauffeur),
    FOREIGN KEY (idVehicule) REFERENCES gt_vehicule(idVehicule),
    FOREIGN KEY (idRecette) REFERENCES gt_recette(idRecette),
    FOREIGN KEY (idCarburant) REFERENCES gt_carburant(idCarburant)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; . lis bien tous mon projet et fait le comme je l'ai fait avec home . 
  c'est a dire les function dans controllers/ProductController.php puis ca sera gerer par routes.php et les page 
  de views dans views 