-- Create database
CREATE DATABASE IF NOT EXISTS phploginsystem;

-- Use the database
USE phploginsystem;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    usersId INT(11) PRIMARY KEY AUTO_INCREMENT,
    usersName VARCHAR(128) NOT NULL,
    usersEmail VARCHAR(128) NOT NULL,
    usersUid VARCHAR(128) NOT NULL,
    usersPwd VARCHAR(128) NOT NULL
);

-- You can run this in phpMyAdmin or any MySQL client
-- Make sure your MySQL server is running (XAMPP, WAMP, etc.)
