drop database if exists webdev;
create database webdev;
use webdev;

CREATE table personal
(
	id int primary key auto_increment,
	nama varchar(100),
	email varchar(100),
    sub varchar(100),
	msg varchar(500)
);
select * from personal;