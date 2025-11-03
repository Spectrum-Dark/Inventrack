<?php
/* Importamos la conecction y properties */
require_once(__DIR__ . '/conecction.php');

class functions_app
{
    private MySQLDatabase $db;

    public function __construct()
    {
        $this->db = MySQLDatabase::getInstance();
    }

    public function Login() {}

    public function Register(array $data): bool
    {
        /* try {
            $Sql = "Call Insert_User (?, ?, ?, ?);";
            $Paramerts = [
                $data['username'],
                password_hash($data['password'], PASSWORD_BCRYPT),
                $data['email'],
                $data['user_type'],
            ];
            $this->db->query($Sql, $Paramerts);
            return true;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return false;
        } */
       echo "OK";
       return true;
    }
}
