<?php

declare(strict_types=1); // A tipagem deve ser respeitada

namespace source\app;

use Error;
use source\entities\User;
use source\repositories\user\IUserRepository;

class RegisterUser {
  public IUserRepository $repository;

  public function __construct(IUserRepository $repository)
  {
    $this->repository = $repository;
  }

  public function execute(string $name, string $email, string $password, string $cpf): mixed {
    try {
      $user = User::create($name, $email, $password, $cpf);
  
      return $this->repository->createUser(
        $user->getName(),
        $user->getEmail(),
        $user->getPassword(),
        $user->getCpf()
      );

    } catch(Error $error) {
      echo $error->getMessage();

    }
  }
}
