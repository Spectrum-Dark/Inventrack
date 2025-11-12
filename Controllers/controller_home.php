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

    public function User_Login(array $data)
    {
        return $this->methods->Login($data);
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
                /* validamos si las variables no estan vacias */
                if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email']) && !empty($_POST['user_type'])) {
                    $data = [
                        'username' => $_POST['username'],
                        'password' => $_POST['password'],
                        'email' => $_POST['email'],
                        'user_type' => $_POST['user_type'],
                    ];
                    $this->User_Register($data);
                }
            }
        } else {
            if (isset($_POST['action']) && !empty($_POST['action']) && $_POST['action'] === 'login') {
                if (!empty($_POST['username']) && !empty($_POST['password'])) {
                    $data = [
                        'username' => $_POST['username'],
                        'password' => $_POST['password'],
                    ];
                    $user = $this->User_Login($data);

                    if ($user) {
                        /* Creamos sesion del sistema */
                        session_start();
                        $_SESSION['user_name'] = $user['User Name'];
                        $_SESSION['user_email'] = $user['User Email'];
                        $_SESSION['user_type'] = $user['User Type'];

                        /* Nos redirigimos a applicaction app */
                        header('Location: views/Application/App/app.php');
                        exit();
                    }
                }
            }
        }
    }
}
