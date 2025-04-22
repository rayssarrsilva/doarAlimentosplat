<?php
require_once __DIR__ . '/../generic/Conexao.php';

class DoacaoDAO {
    private $conn;

    public function __construct() {
        $this->conn = Conexao::conectar();
    }

    public function listarTodos() {
        $sql = "SELECT d.id, doa.nome AS doador, d.descricao AS item, d.data_doacao 
                FROM doacoes d
                JOIN doadores doa ON d.doador_id = doa.id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
