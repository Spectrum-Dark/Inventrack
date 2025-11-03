-- Active: 1762210500462@@127.0.0.1@3306@inventrack

/* Creamos la base de datos */
CREATE DATABASE inventrack;

USE inventrack;

/* Creamos la tabla de usuarios */
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_type VARCHAR(20) NOT NULL,
    created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* Creamos los procedimientos almacenados */

/* ============================================================================= */

DELIMITER /
/

CREATE PROCEDURE Insert_User(
    IN p_username VARCHAR(50),
    IN p_password_hash VARCHAR(255),
    IN p_email VARCHAR(100),
    IN p_user_type VARCHAR(20)
)
BEGIN
    INSERT INTO users (username, password_hash, email, user_type)
    VALUES (p_username, p_password_hash, p_email, p_user_type);
END
/
/
;
DELIMITER;

/* ============================================================================= */

CREATE PROCEDURE Get_User_By_Username_Or_Email(
    IN p_identifier VARCHAR(100)
)
BEGIN
    SELECT username AS 'User Name', email AS 'User Email' , user_type AS 'User Type' , password_hash AS 'User Password' FROM users
    WHERE username = p_identifier OR email = p_identifier;
END
/
/
;
DELIMITER;

/* ============================================================================= */

CREATE PROCEDURE Get_All_Users()
BEGIN
    SELECT id AS 'User ID', username AS 'User Name', email AS 'User Email', user_type AS 'User Type' FROM users;
END
/
/
;
DELIMITER;

/* ============================================================================= */

CREATE PROCEDURE Update_User(
    IN p_id INT,
    IN p_username VARCHAR(50),
    IN p_password_hash VARCHAR(255),
    IN p_email VARCHAR(100),
    IN p_user_type VARCHAR(20)
)
BEGIN
    UPDATE users
    SET username = p_username,
        password_hash = p_password_hash,
        email = p_email,
        user_type = p_user_type
    WHERE id = p_id;
END
/
/
;
DELIMITER;

/* ============================================================================= */

CREATE PROCEDURE Delete_User(
    IN p_id INT
)
BEGIN
    DELETE FROM users WHERE id = p_id;
END
/
/
;
DELIMITER;