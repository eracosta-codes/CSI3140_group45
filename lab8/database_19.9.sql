-- Create database if not exists
CREATE DATABASE IF NOT EXISTS URL;

-- Switch to the URL database
USE URL;

-- Create table Urltable
CREATE TABLE Urltable (
    url VARCHAR(40) PRIMARY KEY,
    description TEXT
);

-- Insert data into Urltable
INSERT INTO Urltable (url, description)
VALUES 
    ('www.deitel.com', 'Cool site!'),
    ('www.php.net', 'The official PHP site');
