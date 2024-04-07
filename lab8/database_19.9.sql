CREATE DATABASE URL;

\c URL

CREATE TABLE Urltable(
    url varchar(40) PRIMARY KEY,
    description text[]
);

INSERT INTO Urltable(url, description)
VALUES 
    ('www.deitel.com','{"Cool site!}'),
    ('www.php.net','{"The official PHP site"}');