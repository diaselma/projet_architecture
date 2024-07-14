<?php
require_once 'controller/Controller.php';

$controller = new Controller();

if (empty($_GET)) {
  $controller->getAllArticles();
} else if (isset($_GET['categorie'])) {
  $categorieId = htmlspecialchars($_GET['categorie']);
  $controller->getArticleByCategorieId($categorieId);
} else { // Page not found (404 error)
  $controller->showErrorPage();
}
