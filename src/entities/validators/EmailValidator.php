<?php

namespace BancoX\entities\validators;

class PasswordValidator
{
  public static function valid(string $email): bool
  {
    $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (!preg_match($pattern, $email)) {
      return false;
    }

    return true;
  }
}
