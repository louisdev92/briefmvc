<?php

require_once 'Database.php';

class Produit {
    public static function getAll() {
        $db = Database::getConnexion();
        $stmt = $db->query("SELECT * FROM produits");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        $db = Database::getConnexion();
        $stmt = $db->prepare("SELECT * FROM produits WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function ajouter($nom, $prix, $stock) {
        $db = Database::getConnexion();
        $stmt = $db->prepare("INSERT INTO produits (nom, prix, stock) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $prix, $stock]);
    }

    public static function modifier($id, $nom, $prix, $stock) {
        $db = Database::getConnexion();
        $stmt = $db->prepare("UPDATE produits SET nom = ?, prix = ?, stock = ? WHERE id = ?");
        $stmt->execute([$nom, $prix, $stock, $id]);
    }

    public static function supprimer($id) {
        $db = Database::getConnexion();
        $stmt = $db->prepare("DELETE FROM produits WHERE id = ?");
        $stmt->execute([$id]);
    }
}

?>
