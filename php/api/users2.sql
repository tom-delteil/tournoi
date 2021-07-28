SELECT utilisateur.`name` AS `Nom`, role.`name` AS `Role`
FROM utilisateur
LEFT JOIN role_utilisateur on utilisateur_id = utilisateur.id
LEFT JOIN `role` on role_id = `role`.id
