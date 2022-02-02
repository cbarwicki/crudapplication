-- create a new database crud
DROP DATABASE IF EXISTS crud;
CREATE DATABASE crud;
USE crud;

-- create table people
DROP TABLE IF EXISTS crud.people;
CREATE TABLE crud.people (
  id INT(10) NOT NULL AUTO_INCREMENT,
  name_  VARCHAR(50) NOT NULL,
  location_ VARCHAR(50) NOT NULL,
  PRIMARY KEY (id ));

-- Insert data
INSERT INTO crud.people VALUES(1,'Chris','New York');