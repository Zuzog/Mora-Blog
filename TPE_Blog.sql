-- Création de la base de données

CREATE DATABASE blog;

use blog;

CREATE TABLE ARTICLE (
    article_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE CATEGORY (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
CREATE TABLE ARTICLE_CATEGORY (
    article_id INT,
    category_id INT,
    PRIMARY KEY (article_id, category_id),
    FOREIGN KEY (article_id) REFERENCES ARTICLE(article_id),
    FOREIGN KEY (category_id) REFERENCES CATEGORY(category_id)
);


-- Insertion des données de test   

INSERT INTO blog.CATEGORY (name) VALUES
	('Sport'),
	('Santé'),
	('Politique'),
	('Informatique'),
	('Industrie'),
	('Ecologie');
INSERT INTO blog.ARTICLE (title,content,`created_at`) VALUES
	('New GPU Contender','A new CPU contender has appeared in Italy !!','2025-02-28 14:29:50');    
INSERT INTO blog.ARTICLE_CATEGORY (article_id,category_id) VALUES
	(1,5),
	(1,6);


-- Création de l'utilisateur et attribution des privilèges

CREATE USER 'exercice'@'localhost' IDENTIFIED BY 'password123';
GRANT ALL PRIVILEGES ON blog.* TO 'exercice'@'localhost';
FLUSH PRIVILEGES;
