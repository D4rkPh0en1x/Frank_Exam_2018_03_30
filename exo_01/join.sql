SELECT * FROM users
	JOIN articles ON articles.id_user = users.id 
	WHERE articles.id=10;

