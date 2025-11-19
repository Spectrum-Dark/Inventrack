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

    public function Dashboard($Get_User)
    {
        $this->methods->dashboard($Get_User);
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

        if (isset($_POST['action']) && !empty($_POST['action']) && $_POST['action'] === 'Insertar_') {
            $Data = $_POST;
        }
        return $Data;
    }


}
