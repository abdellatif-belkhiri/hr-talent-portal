CREATE DATABASE hr_portal;
USE hr_portal;

CREATE TABLE candidates (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    resume LONGTEXT
);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255)
);

INSERT INTO users (username, password) 
VALUES ('HR-manager', SHA1('Welcome2HR!'));