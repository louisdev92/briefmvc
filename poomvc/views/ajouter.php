<?php
include 'header.php';
?>
<h2>Ajouter un Produit</h2>
<form method="post">
    Nom: <input type="text" name="nom" required><br>
    Prix: <input type="number" step="0.01" name="prix" required><br>
    Quantité: <input type="number" name="quantite" required><br>
    <input type="submit" value="Ajouter" class="submit">
</form>
<a href="index.php?action=liste"> ◄ Retour</a>