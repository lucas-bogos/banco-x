<?php

use source\app\Login;

$uri = $_SERVER['REQUEST_URI'];

if(!Login::isLogged() && $uri != "/login" && $uri != "/cadastro") {
  header("Location: /login");
}

switch ($uri) {
  case '/':
    require_once __DIR__ . "/pages/home.php";
    break;

  case '/conta':
    require_once __DIR__ . "/pages/conta.php";
    break;

  case '/login':
    require_once __DIR__ . "/pages/login.php";
    break;
    
  case '/cadastro': 
    require_once __DIR__ . "/pages/cadastro.php";
    break;

  default:
    require_once __DIR__ . "/pages/404.php";
    break;
}
