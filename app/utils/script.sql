CREATE DATABASE IF NOT EXISTS margot_yoga;

USE margot_yoga;

CREATE TABLE IF NOT EXISTS users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom_user VARCHAR(50),
    prenom_user VARCHAR(100) NOT NULL,
    mail_user VARCHAR(100) NOT NULL,
    tel_num INT(11),
    mdp_user varchar(260) not null,
);

