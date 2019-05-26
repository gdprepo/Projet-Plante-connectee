CREATE TABLE IF NOT EXISTS plante (
    id INT AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    categorie VARCHAR(80) NOT NULL,
    description VARCHAR(255) NOT NULL,
    picture_url VARCHAR(255) NOT NULL,
    humydite INT,
    temperature INT,
    luminosite INT,
    periode VARCHAR(80),
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO plante (name, categorie, description, picture_url, humydite, temperature, luminosite, periode)
VALUES ('plante1', 'categorie1', 'description.......', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg', '60', '30', '40', '4'),
('plante2', 'categorie2', 'description.......', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg', '60', '30', '40', '4'),
('plante3', 'categorie3', 'description.......', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg', '60', '30', '40', '4'),
('plante4', 'categorie4', 'description.......', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg', '60', '30', '40', '4')
