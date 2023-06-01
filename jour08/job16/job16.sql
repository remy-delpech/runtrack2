SELECT etages.nom AS nom_etage, salles.nom AS 'Biggest Room', salles.capacite
FROM etages
INNER JOIN salles ON etages.id = salles.id_etage
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);
