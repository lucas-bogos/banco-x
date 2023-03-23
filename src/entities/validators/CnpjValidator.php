<?php

namespace BancoX\entities\validators;

class CnpjValidator
{
  public static function valid(string $cnpj): bool
  {
    $pattern = '/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/';

    if (!preg_match($pattern, $cnpj)) {
      return false;
    }

    return true;
  }
}
