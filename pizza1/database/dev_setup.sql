drop database if exists pizzadb; -- only for your server
create database pizzadb; -- only for your own server

GRANT SELECT, INSERT, DELETE, UPDATE
ON pizzadb.*
TO pizza_user@localhost
IDENTIFIED BY 'pa5...5word';

