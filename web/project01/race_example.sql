CREATE TABLE event
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(100) NOT NULL,
    "date" date 
);

INSERT INTO event(name, location, "date") VALUES ('Color Run', 'Awesome Event Center', '2018-07-20');
INSERT INTO event(name, location, "date") VALUES ('Turkey Trot', 'Porter Park', NULL);

CREATE TABLE participant
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE event_participant
(
    id SERIAL PRIMARY KEY,
    event_id INT REFERENCES event(id) NOT NULL,
    participant_id INT REFERENCES participant(id) NOT NULL
);

INSERT INTO participant(name) VALUES ('Jimmy'), ('Bob'), ('Joe');

INSERT INTO event_participant(event_id, participant_id) VALUES (1,1);
INSERT INTO event_participant(event_id, participant_id) VALUES (2,2);
INSERT INTO event_participant(event_id, participant_id) VALUES (1,3);