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