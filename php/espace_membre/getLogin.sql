SELECT mail, password, role.name AS role
FROM utilisateur 
LEFT JOIN role_utilisateur on utilisateur_id = utilisateur.id 
LEFT JOIN `role` on role_id = `role`.id
WHERE mail = ?;

-- SELECT utilisateur.mail, utilisateur.password, role.name AS `role` 
-- FROM utilisateur 
-- WHERE mail = ? AND `role`
-- LEFT JOIN role_utilisateur on utilisateur_id = utilisateur.id 
-- LEFT JOIN `role` on role_id = `role`.id
