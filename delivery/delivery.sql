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
    phone VARCHAR(20),
    email VARCHAR(100),
    password VARCHAR(30),
    address_id int
);

CREATE TABLE vendors (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    description VARCHAR(255),
    phone VARCHAR(20),
    url VARCHAR (100),
    photo VARCHAR (100),
    type_id int,
    address_id int
);

CREATE TABLE orders (
    id serial PRIMARY KEY,
    status boolean,
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
    phone VARCHAR(20),
    location VARCHAR(100),
    available boolean
);

CREATE TABLE services (
    id serial PRIMARY KEY,
    name VARCHAR(70),
    description VARCHAR(255),
    url VARCHAR(255),
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

--Populate Type Table
-- ID 1
INSERT INTO types (name)
VALUES ('Game Store');
-- ID 2
INSERT INTO types (name)
VALUES ('Fast Food');
-- ID 3
INSERT INTO types (name)
VALUES ('Restaurant');
-- ID 4
INSERT INTO types (name)
VALUES ('Flower Shop');
-- ID 5
INSERT INTO types (name)
VALUES ('Grocery Store');
-- ID 6
INSERT INTO types (name)
VALUES ('Coffee Shop');


-- Populate Data for Addresses
-- ID 1 Guardian Games
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '345 SE Taylor St', 'C/O Angel May', 'Portland', 'OR', 97214, 'United States of America');

-- ID 2 Taco Bell - Burnside
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '2079 W Burnside St', 'Store 101', 'Portland', 'OR', 97209, 'United States of America');

-- ID 3 Geranium Lake Flowers
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '555 SW Oak St', 'US Bancorp Tower', 'Portland', 'OR', 97204, 'United States of America');

-- ID 4 Stella Taco
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '2940 NE Alberta St', 'Alberta Location', 'Portland', 'OR', 97211, 'United States of America');

-- ID 5 Sizzle Pie
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '624 E Burnside St', 'Burnside', 'Portland', 'OR', 97214, 'United States of America');

-- ID 6 New Seasons Concordia
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '5320 NE 33rd Ave', 'Concordia', 'Portland', 'OR', 97211, 'United States of America');

-- ID 7 Starbucks SW Broadway
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Business', '720 SW Broadway', 'SW Broadway', 'Portland', 'OR', 97205, 'United States of America');

-- Populate Data for Vendors
-- Guardian Games
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Guardian Games', 'The biggest game store in Portland! Guardian Games is centrally located in the SE Industrial Area of Portland, Oregon. Just a few blocks North of OMSI, at the corner of MLK and Taylor Street near the Morrison Bridge off-ramp.', '503-238-4000', 'http://www.ggportland.com/', '/../img/guardiangames.jpg', 1, 1);

-- Taco Bell - Burnside
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Taco Bell', 'What is there to say? This is Taco Bell. Do you need fast food fast that are maybe tacos depending on your definition? Taco Bell is here for you. Live mas, but like, in a genuine way, you know?', '800-822-6235', 'https://www.tacobell.com/', '/../img/tacobell.jpg', 2, 2);

-- Geranium Lake Flowers
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Geranium Lake Flowers', 'Celebrated flower shop crafting creative arrangements, with delivery & event-management services.', '503-228-1920', 'http://www.geraniumlake.com/', '/../img/geraniumlake.jpg', 4, 3);

-- Stella Taco
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Stella Taco', 'Stella Taco
bringing Austin-style tacos to the Great Northwest. Serving Up The Relaxed And Fun Feel Of Texas Style Street Tacos, Grilled Quesadillas
and Frozen Cocktails.', '971-407-3705', 'http://www.stellatacopdx.com/', '/../img/stellataco.jpg' , 3, 4);

-- Sizzle Pie
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Sizzle Pie', 'Death to False Pizza. Sizzle Pie has been serving up meat, veggie and vegan pies in Portland for almost a decade.', '503-234-7437', 'http://www.sizzlepie.pizza/', '/../img/sizzlepie.jpg', 3, 5);

-- New Seasons Concordia
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('New Seasons', 'New Seasons Market brings
delicious, healthy food from local
farmers, producers, ranchers & fishermen
to our communities.', '503-288-3838', 'https://www.newseasonsmarket.com/our-stores/concordia/', '/../img/newseasons-concordia.jpg', 5, 6);

-- Starbucks SW Broadway
INSERT INTO vendors (name, description, phone, url, photo, type_id, address_id)
VALUES ('Starbucks', 'Starbucks makes coffee and then sells it to you. Good for drinking and the having of caffeine.', '503-223-2488', 'https://www.starbucks.com/', '/../img/starbucks.jpg', 5, 7);

--Add Client Address to Addresses Table
-- ID 8 - John Peoples
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Residential', '2166 N Place Ave', 'C/O John Peoples', 'Portland', 'OR', 97217, 'United States of America');

-- ID 9 - Marian Person
INSERT INTO addresses (address_type, address_one, address_two, city, state, zip, country)
VALUES ('Residential', '5128 N Real Ave', 'C/O Marian Peoples', 'Portland', 'OR', 97217, 'United States of America');

--Populate Client Table
--John Peoples
INSERT INTO clients (name, phone, email, password, address_id)
VALUES ('John Peoples', '503-123-4567', 'john@person.com', '1!2@3#4$4$5%6^', 8);

--Marian Person
INSERT INTO clients (name, phone, email, password, address_id)
VALUES ('Marian Person', '503-123-4567', 'marian@person.com', '1!2@3#4$4$5%6^', 9);
