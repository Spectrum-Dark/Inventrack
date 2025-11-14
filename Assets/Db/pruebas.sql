-- Active: 1761759741520@@127.0.0.1@3306@inventrack
SELECT * FROM products;

TRUNCATE products;


--Llamar a todos
CALL SP_GetAllProducts();