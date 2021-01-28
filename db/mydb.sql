CREATE TABLE person (
    personid SERIAL NOT NULL PRIMARY KEY,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    address varchar(255) NOT NULL
);

CREATE TABLE stations (
    stationid SERIAL NOT NULL PRIMARY KEY,
    name varchar(100) NOT NULL
);


CREATE TABLE planets (
    planetid SERIAL NOT NULL PRIMARY KEY,
    name varchar(100) NOT NULL
);

CREATE TABLE schedule (
    tripid SERIAL NOT NULL PRIMARY KEY,
    date DATE,
    time TIME,
    stationid SERIAL REFERENCES stations (stationid),
    planetid SERIAL REFERENCES planets (planetid)
);

CREATE TABLE ticket (
    tripid SERIAL NOT NULL PRIMARY KEY,
    personid SERIAL REFERENCES person(personid),
    scheduleid SERIAL REFERENCES schedule(scheduleid)
);


<!--insert statements -->

INSERT INTO stations (station)
VALUES('Houston');

INSERT INTO stations (station)
VALUES('Cape Canaveral');

INSERT INTO planets(planet)
VALUES('Jupiter');

INSERT INTO planets(planet)
VALUES('Saturn');

INSERT INTO person (first_name, last_name, address)
VALUES ('John', 'Smith', '555 My Street');

INSERT INTO person (first_name, last_name, address)
VALUES ('Jane', 'Rhodes', '123 This Street');


INSERT INTO schedule (date, time, stationid, planetid)
VALUES ('01/28/2021', '9:00 PM', 1, 1);

INSERT INTO schedule (date, time, stationid, planetid)
VALUES ('01/28/2025', '9:00 AM', 1, 1)


DROP TABLE IF EXISTS trip;

ALTER TABLE locations
ALTER COLUMN planet_name TYPE char
USING planet_name::varchar;

ALTER TABLE schedule
RENAME COLUMN tripid TO scheduleid;

ALTER TABLE trip
ADD personid REFERENCES person(personid);

ALTER TABLE trip
DROP COLUMN personid;

ALTER TABLE IF EXISTS book_trip
RENAME TO ticket;

time [ (p) ] with time zone