<?php
class Connection {
    private static $instance = null;

    public static function getInstance() {
        if (!self::$instance) {
            try {
                $host = 'localhost';
                $dbname = 'projeto_bebidas2';
                $user = 'root';
                $pass = '1234';

                // Conecta ao MySQL (SEM dbname)
                $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // Cria DB se não existir
                $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

                // Agora conecta DIRETO ao DB certo
                self::$instance = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Erro ao conectar ao MySQL: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
