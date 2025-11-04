<?php
/* importamos de la carpeta models el archivo functions */
require_once(__DIR__ . '/../Models/functions.php');

class Controller_Home_App
{
    private functions_app $methods;

    public function __construct()
    {
        $this->methods = new functions_app();
    }

    public function User_Register(array $data)
    {
        $this->methods->Register($data);
    }

    public function Home_App()
    {
        if (isset($_POST['action']) && !empty($_POST['action']) && $_POST['action'] === 'register') {
            /* verificamos que la contraseña sean iguales */
            if ($_POST['password'] !== $_POST['confirmarpass']) {
                die('Las contraseñas no coinciden.');
            } else {
                /* Pendiente */
                $data = [
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'email' => $_POST['email'],
                    'user_type' => $_POST['user_type'],
                ];
                $this->User_Register($data);
            }
        }
    }
}
