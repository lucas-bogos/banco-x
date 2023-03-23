<?php

declare(strict_types=1); // A tipagem deve ser respeitada

use BancoX\repositories\user\IUserRepository;
use BancoX\repositories\user\UserRepositoryMySQL;

class RegisterUser {
  public IUserRepository $repository;

  public function __construct(IUserRepository $repository)
  {
    $this->repository = $repository;
  }

  public function execute(string $name, string $email, string $password, string $cpf): mixed {
    $this->repository->createUser($name, $email, $password, $cpf);
  }
}

$inMemoryRepository = new UserRepositoryInMemory();

$registerSaveInMemory = new RegisterUser($inMemoryRepository);

$registerSaveInMemory->execute('Lucas', 'bogoslucas@gmail.com', 'Senha@12345678', '123.456.789-00');

