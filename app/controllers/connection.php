<?php

namespace app\controllers;

use flight\Engine;

class Connection {
public function dbconnect() {
        $dsn = "mysql:host=localhost;dbname=gestion_transport;charset=utf8mb4";
        $user = "root";
        $pass = "";
        try {
            $DBH = new PDO($dsn, $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $e) {
            die("Connexion échouée : " . $e->getMessage());
        }
        return $DBH;
    }
}
?>