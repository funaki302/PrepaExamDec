- [] Creation Base de donne Mysql:
     [] table :
      -> [] trajet (idTrajet ,dateHeureDebut , dateHeureFin, distance, idChauffeur, idVehicule, idRecette, idCarburant, String pointDepart,String pointArrivee)
      -> [] chauffeur (idChauffeur ,nom, prenom, telephone, adresse, email, salaire)
      -> [] vehicule ( idVehicule , marque, modele)
      -> [] recette (idRecette , montant , date)
      -> [] salaire (idSalaire , montant , datePaiement, idChauffeur)
      -> [] carburant (idCarburant ,idVehicule , prixLitre , quantite , dateAchat)

- [] Welcome.php :
    [] Afficher la liste de trajet avec les informations du chauffeur et du vehicule par jour.
       - [] fonction getTrajetsByDate()
       -> creation de la vue trajet_detaillee pour faciliter la recuperation des donnees.       
          -> union entre les tables trajet, chauffeur et vehicule et recette.

    [] Affichage total benefice par vehicule .
       - [] fonction getBeneficeByVehicule()
       ->[] recuperation des donnees de la table recette et trajet pour le calcul du benefice par vehicule.

    [] Affichage total benefice par jour .
       - [] fonction getBeneficeByDate($date)
       ->[] recuperation des donnees de la table recette et trajet pour le calcul du benefice par jour.

    [] Affichage Trajet le plus rentable par jour .
       - [] fonction getTrajetLePlusRentableByDate($date)
       -> [] recuperation des donnees de la table recette et trajet pour identifier le trajet le plus rentable par jour.       

    - [] Amelioration :
    [] Ajouter un nouveau trajet.
  