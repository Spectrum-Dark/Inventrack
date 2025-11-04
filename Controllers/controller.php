<?php

class Controller
{
    public static function Nucleo()
    {
        $view = $_REQUEST['view'] ?? '';

        if ($view === 'recovery') {
            require_once __DIR__ . '/../Views/Home/recovery_password.php';
        } else {
            require_once __DIR__ . '/../Views/Home/login_registers.php';
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
                case 'listproducts':
                    require_once(__DIR__ . '/../Views/Application/Pages/listproducts.php');
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
                case 'signout':
                    self::Close_Session();
                    break;
                default:
                    require_once(__DIR__ . '/../Views/Application/Pages/dashboard.php');
                    break;
            }
        } else {
            require_once(__DIR__ . '/../Views/Application/Pages/dashboard.php');
        }
    }

    /* Creamos validacion de session si no devolvemos al login */
    public static function Session_App()
    {
        session_start();
        if (!isset($_SESSION['username'])) {
            header('Location: /Inventrack/');
            exit();
        }
    }

    /* Cerramos session de la app y destruimos */
    public static function Close_Session()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /Inventrack/');
        exit();
    }
}
