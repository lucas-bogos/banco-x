<?php

namespace source\app;

use source\repositories\user\IUserRepository;

class GetUserByCpf {
  public IUserRepository $repository;

  public function __construct(IUserRepository $repository) {
    $this->repository = $repository;
  }

  public function execute(string $cpf): false | array {
    $user = $this->repository->getUserByCpf($cpf);

    if(!$user) {
      return false;
    }

    return $user;
  }
}
