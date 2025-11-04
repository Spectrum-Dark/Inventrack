<?php
require_once(__DIR__ . '/conecction.php');

class functions_app
{
    private MySQLDatabase $db;

    public function __construct()
    {
        $this->db = MySQLDatabase::getInstance();
    }

    public function Login(array $data)
    {
        try {
            $Sql = "CALL Get_User_By_Username_Or_Email (?, ?);";
            $Paramerts = [
                $data['username'],
                $data['password'],
            ];
            $result = $this->db->query($Sql, $Paramerts);
            return $result->fetch_assoc();
        } catch (Exception $e) {
            error_log($e->getMessage());
            return null;
        }
    }

    public function Register(array $data): bool
    {
        try {
            $Sql = "CALL Insert_User(?, ?, ?, ?);";
            $Paramerts = [
                $data['username'],
                $data['password'],
                $data['email'],
                $data['user_type'],
            ];
            $this->db->query($Sql, $Paramerts);
            return true;
        } catch (Exception $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}
