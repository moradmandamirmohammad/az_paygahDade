CREATE DATABASE az_db_project;

CREATE TABLE Users (user_id int , user_fullName varchar(50), user_phoneNumber varchar(20), user_email varchar(20),user_password varchar(20), Deleted tinyint);

CREATE TABLE Messages (message_id int,[user_id] int, message_description varchar(MAX), message_attachment varchar(50));

CREATE TABLE Products (Product_ID int , Product_name varchar(50), Product_number int, Product_Color varchar(10), Product_Price varchar(10), Deleted tinyint);