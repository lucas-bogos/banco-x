<?php

namespace BancoX\repositories\user;

class UserRepositoryMySQL implements IUserRepository {
  public function createUser(string $name, string $email, string $password, string $cpf): bool
  {
    return true;
  } 

  public function getUserByCpf(string|int $cpf): mixed
  {
    
  }

  public function getAllUsers(): mixed
  {
    
  }
}
