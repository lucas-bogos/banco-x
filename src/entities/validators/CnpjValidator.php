<?php

namespace source\entities\validators;

class CnpjValidator
{
  public static function valid(string $cnpj): bool
  {
    $pattern = '/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/';

    if($cnpj === '00.000.000/0000-00') {
      return false;
    }

    if (!preg_match($pattern, $cnpj)) {
      return false;
    }

    return true;
  }
}
