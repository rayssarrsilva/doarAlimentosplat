<?php
if (!class_exists('Conexao')) {
    class Conexao {
        private static $instancia;

        public static function conectar() {
            if (!isset(self::$instancia)) {
                try {
                    self::$instancia = new PDO(
                        'mysql:host=localhost;dbname=doacoes', // esse é o nome do seu banco
                        'root',
                        '',
                        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
                    );
                    self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("Erro na conexão: " . $e->getMessage());
                }
            }

            return self::$instancia;
        }
    }
}
