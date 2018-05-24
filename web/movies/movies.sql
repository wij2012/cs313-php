CREATE TABLE ratings
(
    id SERIAL PRIMARY KEY,
    code VARCHAR(10) UNIQUE NOT NULL,
    name VARCHAR(100)
);

CREATE TABLE movies
(
    id SERIAL PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    year SMALLINT,
    rating_id INT REFERENCES ratings(id)
);

INSERT INTO ratings(code, name) VALUES ('G', 'General Audiences');
INSERT INTO ratings(code, name) VALUES ('PG', 'Parental Guidance Suggested');
INSERT INTO ratings(code, name) VALUES ('PG-13', 'Parents Strongly Cautioned');
INSERT INTO ratings(code, name) VALUES ('R', 'Restricted');
INSERT INTO ratings(code, name) VALUES ('NR', 'Not Rated');

INSERT INTO movies(title, year, rating_id) VALUES ('The Incredibles 2',  2018, 2);
INSERT INTO movies(title, year, rating_id) VALUES ('A New Hope',  1977, (SELECT id FROM ratings WHERE code = 'PG'));
INSERT INTO movies(title, year, rating_id) VALUES ('Logan', 2017, (SELECT id FROM ratings WHERE code = 'R'));
INSERT INTO movies(title, year, rating_id) VALUES ('Finding Nemo', 2003, 1);
INSERT INTO movies(title, year, rating_id) VALUES ('Star Wars: A Christmas Special', NULL, NULL);
INSERT INTO movies(title, year, rating_id) VALUES ('Star Wars: The Phantom Menace', 1999, NULL);

SELECT title, year FROM movies WHERE year > 2000;
SELECT * FROM movies WHERE title LIKE '%Star Wars%';

SELECT * FROM movies m INNER JOIN ratings r 
ON m.rating_id = r.id;

SELECT m.title, m.year, r.code FROM movies m INNER JOIN ratings r 
ON m.rating_id = r.id;