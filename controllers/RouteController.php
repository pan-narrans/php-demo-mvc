<?php

const ROOT = "/php-demo";
$route = str_replace(ROOT, "", $_SERVER['REQUEST_URI']);

switch ($route) {
  case '/':
  case '/home':
    include_once("views/home.php");
    break;

  case '/productos':
    include_once("views/producto.php");
    break;

  case '/api/productos':
    include_once("controllers/ProductController.php");
    break;

  default:
    include_once("views/404.php");
    break;
}