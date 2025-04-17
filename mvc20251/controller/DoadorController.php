<?php
require_once './dao/DoadorDAO.php';

class DoadorController {
    public function cadastrar() {
        $dao = new DoadorDAO();
        $dao->inserir($_POST['nome'], $_POST['email']);
        header('Location: /mvc20251/public/form_doador.php');
    }
}
