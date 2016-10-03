--Commands to Create Database

CREATE DATABASE delivery;
USE delivery;

CREATE TABLE clients (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    address_one VARCHAR(100),
    address_two VARCHAR(100),
    city VARCHAR(100),
    state VARCHAR(10),
    zip int,
    country VARCHAR(100)
);

CREATE TABLE vendors (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    type_id int,
    address_one VARCHAR(100),
    address_two VARCHAR(100),
    city VARCHAR(100),
    state VARCHAR(10),
    zip int,
    country VARCHAR(100)
);

CREATE TABLE orders (
    id serial PRIMARY KEY,
    status VARCHAR(100),
    details VARCHAR(255),
    client_id int,
    service_id int,
    vendor_id int,
    rider_id int,
);

CREATE TABLE riders (
    id serial PRIMARY KEY,
    name VARCHAR(70)
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
