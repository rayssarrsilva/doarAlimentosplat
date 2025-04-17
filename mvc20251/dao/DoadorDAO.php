<?php
require_once './generic/Conexao.php';

class DoadorDAO {
    public function inserir($nome, $email) {
        $sql = "INSERT INTO doadores (nome, email) VALUES (?, ?)";
        $stmt = Conexao::getInstancia()->prepare($sql);
        $stmt->execute([$nome, $email]);
    }
}
