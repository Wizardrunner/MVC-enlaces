<?php

class ModelBBDD {
    private $host = 'localhost';
    private $dbname = 'enlaces';
    private $user = 'root';
    private $password = '';
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getVistaEnlaces($query = "", $filterType = "") {
        $sql = "SELECT * FROM vista_enlaces";
        $params = [];

        if (!empty($filterType)) {
            switch ($filterType) {
                case 'categoria':
                    $sql .= " WHERE nombre_categoria LIKE ?";
                    $params[] = "%$query%";
                    break;
                case 'lenguaje':
                    $sql .= " WHERE tipo_categoria = 'LENGUAJE'";
                    if (!empty($query)) {
                        $sql .= " AND (nombre_categoria LIKE ? OR titulo LIKE ?)";
                        $params[] = "%$query%";
                        $params[] = "%$query%";
                    }
                    break;
                case 'titulo':
                    $sql .= " WHERE titulo LIKE ?";
                    $params[] = "%$query%";
                    break;
                default:
                    throw new Exception("Filtro no reconocido");
            }
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
