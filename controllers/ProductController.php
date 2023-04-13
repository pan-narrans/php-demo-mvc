<?php

include_once("repositories/ProductRepository.php");

$httpMethod = $_SERVER['REQUEST_METHOD'];
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