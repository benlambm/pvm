USE parkview;

DROP TABLE IF EXISTS User;

CREATE TABLE User
(
    UserID        int AUTO_INCREMENT,
    Username      varchar(255) NOT NULL UNIQUE,
    Password      varchar(255),
    FirstName     varchar(255),
    LastName      varchar(255),
    Birthday      DATE,
    MemberSince   DATE,
    Phone         varchar(255),
    ImageFileName varchar(255),
    PRIMARY KEY (UserID)
);

INSERT INTO User
VALUES (NULL, 'benlamb@vt.edu', '$2y$10$9MLyc62XW0yDwy9lBtzs5utTT9MuvMEQG5iz7DqiGfdldCQ8TtO/S', 'Ben', 'Lamb', '1985-02-16', '2017-05-29', '(540)123-4567', 'profile.jpg');
INSERT INTO User
VALUES (NULL, 'vwolff@liberty.edu', '$2y$10$9MLyc62XW0yDwy9lBtzs5utTT9MuvMEQG5iz7DqiGfdldCQ8TtO/S', 'Virginia', 'Wolff', '1935-02-03', '1997-05-29', '(555)123-4567',
        'member.jpg');