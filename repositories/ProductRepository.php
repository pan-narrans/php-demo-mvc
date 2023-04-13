<?php
include_once("repositories/Repository.php");
include_once("models/ProductModel.php");

class ProductRepository extends Repository {

  public function  get() {
    $query = "SELECT * FROM products;";
    $statement = $this->conn->prepare($query);
    $statement->execute();

    $productModels = [];
    $results =  $statement->get_result()->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $row) {
      $productModel = new ProductModel();
      $productModel->setId($row['id']);
      $productModel->setName($row['name']);
      $productModels[] = $productModel;
    }

    return $productModels;
  }

  public function save(){
    // TODO:
  }
}