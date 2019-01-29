SELECT a.id AS person_id, a.name, GROUP_CONCAT(b.name ORDER BY b.id SEPARATOR ", ") AS person_hobbies 
FROM categories a, hobies b 
WHERE b.person_id = a.id GROUP BY a.name ORDER BY a.id ASC
