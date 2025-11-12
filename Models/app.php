<?php
require_once(__DIR__ . '/conecction.php');

class App_View_Functions
{
    private MySQLDatabase $db;

    public function __construct()
    {
        $this->db = MySQLDatabase::getInstance();
    }

    /* Funciones de la apliacion en general dependiendo de la vista */

    public function dashboard() {}

    public function add_products(array $Data): bool
    {
        try {
            if (isset($Data) && !empty($Data)) {
                $Sql = "CALL SP_CreateProduct(?,?,?,?,?,?,?,?,?);";

                $Parameters = [
                    $Data['Name_Product'],
                    $Data['Description_Product'],
                    $Data['Product_Product'],
                    $Data['Price_Product'],
                    $Data['Name_Product'],
                    $Data['Stock_Product'],
                    $Data['Category_Product'],
                    $Data['Supplier_Product'],
                    $Data['Expiration_Date'],
                ];

                $this->db->query($Sql, $Parameters);
            }
            return true;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return false;
        }
    }

    public function list_products() {}

    public function sales_app() {}

    public function reports_app() {}

    public function configurations() {}
}
