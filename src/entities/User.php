<?php

declare(strict_types=1);

namespace BancoX\entities;

use BancoX\entities\validators\PasswordValidator;
use Error;

class User {
  private string $name;
  private string $email;
  private string $password;
  private string $cpf;

  private function __construct(string $name, string $email, string $password, string $cpf)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->cpf = $cpf;
  }

  public static function create(string $name, string $email, string $password, string $cpf): self {
    /**
     * Validar os valores
     */
    if(!PasswordValidator::valid($password)) {
      throw new Error('A senha não é válida');
    }

    return new self($name, $email, $password, $cpf);
  }

  public function getName(): string {
    return $this->name;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getPassword(): string {
    return $this->password;
  }

  public function getCpf(): string {
    return $this->cpf;
  }
}
