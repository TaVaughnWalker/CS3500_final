CREATE USER 'server'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON * . * TO 'server'@'localhost';
FLUSH PRIVILEGES;

CREATE DATABASE taylor_swift;
USE taylor_swift;

CREATE TABLE comments (
    commentID int NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    commentText char(500) NOT NULL,
    postDate DateTime NOT NULL DEFAULT NOW()
);