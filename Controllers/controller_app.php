<?php
/* importamos de la carpeta models el archivo functions */
require_once(__DIR__ . '/../Models/app.php');

class Controller_App_Index
{
    private App_View_Functions $methods;

    public function __construct()
    {
        $this->methods = new App_View_Functions();
    }

    public function Dashboard()
    {
        $this->methods->dashboard();
    }

    public function Add_Products(array $Data)
    {
        $this->methods->add_products($Data);
    }

    public function List_Products()
    {
        $this->methods->list_products();
    }

    public function Sales_App()
    {
        $this->methods->sales_app();
    }

    public function Reports_App()
    {
        $this->methods->reports_app();
    }

    public function Configurations()
    {
        $this->methods->configurations();
    }

    public function DataViewAll(): array
    {
        /* Capta todos los datos en array dependiendo la vista */
        $Data = [];

        if (isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] === 'Insertar') {
            $Data = $_GET;
        }
        return $Data;
    }

    /* Datos de entrada */

    public function App_Inventrack()
    {
        /* Validamos que vista esta haciendo ejecutada */

        if (isset($_GET['view']) && !empty($_GET['view'])) {
            $view = $_GET['view'];
            switch ($view) {
                case 'dashboard':
                    /* Logica */
                    break;
                case 'products':
                    /* Logica agregamos productos */
                    $this->Add_Products($this->DataViewAll());
                    break;
                case 'listproducts':
                    /* Logica */
                    break;
                case 'sales':
                    /* Logica */
                    break;
                case 'report':
                    /* Logica */
                    break;
                case 'settings':
                    /* Logica */
                    break;
                default:
                    /* Logica inicial */
                    break;
            }
        }
    }
}
