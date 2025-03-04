<?php

require_once 'models/Produit.php';

class ProduitController {
    public function liste() {
        $produits = Produit::getAll();
        include 'views/liste.php';
    }

    public function ajouter() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $quantite = $_POST['quantite'];
            Produit::ajouter($nom, $prix, $quantite);
            header('Location: index.php?action=liste');
        } else {
            include 'views/ajouter.php';
        }
    }

    public function modifier($id) {
        $produit = Produit::getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nom = $_POST['nom'];
            $prix = $_POST['prix'];
            $stock = $_POST['stock'];
            Produit::modifier($id, $nom, $prix, $stock);
            header('Location: index.php?action=liste');
        } else {
            include 'views/modifier.php';
        }
    }

    public function supprimer($id) {
        Produit::supprimer($id);
        header('Location: index.php?action=liste');
    }
}

?>
