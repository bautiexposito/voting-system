CREATE DATABASE voting_system;
USE voting_system;

CREATE TABLE users (
    id_user INT(11) NOT NULL AUTO_INCREMENT,
    first_name LONGTEXT NOT NULL,
    last_name LONGTEXT  NOT NULL,
    email LONGTEXT  NOT NULL,
    password LONGTEXT  NOT NULL,
    country LONGTEXT  NOT NULL,
    city LONGTEXT  NOT NULL,
    gender LONGTEXT  NOT NULL,
    user_file LONGTEXT,
    join_date LONGTEXT,
    activation_code LONGTEXT,
    activation_status INT(11),
    is_contestant INT(11),
    login_status INT(11),
    PRIMARY KEY (id_user)
);
