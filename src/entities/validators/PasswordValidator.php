<?php

namespace source\entities\validators;

class PasswordValidator {
  public static function valid(string $password): bool {
    $pattern = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/';

    if(!preg_match($pattern, $password)) {
      return false;
    }

    return true;
  }
}
