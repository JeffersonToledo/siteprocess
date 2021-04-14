CREATE DATABASE LoginHotel;

use LoginHotel;

Create table login (
ID Int NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (ID)
);

INSERT INTO login (login,senha) VALUES ('Gerente','Unin@ve10');
select * from login;