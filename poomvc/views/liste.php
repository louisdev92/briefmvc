<?php include 'header.php'; ?>
<h1>CAFTHE</h1>
<h2>Liste des Produits</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($produits as $produit) : ?>
        <tr>
            <td><?= $produit['id'] ?></td>
            <td><?= $produit['nom'] ?></td>
            <td><?= $produit['prix'] ?></td>
            <td><?= $produit['stock'] ?></td>
            <td>
                <a href="index.php?action=modifier&id=<?= $produit['id'] ?>">Modifier</a>
                |
                <a href="index.php?action=supprimer&id=<?= $produit['id'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?action=ajouter" class="add-button">+</a>
<?php include 'footer.php'; ?>
