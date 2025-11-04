-- Base de datos
CREATE DATABASE IF NOT EXISTS inventrack;
USE inventrack;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_type VARCHAR(20) NOT NULL,
    created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================================================================
-- Insert_User
DROP PROCEDURE IF EXISTS Insert_User;
DELIMITER $$
CREATE PROCEDURE Insert_User(
    IN p_username VARCHAR(50),
    IN p_password_hash VARCHAR(255),
    IN p_email VARCHAR(100),
    IN p_user_type VARCHAR(20)
)
BEGIN
    DECLARE user_exists INT;

    -- Verificar si el usuario ya existe
    SELECT COUNT(*) INTO user_exists
    FROM users
    WHERE username = p_username;

    -- Si no existe, insertar
    IF user_exists = 0 THEN
        INSERT INTO users (username, password_hash, email, user_type)
        VALUES (p_username, p_password_hash, p_email, p_user_type);
    ELSE
        SELECT 'El usuario ya existe' AS mensaje;
    END IF;
END$$
DELIMITER ;

-- =============================================================================
-- Get_User_By_Username_Or_Email
DROP PROCEDURE IF EXISTS Get_User_By_Username_Or_Email;
DELIMITER $$
CREATE PROCEDURE Get_User_By_Username_Or_Email(
    IN p_identifier VARCHAR(100),
    IN p_password VARCHAR(255)
)
BEGIN
    SELECT 
        username AS 'User Name', 
        email AS 'User Email',
        user_type AS 'User Type',
        password_hash AS 'User Password'
    FROM users
    WHERE (username = p_identifier OR email = p_identifier)
      AND password_hash = p_password
    LIMIT 1;
END$$
DELIMITER ;

-- =============================================================================
-- Get_All_Users
DROP PROCEDURE IF EXISTS Get_All_Users;
DELIMITER $$
CREATE PROCEDURE Get_All_Users()
BEGIN
    SELECT id AS 'User ID', username AS 'User Name', email AS 'User Email', user_type AS 'User Type' 
    FROM users;
END$$
DELIMITER ;

-- =============================================================================
-- Update_User
DROP PROCEDURE IF EXISTS Update_User;
DELIMITER $$
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
END$$
DELIMITER ;

-- =============================================================================
-- Delete_User
DROP PROCEDURE IF EXISTS Delete_User;
DELIMITER $$
CREATE PROCEDURE Delete_User(
    IN p_id INT
)
BEGIN
    DELETE FROM users WHERE id = p_id;
END$$
DELIMITER ;
