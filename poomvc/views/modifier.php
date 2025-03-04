<?php
include 'header.php';
?>
<h2>Modifier le Produit</h2>
<form method="post">
    Nom: <input type="text" name="nom" value="<?= $produit['nom'] ?>" required><br>
    Prix: <input type="number" step="0.01" name="prix" value="<?= $produit['prix'] ?>" required><br>
    Stock: <input type="number" name="stock" value="<?= $produit['stock'] ?>" required><br>
    <input type="submit" value="Modifier" class="submit">
</form>
<a href="index.php?action=liste"> ◄ Retour</a>