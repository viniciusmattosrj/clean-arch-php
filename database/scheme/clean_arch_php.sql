-- Criando database
CREATE DATABASE clean_arch_php;

-- MySQL
use clean_arch_php;
create table registrations (
       id int auto_increment,
       name varchar(100) not null,
       email varchar(100) not null,
       registration_number char(11) not null,
       birth_date date not null,
       created_at DATETIME not null,
       constraint table_name_pk
           primary key(id)
);

-- POSTGRES
CREATE TABLE registrations(
    id int(11) auto_increment PRIMARY KEY,
    name varchar(100) not null,
    email varchar(100) unique key not null,
    registration_number char(11) unique key not null,
    birth_date timestamp,
    created_at timestamp default current_timestamp
);

-- Exibindo a estrutura da tabela
use clean_arch_php;
desc registrations

-- Apagando tabela
use clean_arch_php;
DROP database clean_arch_php;

-- Populando tabela
use clean_arch_php;
INSERT INTO registrations (name, email, registration_number, birth_date, created_at)
VALUES('Zico','zico@gmail.com','01234567890', '1953-03-03', now());


