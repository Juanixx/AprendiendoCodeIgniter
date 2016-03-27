create database mis_contactos;

use mis_contactos;

 create table contactos(
 con_id int primary key auto_increment,
 con_email varchar(250),
 con_nombre varchar(60),
 con_telefono varchar(20),
 con_edad int(3),
 con_status int(1)
 );