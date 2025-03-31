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
    user_file LONGTEXT NOT NULL,
    join_date LONGTEXT NOT NULL,
    activation_code LONGTEXT NOT NULL,
    activation_status INT(11) NOT NULL,
    is_contestant INT(11) NOT NULL,
    login_status INT(11) NOT NULL,
    PRIMARY KEY (id_user)
);

CREATE TABLE wallet_balance (
    id_wallet INT(11) NOT NULL AUTO_INCREMENT,
    id_user INT(11) NOT NULL,
    usd_balance FLOAT NOT NULL,
    pesos_balance FLOAT NOT NULL,
    PRIMARY KEY (id_wallet)
);

CREATE TABLE admin (
    id_admin INT(11) NOT NULL AUTO_INCREMENT,
    admin_name LONGTEXT NOT NULL,
    first_name LONGTEXT NOT NULL,
    last_name LONGTEXT NOT NULL,
    email LONGTEXT NOT NULL,
    password LONGTEXT NOT NULL,
    created_at LONGTEXT NOT NULL,
    login_status INT(11) NOT NULL,
    PRIMARY KEY (id_admin)
);
