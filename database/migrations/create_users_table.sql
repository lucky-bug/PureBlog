CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    email varchar(255) NOT NULL UNIQUE,
    fullname varchar(255) NOT NULL
)
