<?php

namespace source\repositories\user;

use source\shared\ConnectionDb;

class UserRepositoryMySQL implements IUserRepository {
  public function createUser(string $name, string $email, string $password, string $cpf): bool
  {
    $db = ConnectionDb::get(); 

    $query = "INSERT INTO user (name, email, cpf, password) VALUES (:name, :email, :cpf, :password)";
    
    $statement = $db->prepare($query);

    $statement->bindValue(":name", $name);
    $statement->bindValue(":email", $email);
    $statement->bindValue(":cpf", $cpf);  
    $statement->bindValue(":password", $password);

    return $statement->execute();
  } 

  public function getUserByCpf(string|int $cpf): mixed
  {
    
  }

  public function getAllUsers(): mixed
  {
    
  }
}
