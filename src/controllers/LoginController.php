<?php

namespace source\controllers;

use source\app\Login;
use source\repositories\user\UserRepositoryMySQL;

class LoginController {
  public static function index(array $payload) {
    $repository = new UserRepositoryMySQL();

    $login = new Login($repository);

    var_dump([ "payload" => $payload ]);

    $result = $login->checkCredentials($payload["cpf"], $payload["password"]);

    var_dump(["result" => $result]);

    if(!$result) {
      echo "Não foi possível fazer login, revise os dados e tente novamente";
    }

    if($result) {
      header("Location: /");
    }
  }
}
