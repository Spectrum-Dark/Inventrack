-- Active: 1762210500462@@127.0.0.1@3306@inventrack
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

-- =============================================================================
/* Creamos la tabla productos */
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    -- Código personalizado (ej: PROD-2025-0001)
    id_prod VARCHAR(50) NOT NULL UNIQUE,
    -- Nombre del producto
    name_prod VARCHAR(100) NOT NULL,
    -- Descripción
    description_prod TEXT,
    -- Precio
    price_prod DECIMAL(10, 2) NOT NULL,
    -- Cantidad en stock
    stock_prod INT NOT NULL DEFAULT 0,
    -- Categoría (texto o ID si usas tabla categories)
    category VARCHAR(100) NOT NULL,
    -- Proveedor
    supplier VARCHAR(100) NOT NULL,
    -- Fecha de vencimiento (opcional)
    expiration_date DATE NULL,
    -- Fecha de creación
    created_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- Índices para búsquedas rápidas
    INDEX idx_id_prod (id_prod),
    INDEX idx_name_prod (name_prod),
    INDEX idx_category (category),
    INDEX idx_supplier (supplier)
);
-- =============================================================================
-- Insert_Product

DELIMITER $$
CREATE FUNCTION FN_GenerateProductId() 
RETURNS VARCHAR(50) 
DETERMINISTIC
BEGIN
    DECLARE V_YEAR VARCHAR(4);
    DECLARE V_NEXT_ID INT;
    DECLARE V_PRODUCT_ID VARCHAR(50);

    -- Obtener el año actual
    SET V_YEAR = YEAR(CURDATE());

    -- Obtener el último número secuencial para el año actual
    SELECT 
        COALESCE(MAX(CAST(SUBSTRING_INDEX(id_prod, '-', -1) AS UNSIGNED)), 0) + 1
    INTO 
        V_NEXT_ID
    FROM 
        products
    WHERE 
        id_prod LIKE CONCAT('PROD-', V_YEAR, '-%');
    
    -- Construir el nuevo código (ej: PROD-0001)
    SET V_PRODUCT_ID = CONCAT(
        'PROD-',
        LPAD(V_NEXT_ID, 4, '0') -- Rellena con ceros a la izquierda hasta 4 dígitos
    );

    RETURN V_PRODUCT_ID;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE SP_CreateProduct(
    IN P_name_prod VARCHAR(100),
    IN P_description_prod TEXT,
    IN P_price_prod DECIMAL(10, 2),
    IN P_stock_prod INT,
    IN P_category VARCHAR(100),
    IN P_supplier VARCHAR(100),
    IN P_expiration_date DATE
)
BEGIN
    DECLARE V_id_prod VARCHAR(50);
    
    -- Generar el código de producto personalizado
    SET V_id_prod = FN_GenerateProductId();
    
    INSERT INTO products (
        id_prod, 
        name_prod, 
        description_prod, 
        price_prod, 
        stock_prod, 
        category, 
        supplier, 
        expiration_date
    ) VALUES (
        V_id_prod, 
        P_name_prod, 
        P_description_prod, 
        P_price_prod, 
        P_stock_prod, 
        P_category, 
        P_supplier, 
        P_expiration_date
    );
    
    SELECT 
        'Producto creado con éxito.',
        LAST_INSERT_ID() AS new_id, 
        V_id_prod AS new_id_prod;

END$$
DELIMITER ;

-- =============================================================================
-- Uopdate_Product

DELIMITER $$
CREATE PROCEDURE SP_UpdateProduct(
    IN P_id INT,
    IN P_name_prod VARCHAR(100),
    IN P_description_prod TEXT,
    IN P_price_prod DECIMAL(10, 2),
    IN P_stock_prod INT,
    IN P_category VARCHAR(100),
    IN P_supplier VARCHAR(100),
    IN P_expiration_date DATE
)
BEGIN
    UPDATE products
    SET 
        name_prod = P_name_prod,
        description_prod = P_description_prod,
        price_prod = P_price_prod,
        stock_prod = P_stock_prod,
        category = P_category,
        supplier = P_supplier,
        expiration_date = P_expiration_date
    WHERE 
        id = P_id;
        
    SELECT ROW_COUNT() AS rows_affected;
END$$
DELIMITER ;

-- =============================================================================
-- Delete_Product

DELIMITER $$
CREATE PROCEDURE SP_DeleteProduct(
    IN P_id INT
)
BEGIN
    DELETE FROM products
    WHERE id = P_id;
    
    SELECT ROW_COUNT() AS rows_affected;
END$$
DELIMITER ;

-- =============================================================================
-- Get_All_Products

DELIMITER $$
CREATE PROCEDURE SP_GetAllProducts()
BEGIN
    SELECT 
        id, 
        id_prod, 
        name_prod, 
        description_prod, 
        price_prod, 
        stock_prod, 
        category, 
        supplier, 
        expiration_date, 
        created_on
    FROM 
        products
    ORDER BY 
        id DESC;
END$$
DELIMITER ;

-- =============================================================================
-- Indexes adicionales para optimización

DELIMITER $$
CREATE PROCEDURE SP_GetProductsByIndex(
    IN P_search_term VARCHAR(100), -- Término de búsqueda parcial
    IN P_order_by VARCHAR(50)      -- Columna para ordenar ('id', 'name_prod', 'category', 'supplier')
)
BEGIN
    SET @sql = CONCAT('
        SELECT 
            id, 
            id_prod, 
            name_prod, 
            description_prod, 
            price_prod, 
            stock_prod, 
            category, 
            supplier, 
            expiration_date, 
            created_on
        FROM 
            products
        WHERE
            (name_prod LIKE ? OR category LIKE ? OR supplier LIKE ?) 
    ');

    -- Validar y construir la cláusula ORDER BY
    IF P_order_by IN ('id', 'name_prod', 'category', 'supplier') THEN
        SET @sql = CONCAT(@sql, ' ORDER BY ', P_order_by);
    ELSE
        SET @sql = CONCAT(@sql, ' ORDER BY id'); -- Orden por defecto
    END IF;

    -- Preparar y ejecutar la consulta
    SET @search_pattern = CONCAT('%', P_search_term, '%');
    PREPARE stmt FROM @sql;
    EXECUTE stmt USING @search_pattern, @search_pattern, @search_pattern;
    DEALLOCATE PREPARE stmt;

END$$
DELIMITER ;