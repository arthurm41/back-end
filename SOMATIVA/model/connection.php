<?php

class Connection {
    private static $instance = null;

    public static function getInstance() {
        if (!self::$instance) {
            try {
                $host = 'localhost';
                $dbname = 'biblioteca';
                $user = 'root';
                $pass = '1234';

                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8",
                    $user,
                    $pass
                );

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
