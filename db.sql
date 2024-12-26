-- Active: 1735043672631@@127.0.0.1@3306@user_managment
SHOW DATABASES;


CREATE DATABASE user_managment;

use  user_managment;


CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255)
)

select * FROM users;