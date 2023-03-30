<?php

namespace source\repositories\user;

interface IUserRepository {
  public function createUser(string $name, string $email, string $password, string $cpf): bool;

  public function getUserByCpf(string | int $cpf): mixed;

  public function getAllUsers(): mixed;
}
