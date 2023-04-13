<?php

include_once("repositories/ProductRepository.php");

class ProductController {

  public function resolveApiCall($httpMethod) {
    $repository = new ProductRepository();

    switch ($httpMethod) {
      case 'GET':
        foreach ($repository->get() as $product) echo $product . "<br>";
        break;

      case 'POST':
        echo "petición de subida a la db";
        break;

      case 'PUT':
        echo "petición de actualización a la db";
        break;

      case 'DELETE':
        echo "petición de borrado a la db";
        break;
    }
  }
}
