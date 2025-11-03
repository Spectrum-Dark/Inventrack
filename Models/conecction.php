<?php

class MySQLDatabase
{
    private string $host = 'localhost';
    private string $username = 'root';
    private string $password = '';
    private string $database = 'inventrack';
    private ?mysqli $connection = null;

    // 🔒 Instancia única (Singleton)
    private static ?MySQLDatabase $instance = null;

    // 🔒 Constructor privado (nadie puede crear nuevas instancias)
    private function __construct(string $database = '')
    {
        if (!empty($database)) {
            $this->database = $database;
        }
        $this->openConnection();
    }

    // 🧩 Método estático para obtener la instancia única
    public static function getInstance(string $database = ''): MySQLDatabase
    {
        if (self::$instance === null) {
            self::$instance = new MySQLDatabase($database);
        }
        return self::$instance;
    }

    private function openConnection(): void
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            throw new Exception('Error de conexión: ' . $this->connection->connect_error);
        }

        $this->connection->set_charset('utf8mb4');
    }

    public function closeConnection(): void
    {
        if ($this->connection) {
            $this->connection->close();
            $this->connection = null;
            self::$instance = null; // libera la instancia
        }
    }

    public function query(string $sql, array $params = []): mysqli_result|bool
    {
        if (empty($params)) {
            $result = $this->connection->query($sql);
            if (!$result) {
                throw new Exception('Error en la consulta: ' . $this->connection->error);
            }
            return $result;
        }

        $stmt = $this->connection->prepare($sql);
        if (!$stmt) {
            throw new Exception('Error al preparar la consulta: ' . $this->connection->error);
        }

        $types = '';
        foreach ($params as $param) {
            $types .= match (gettype($param)) {
                'integer' => 'i',
                'double' => 'd',
                default => 's'
            };
        }

        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result ?: true;
    }

    public function escape(string $value): string
    {
        return $this->connection->real_escape_string($value);
    }

    public function __destruct()
    {
        $this->closeConnection();
    }
}
