<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use source\repositories\user\UserRepositoryMySQL;

$respository = new UserRepositoryMySQL();

print_r($respository->getAllUsers());
