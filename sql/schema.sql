-- User table that represents an individual users account.
CREATE TABLE users (
    userId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    userName varchar(128) NOT NULL,     -- Users public facing name.
    userEmail varchar(128) NOT NULL,    -- Users public facing email.
    userUid varchar(128) NOT NULL,      -- Users login username.
    userPwd varchar(128) NOT NULL       -- Users login password (Probably should be hashed).
);

