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
                $Sql = "CALL SP_CreateProduct(?,?,?,?,?,?,?);";

                $Parameters = [
                    $Data['Name_Product'],
                    $Data['Description_Product'],
                    $Data['Price_Product'],
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
    public function list_products()
    {
        $Sql = 'CALL SP_GetAllProducts();';

        try {
            $Result = $this->db->query($Sql);

            if ($Result->num_rows === 0) {
                echo "<tr><td colspan='9'>No hay productos registrados</td></tr>";
                return;
            }

            while ($P = $Result->fetch_assoc()) {

                // Sanitización
                $id        = htmlspecialchars($P['id_prod'], ENT_QUOTES);
                $nombre    = htmlspecialchars($P['name_prod'], ENT_QUOTES);
                $precio    = htmlspecialchars($P['price_prod'], ENT_QUOTES);
                $cantidad  = htmlspecialchars($P['stock_prod'], ENT_QUOTES);

                $descripcionFull = htmlspecialchars($P['description_prod'], ENT_QUOTES);

                $categoria  = htmlspecialchars($P['category'], ENT_QUOTES);
                $proveedor  = htmlspecialchars($P['supplier'], ENT_QUOTES);
                $venc       = htmlspecialchars($P['expiration_date'], ENT_QUOTES);

                $rowId      = htmlspecialchars($P['id'], ENT_QUOTES);

                echo "
<tr>
    <td>{$id}</td>
    <td>{$nombre}</td>
    <td>\${$precio}</td>
    <td>{$cantidad}</td>

    <!-- Descripción con tooltip -->
    <td class='descripcion-col' data-full=\"{$descripcionFull}\">
        {$descripcionFull}
    </td>

    <td>{$categoria}</td>
    <td>{$proveedor}</td>
    <td>{$venc}</td>

    <td class='acciones'>
        <button class='btn-editar' data-id='{$rowId}'>Editar</button>
        <button class='btn-eliminar' data-id='{$rowId}'>Eliminar</button>
    </td>
</tr>";
            }

            $Result->free();
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo "<tr><td colspan='9'>Error al cargar los productos</td></tr>";
        }
    }



    public function sales_app() {}

    public function reports_app() {}

    public function configurations() {}
}
