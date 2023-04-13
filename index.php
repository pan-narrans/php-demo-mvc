<?php

require_once("config.php");
require_once("controllers/RouteController.php");

(new RouteController())->resolveURL($_SERVER['REQUEST_URI']);
