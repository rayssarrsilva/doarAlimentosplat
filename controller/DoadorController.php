<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../dao/DoadorDAO.php';

class DoadorController {
    public function cadastrar() {
        $dao = new DoadorDAO();
        $dao->inserir($_POST['nome'], $_POST['email']);
        header('Location: /mvc20251/public/form_doador.php');

        echo "✅ Doador cadastrado com sucesso!"; // Teste visual
        // header('Location: /mvc20251/public/form_doador.php'); // Só ativa depois do teste

    }
}
