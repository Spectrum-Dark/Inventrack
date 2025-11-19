<?php

require_once(__DIR__ . '/api_conecction.php');

class Api_App
{
    private MySQLDatabase $db;

    public function __construct()
    {
        $this->db = MySQLDatabase::getInstance();
    }

    public function list_products_json()
    {
        $Sql = 'CALL SP_GetAllProducts();';

        try {
            $Result = $this->db->query($Sql);

            if ($Result->num_rows === 0) {
                return json_encode([
                    "status" => "success",
                    "data" => []
                ]);
            }

            $productos = [];

            while ($P = $Result->fetch_assoc()) {

                $productos[] = [
                    "id"          => $P['id'],
                    "id_prod"     => $P['id_prod'],
                    "name_prod"   => $P['name_prod'],
                    "price_prod"  => $P['price_prod'],
                    "stock_prod"  => $P['stock_prod'],
                    "description" => $P['description_prod'],
                    "category"    => $P['category'],
                    "supplier"    => $P['supplier'],
                    "expiration"  => $P['expiration_date']
                ];
            }

            $Result->free();

            return json_encode([
                "status" => "success",
                "data"   => $productos
            ]);
        } catch (Exception $e) {
            error_log($e->getMessage());

            return json_encode([
                "status" => "error",
                "message" => "Error al obtener los productos"
            ]);
        }
    }
}
