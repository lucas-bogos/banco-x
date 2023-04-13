<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use source\app\Account;

$account = new Account(4512, 20, ["CHECKING_ACCOUNT"]);

echo "-- DEPÓSITO ------------------------", PHP_EOL;
print_r($account->deposit(500));

echo "-- SAQUE ------------------------", PHP_EOL;
print_r($account->take(100));

echo "-- EXTRATO ------------------------", PHP_EOL;
print_r($account->showExtract());