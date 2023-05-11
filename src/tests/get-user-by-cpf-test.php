<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use source\repositories\user\UserRepositoryMySQL;

$repository = new UserRepositoryMySQL();

print_r($repository->getUserByCpf("123.456.789-10"));