CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    nationality VARCHAR(255),
    date_of_birth DATE,
    team VARCHAR(255),
    thumb VARCHAR(255)
);
