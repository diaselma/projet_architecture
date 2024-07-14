<?php
require_once 'model/Article.php';
require_once 'model/DatabaseConnection.php';


class CategorieDao {
  private $conn;
  private $table_name = "categorie";

  public function __construct() {
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
  }

  public function getAllCategories() {
    $query = "SELECT id, libelle FROM " . $this->table_name;

    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getCategorieById($id) {
    $query = "SELECT libelle FROM " . $this->table_name . " WHERE id = :id";

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}