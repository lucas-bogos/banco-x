<?php

use BancoX\repositories\user\IUserRepository;

class UserRepositoryInMemory implements IUserRepository {
  public static array $users = [];

  public function createUser(string $name, string $email, string $password, string $cpf): bool
  {
    $userCreated = array_push(self::$users, [
      'name' => $name,
      'email' => $email,
      'password' => $password,
      'cpf' => $cpf
    ]);

    if(!$userCreated) {
      return false;
    }

    return true;
  }

  public function getUserByCpf(string|int $cpf): array | false
  {
    foreach(self::$users as $user) {
      if($user['cpf'] === $cpf) {
        return $user;
      }
    }

    return false;
  }

  public function getAllUsers(): array
  {
    return self::$users;
  }
}
