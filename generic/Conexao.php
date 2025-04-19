<?php
class Conexao {
    private static $instancia;

    private function __construct() {}

    public static function getInstancia() {
        if (!isset(self::$instancia)) {
            self::$instancia = new PDO('mysql:host=localhost;dbname=doacoes', 'root', '');
            self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instancia;
    }
}
