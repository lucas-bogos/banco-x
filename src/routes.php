<?php

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
  case '/':
    require_once __DIR__ . "/pages/home.php";
    break;

  case '/conta':
    require_once __DIR__ . "/pages/conta.php";
    break;
    
  default:
    require_once __DIR__ . "/pages/partials/head.php";
    require_once __DIR__ . "/pages/partials/header.php";
    echo 'Nada encontrado';
    require_once __DIR__ . "/pages/partials/footer.php";
    break;
}
