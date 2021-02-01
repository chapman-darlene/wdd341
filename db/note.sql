CREATE TABLE note_user (
  id SERIAL,
  username VARCHAR(255),
  password VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE note (
  id SERIAL,
  userId INT NOT NULL,
  content TEXT,
  PRIMARY KEY (id),
  FOREIGN KEY (userId) REFERENCES note_user (id)
);


INSERT INTO note_user (username, password) VALUES ('john', 'pass');
INSERT INTO note_user (username, password) VALUES ('jane', 'byui');

INSERT INTO note (userId, content) VALUES (1, 'A note for John');
INSERT INTO note (userId, content) VALUES (1, 'Another note for John');
INSERT INTO note (userId, content) VALUES (2, 'And this is a note for Jane');


SELECT username FROM note_user;

SELECT password, username FROM note_user;

SELECT * FROM note_user WHERE username = 'john';
SELECT * FROM note_user WHERE username = 'jane';

SELECT * FROM note_user WHERE id > 1;

SELECT * FROM note_user ORDER BY username;

SELECT * FROM note_user ORDER BY username DESC;

SELECT * FROM note;
SELECT * FROM note where userID = 1;

SELECT *
  FROM note_user
  JOIN note
  ON userID = userID;

  SELECT *
  FROM note_user AS t1
  JOIN note AS t2
  ON t1.id = t2.userID;

  SELECT * 
  FROM note_user AS u1
> JOIN note AS u2
> ON u1.id = u2.userid
> WHERE u1.username = 'john';

