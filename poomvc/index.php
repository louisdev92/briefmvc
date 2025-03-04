<?php

require_once 'controllers/ProduitController.php';

$controller = new ProduitController();

$action = isset($_GET['action']) ? $_GET['action'] : 'liste';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($action) {
    case 'liste':
        $controller->liste();
        break;
    case 'ajouter':
        $controller->ajouter();
        break;
    case 'modifier':
        if ($id) {
            $controller->modifier($id);
        }
        break;
    case 'supprimer':
        if ($id) {
            $controller->supprimer($id);
        }
        break;
    default:
        $controller->liste();
        break;
}

?>
