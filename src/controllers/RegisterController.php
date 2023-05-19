<?php

namespace source\controllers;

use source\app\RegisterUser;
use source\repositories\user\UserRepositoryMySQL;

class RegisterController {
  public static function index(array $payload) {
    $repository = new UserRepositoryMySQL();

    $registerUser = new RegisterUser($repository);

    $registered =  $registerUser->execute($payload["name"], $payload["email"], $payload["password"], $payload["cpf"]);

    if($registered) {
      echo "Usuário cadastrado com sucesso";
    }
  }
}
