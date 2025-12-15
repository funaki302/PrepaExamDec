CREATE OR REPLACE VIEW V_gt_trajet_detaillee AS
SELECT
	t.idTrajet,
	t.dateHeureDebut,
	t.dateHeureFin,
	t.distance,
	t.pointDepart,
	t.pointArrivee,
	t.idChauffeur,
	CONCAT(c.prenom, ' ', c.nom) AS chauffeur_nom_complet,
	c.telephone AS chauffeur_telephone,
	c.email AS chauffeur_email,
	t.idVehicule,
	v.marque AS vehicule_marque,
	v.modele AS vehicule_modele,
	t.idRecette,
	r.montant AS recette_montant,
	r.date AS recette_date,
	t.idCarburant
FROM gt_trajet t
LEFT JOIN gt_chauffeur c ON t.idChauffeur = c.idChauffeur
LEFT JOIN gt_vehicule v ON t.idVehicule = v.idVehicule
LEFT JOIN gt_recette r ON t.idRecette = r.idRecette;


CREATE or REPLACE VIEW V_gt_benefice_par_vehicule AS
SELECT
	veh.*,
	SUM(rec.montant) AS total_recette,
	SUM(car.prixLitre * car.quantite) AS total_carburant,
	(SUM(rec.montant) - SUM(car.prixLitre * car.quantite)) AS benefice
FROM gt_trajet as tra
JOIN gt_recette as rec ON tra.idRecette = rec.idRecette
JOIN gt_vehicule as veh ON tra.idVehicule = veh.idVehicule
JOIN gt_carburant as car ON tra.idCarburant = car.idCarburant
GROUP BY veh.idVehicule;

create OR REPLACE VIEW V_gt_benefice_par_jour AS
SELECT
	r.date AS date_jour,
	SUM(r.montant) AS total_recette,
	SUM(c.prixLitre * c.quantite) AS total_carburant,
	(SUM(r.montant) - SUM(c.prixLitre * c.quantite)) AS benefice
FROM gt_recette r
JOIN gt_trajet t ON r.idRecette = t.idRecette
JOIN gt_carburant c ON t.idCarburant = c.idCarburant
GROUP BY r.date;

