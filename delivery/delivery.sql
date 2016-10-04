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
    country VARCHAR(100),
);

--Rather than address_id in vendors, we could have a clients_addresses JOIN Table Here if we wanted to collect different addresses

CREATE TABLE clients (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    phone VARCHAR(100),
    email VARCHAR(100),
    address_id int
);

CREATE TABLE vendors (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    type_id int,
    phone VARCHAR(100),
    address_id int
);

--Rather than address_id in vendors, we could have a vendors_addresses JOIN Table Here if we wanted to collect different addresses for different locations

CREATE TABLE orders (
    id serial PRIMARY KEY,
    status VARCHAR(100),
    details VARCHAR(255),
    client_id int,
    service_id int,
    vendor_id int,
    rider_id int,
);

--Could add a address_id in the ORDERS table to explicitly route the delivery address.

CREATE TABLE riders (
    id serial PRIMARY KEY,
    name VARCHAR(70),
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

INSERT INTO types
