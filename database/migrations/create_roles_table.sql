CREATE TABLE roles (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL UNIQUE,
    description varchar(255) NULL
)
