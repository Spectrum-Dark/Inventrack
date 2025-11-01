<?php

class Controller
{
    public static function Nucleo()
    {
        /* Si las peticiones request estan vacias nos vamos al index */
        if (empty($_REQUEST[''])) {
            require_once(__DIR__ . '/..//Views/Home/login_registers.php');
        }
    }

    public static function Paginas()
    {
        if (!empty($_REQUEST['view'])) {
            $view = $_REQUEST['view'];
            switch ($view) {
                case 'dashboard':
                    require_once(__DIR__ . '/../Views/Application/Pages/dashboard.php');
                    break;
                case 'products':
                    require_once(__DIR__ . '/../Views/Application/Pages/products.php');
                    break;
                case 'sales':
                    require_once(__DIR__ . '/../Views/Application/Pages/sales.php');
                    break;
                case 'report':
                    require_once(__DIR__ . '/../Views/Application/Pages/report.php');
                    break;
                case 'settings':
                    require_once(__DIR__ . '/../Views/Application/Pages/settings.php');
                    break;
                default:
                    require_once(__DIR__ . '/../Views/Application/Pages/dashboard.php');
                    break;
            }
        } else {
            require_once(__DIR__ . '/../Views/Application/Pages/dashboard.php');
        }
    }
}
