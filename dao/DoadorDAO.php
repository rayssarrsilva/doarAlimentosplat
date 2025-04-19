<?php
require_once __DIR__ . '/../generic/Conexao.php';

class DoadorDAO {
    public function inserir($nome, $email) {
        try {
            $sql = "INSERT INTO doadores (nome, email) VALUES (?, ?)";
            $stmt = Conexao::getInstancia()->prepare($sql);
            $stmt->execute([$nome, $email]);
        } catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                echo "⚠️ Este email já está cadastrado!";
            } else {
                echo "Erro ao cadastrar: " . $e->getMessage();
            }
        }
    }
}