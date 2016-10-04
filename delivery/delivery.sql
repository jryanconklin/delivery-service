--Commands to Create Database

CREATE DATABASE delivery;
USE delivery;

CREATE TABLE addresses(
    id serial PRIMARY KEY,
    address_type VARCHAR (50),
    address_one VARCHAR(100),
    address_two VARCHAR(100),
    city VARCHAR(100),
    state VARCHAR(10),
    zip int,
    country VARCHAR(100)
);

CREATE TABLE clients (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    phone VARCHAR(12),
    email VARCHAR(100),
    address_id int
);

CREATE TABLE vendors (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    description VARCHAR(255),
    phone VARCHAR(12),
    url VARCHAR (100),
    photo VARCHAR (100),
    type_id int,
    address_id int
);

CREATE TABLE orders (
    id serial PRIMARY KEY,
    status VARCHAR(100),
    details VARCHAR(255),
    instructions VARCHAR (255),
    client_id int,
    service_id int,
    vendor_id int,
    rider_id int,
    address_id int
);

CREATE TABLE riders (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    phone VARCHAR(12),
    location VARCHAR(100),
    available boolean
);

CREATE TABLE services (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    description VARCHAR(255),
    type_id int
);

CREATE TABLE riders_services (
    id serial PRIMARY KEY,
    rider_id int,
    service_id int
);

CREATE TABLE types (
    id serial PRIMARY KEY,
    name VARCHAR(100)
);
