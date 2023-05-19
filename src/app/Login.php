<?php

namespace source\app;

use source\entities\validators\CpfValidator;
use source\repositories\user\IUserRepository;

session_start();

class Login {
  public IUserRepository $repository;

  public function __construct(IUserRepository $repository) {
    $this->repository = $repository;
  }

  public function checkCredentials(string $cpf, string $password): false | array {

    $isCpfValid = CpfValidator::valid($cpf);

    if(!$isCpfValid) {
      return false;
    }

    $user = $this->repository->getUserByCpf($cpf);

    if(count($user) == 0) {
      return false;
    }

    if($user[0]["cpf"] != $cpf) {
      return false;
    }

    if($user[0]["password"] != $password) {
      return false;
    }

    $_SESSION["user_logged"] = [
      "name" => $user[0]["name"],
      "email" => $user[0]["email"]
    ];

    return $user;
  }

  public static function isLogged(): bool {
    if($_SESSION["user_logged"]) {
      return true;
    }

    return false;
  }

  public static function signOut() {
    unset($_SESSION["user_logged"]);
    header("Location: /login");
  }
}