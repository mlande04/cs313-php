/*creates a table to contain user information*/
CREATE TABLE public.user (
id	SERIAL NOT NULL PRIMARY KEY,
username	varchar(20) NOT NULL UNIQUE,
password	varchar(30) NOT NULL,
email	varchar(80)
);

/*creates a table to store a list of genres for the library*/
CREATE TABLE genre (
id SERIAL NOT NULL PRIMARY KEY,
genre_id varchar(40)
);

/*creates a table to store books of the "adventure" genre*/
CREATE TABLE adventure (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80) NOT NULL,
author	varchar(80),
date	varchar(10)
/*c_date	varchar(10) SET DEFAULT CURRENT_DATE*/
);

/*creates a table to store books of the "classic" genre*/
CREATE TABLE classic (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80) NOT NULL,
author	varchar(80),
date	varchar(10)
/*c_date	varchar(10) SET DEFAULT CURRENT_DATE*/
);

/*creates a table to store books of the "supernatural" genre*/
CREATE TABLE supernatural (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80) NOT NULL,
author	varchar(80),
date	varchar(10)
/*c_date	varchar(10) SET DEFAULT CURRENT_DATE*/
);

/*creates a table to store books of the "religious fiction" genre*/
CREATE TABLE religious_fiction (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80) NOT NULL,
author	varchar(80),
date	varchar(10)
/*c_date	varchar(10) SET DEFAULT CURRENT_DATE*/
);

/*creates a table to store books which do not fit in any of the previously described genres*/
CREATE TABLE  other (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80) NOT NULL,
author	varchar(80),
date	varchar(10)
/*c_date	varchar(10) SET DEFAULT CURRENT_DATE*/
);

/*creates a table to store all books in the library*/
CREATE TABLE library (
id SERIAL NOT NULL PRIMARY KEY,
title	varchar(80),
author	varchar(80),
);

/*Commands regularly used*/
SELECT * FROM <table_name>;	/* display all fields of selected table*/
SELECT title FROM <table_name> ORDER BY title ASC;	/* displays all book titles from a genre/table, sorted alphabetically*/
SELECT title FROM <table_name> WHERE title LIKE <'partial_title%'>;	/* displays book titles from a selected table with titles matching a set criteria*/
INSERT INTO <table_name> (COL1, COL2, COL3) SELECT COL1, COL4, COL7 FROM <other_table_name>;	/* insert specified table column data from one table into another*/

INSERT INTO user (id, username, password, email) VALUES ();	/* add a user to the "user" table*/
INSERT INTO adventure (id, title, author, date, c_date) VALUES ();	/* add a book to the "adventure" table*/
INSERT INTO classic (id, title, author, date, c_date) VALUES ();	/* add a book to the "classic" table*/
INSERT INTO supernatural (id, title, author, date, c_date) VALUES ();	/* add a book to the "supernatural" table*/
INSERT INTO religious_fiction (id, title, author, date, c_date) VALUES ();	/* add a book to the "religious_fiction" table*/
INSERT INTO other (id, title, author, date, c_date) VALUES ();	/*add a book to the "other" table*/

ALTER TABLE the_table ADD UNIQUE (thecolumn);        /*alters column of a table*/

\dt	/*view all tables not auto-generated*/
\dt <table>	/*view specified table's details*/