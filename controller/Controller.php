<?php
require_once 'dao/ArticleDao.php';
require_once 'dao/CategorieDao.php';

class Controller {
  private $articleDao;
  private $categorieDao;
  private $categories;

  public function __construct() {
    $this->articleDao = new ArticleDao();
    $this->categorieDao = new CategorieDao();
    $this->categories = $this->categorieDao->getAllCategories();
  }

  public function getAllArticles() {
    $categories = $this->categories;
    $articles = $this->articleDao->getAllArticles();
    include 'view/home.php';
  }

  public function getArticleByCategorieId($categorieId) {
    $categories = $this->categories;
    $categorieLibelle = $this->categorieDao->getCategorieById($categorieId);
    $articles =  $this->articleDao->getArticlesByCategorie($categorieId);
    include 'view/articles.php';
  }

  public function showErrorPage() {
    $categories = $this->categories;
    include 'view/404.php';
  }
}