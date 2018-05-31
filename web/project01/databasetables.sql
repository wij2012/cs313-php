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
    winner  INT NOT NULL,
    "date" date
);

--add a constraint to limit who can be the winner of the game
--'0' indicates a tie or draw
ALTER TABLE match
ADD CONSTRAINT CHK_winner CHECK (winner = player1 OR winner = player2  OR winner = 0);

--test the constraint on winner by entering a winner not listed as a player in the game
INSERT INTO match(player1, player2, winner, "date") VALUES ('2', '4', '3', '2018-06-04');

--enter some match results
INSERT INTO match(player1, player2, winner, "date") VALUES ('2','1', '2', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('3','2', '2', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('4','3', '3', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('4','1', '4', '2018-07-20');
INSERT INTO match(player1, player2, winner, "date") VALUES ('2', '4', '4', '2018-06-04');
INSERT INTO match(player1, player2, winner, "date") VALUES ('1', '3', '0', '2018-06-04');

CREATE TABLE comments
(
    id SERIAL PRIMARY KEY,
    match_id INT REFERENCES match(id) NOT NULL,
    commenter INT REFERENCES players(id),
    text VARCHAR(150) NOT NULL 
);

--enter some comments on a match
INSERT INTO comments(match_id, commenter, text) VALUES ('2', '4', 'Can''t wait to get in on the action after seeing Billy vs Billy!');
INSERT INTO comments(match_id, commenter, text) VALUES ('4', '3', 'CLose game!');
INSERT INTO comments(match_id, commenter, text) VALUES ('3', '2', 'Suprise win!!!!');



--trying to get the right data to display for php later

--display the names of players and winners and date of each match
--winners displayed as third player column
SELECT match.id
, players.name
, match.date FROM players INNER JOIN match 
ON (players.id = match.player1 OR players.id = match.player2) AND players.id = match.winner;
/*INNER JOIN players p2 
ON p2.id = match.player2
INNER JOIN players p3
ON p3.id = match.winner;*/

--display the comments table 
SELECT players.name
, comments.match_id
, comments.text FROM players INNER JOIN comments
ON comments.commenter = players.id;

