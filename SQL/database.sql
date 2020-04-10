
-- Database for users account
CREATE DATABASE useraccounts

CREATE TABLE users(
    user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    user_firstname varchar(100) NOT NULL,
    user_lastname varchar(100) NOT NULL,
    user_email varchar(100) NOT NULL,
    user_phone varchar(50) NOT NULL,
    user_pass varchar(50) NOT NULL

);

INSERT INTO users(user_firstname, user_lastname, user_email, user_phone, user_pass) 
    VALUES("mark", "cornelio", "mark@gmail.com", "1234567","123");