CREATE TABLE players
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

--insert some players
INSERT INTO players(name) VALUES ('Billy Crystal'), ('BIlly Idol'), ('Elvis Presley'), ('Michael Jackson');

CREATE TABLE match
(
    id SERIAL PRIMARY KEY,
    player1 INT REFERENCES players(id) NOT NULL,
    player2 INT REFERENCES players(id) NOT NULL,
    winner  VARCHAR(25) NOT NULL,
    "date" date
);

--add a constraint to limit who can be the winner of the game
ALTER TABLE match
ADD CONSTRAINT CHK_winner CHECK (winner = CAST (player1 AS VARCHAR) OR winner = CAST (player2 AS VARCHAR) OR winner = 'draw');

--test the constraint on winner by entering a winner not listed as a player in the game
INSERT INTO match(player1, player2, winner, "date") VALUES ('2', '4', '3', '2018-06-04');

--enter some match results
INSERT INTO match(player1, player2, winner, "date") VALUES ('2','1', '2', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('3','2', '2', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('4','3', '3', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('4','1', '4', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('2', '4', '4', '2018-06-04');

CREATE TABLE comments
(
    id SERIAL PRIMARY KEY,
    match_id INT REFERENCES match(id) NOT NULL,
    commenter INT REFERENCES players(id),
    text VARCHAR(150) NOT NULL 
);

--enter some comments on a match
INSERT INTO comments(match_id, commenter, text) VALUES ('2', '4', 'Can''t wait to get in on the action after seeing Billy vs Billy!');




