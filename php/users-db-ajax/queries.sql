CREATE DATABASE users_db_ajax DEFAULT COLLATE utf8mb4_polish_ci;

CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(60) NOT NULL,
    lastname VARCHAR(60) NOT NULL,
    PRIMARY KEY (id)
);