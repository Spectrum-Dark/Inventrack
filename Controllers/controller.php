<?php

class Controller
{
    public static function Nucleo()
    {
        /* Si las peticiones request estan vacias nos vamos al index */
        if (empty($_REQUEST[''])) {
            require_once('./Views/Home/login_registers.php');
        }
    }
}
