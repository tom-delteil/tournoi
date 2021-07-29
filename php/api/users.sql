SELECT utilisateur.`name` AS `Nom`, 
       utilisateur.`firstname` AS `Prenom`, 
       utilisateur.`phone` AS `Telephone`,
       utilisateur.`mail` AS `Email`,
       utilisateur.`birthday` AS `Date de naissance`,
       utilisateur.`weight` AS `Poids`,
       utilisateur.`sex` AS `Sexe`,
       utilisateur.`address` AS `Adresse`,
       utilisateur.`postal code` AS `Code postal`,
       utilisateur.`town` AS `Ville`,
       role.`name` AS `Role`
FROM utilisateur
LEFT JOIN role_utilisateur on utilisateur_id = utilisateur.id
LEFT JOIN `role` on role_id = `role`.id