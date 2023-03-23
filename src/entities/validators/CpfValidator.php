<?php

namespace BancoX\entities\validators;

class CpfValidator
{
  public static function valid(string $cpf): bool
  {
    $pattern = '/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/';

    if (!preg_match($pattern, $cpf)) {
      return false;
    }

    return true;
  }
}
