create database VirtualLibaryPR;
use VirtualLibaryPR;

create table if not exists usuarios(
	id tinyint unsigned primary key auto_increment,
    name varchar (50) not null,
    email varchar(30) not null,
    password char(60) not null
);

create table if not exists cadastro (
 id tinyint unsigned primary key auto_increment,
 name varchar (50) not null,
 email varchar(30) not null,
 password char(60) not null
);

create table books(
 id tinyint unsigned primary key auto_increment,
 Title varchar(50) not null,
 Gender varchar(20)not null,
 Chapters int ,
 Author varchar(50) not null,
 Description text not null
);

create table registerbooks(
 id tinyint unsigned primary key auto_increment,
 Title varchar(50) not null,
 Gender varchar(20) not null,
 Chapters int,
 Author varchar(50) not null,
 Description text not null
);

