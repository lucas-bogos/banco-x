<?php

require_once __DIR__ . "/../../vendor/autoload.php";

/**
 * Obter todos os usuários
 */

use source\app\GetAllUsers;

$getAllUsersInMemory = new GetAllUsers($inMemoryRepository);

print_r($getAllUsersInMemory->execute());
