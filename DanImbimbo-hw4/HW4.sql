-- create and select the database
DROP DATABASE IF EXISTS CSIT337;
CREATE DATABASE CSIT337;
USE CSIT337;

CREATE TABLE administrators (
adminID INT NOT NULL AUTO_INCREMENT,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
firstName VARCHAR(255) NOT NULL,
lastName VARCHAR(255) NOT NULL,
PRIMARY KEY (adminID)
);

INSERT INTO administrators (email, password, firstName, lastName) VALUES
('bs@gmail.com', 'easy1', 'Bob', 'Smith'),
('jo@gmail.com', 'mypass', 'Jill', 'Oakley'),
('tk@gmail.com', 'qwerty', 'Timothy', 'Keen');

-- Create a user named admin with password also admin
GRANT SELECT, INSERT, UPDATE, DELETE
ON CSIT337.*
TO admin@localhost
IDENTIFIED BY 'admin';