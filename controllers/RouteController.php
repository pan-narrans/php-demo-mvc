<?php

include_once("controllers/ProductController.php");

class RouteController {

  public function resolveURL($url) {
    $route = str_replace(URL_ROOT, "", $url);

    switch ($route) {
      case '/':
      case '/home':
        include_once("views/home.php");
        break;

      case '/productos':
        include_once("views/producto.php");
        break;

      case '/api/productos':
        (new ProductController())->resolveApiCall($_SERVER['REQUEST_METHOD']);
        break;

      default:
        include_once("views/404.php");
        break;
    }
  }
}
