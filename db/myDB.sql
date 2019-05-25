CREATE TABLE username (
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
);

CREATE TABLE entitylist (
    id SERIAL PRIMARY KEY,
    storage VARCHAR(50) NOT NULL UNIQUE,
    description TEXT NOT NULL
);

CREATE TABLE types (
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT
);

CREATE TABLE item (
    id SERIAL PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    types_id INT NOT NULL REFERENCES types(id),
    description TEXT NOT NULL
);

CREATE TABLE inventory (
    id SERIAL PRIMARY KEY,
    username_id INT NOT NULL REFERENCES username(id),
    item_id INT NOT NULL REFERENCES item(id),
    expDate DATE,
    quantity INT NOT NULL,
    entitylist_id INT NOT NULL REFERENCES entitylist(id)
);

--Insert values into entitlist and types.

INSERT INTO entitylist (storage, description)
    VALUES ('Kitchen Fridge', 'The YSA 1st ward fridge. If locked, contact the food committee chairman.'),
    ('Community Fridge', 'The institute building communcity fridge. No holds bar, all food is us for grabs. 
    But beware, the fridge will be emptied of all contents every Friday at 2pm.'),
    ('Pantry', 'The YSA 1st ward pantry. Located adjacent to the 1st ward fridge.'),
    ('Storage Closet', 'The YSA 1st ward storage closet. Located in the hall adjacent to the kitchen door.');

INSERT INTO types (name, description)
    VALUES ('Condiments', ''),
    ('Drinks', ''),
    ('Desserts', ''),
    ('Snacks', ''),
    ('Meals', '');

INSERT INTO username (name, password)
	VALUES ('Kyle', 'Ilikefood');

INSERT INTO item (name, types_id, description)
	VALUES ('Mustard', 1, 'Delicious Mustard for Hot dogs!!');

INSERT INTO inventory (username_id, item_id, expDate, quantity, entitylist_id)
	VALUES (1, 1, '07/03/1995', '4', 8);