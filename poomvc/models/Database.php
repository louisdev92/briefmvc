<?php
class Database {
    private static $connexion = null;

    public static function getConnexion() {
        if (self::$connexion === null) {
            self::$connexion = new PDO('mysql:host=localhost;dbname=pdobrief', 'root', '');
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connexion;
    }
}
?>