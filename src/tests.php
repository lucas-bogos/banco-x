<?php

require_once __DIR__ . "/../vendor/autoload.php";

/**
 * Cria usuário (cadastro)
 */

use source\app\GetAllUsers;
use source\app\RegisterUser;
use source\repositories\user\UserRepositoryInMemory;

$inMemoryRepository = new UserRepositoryInMemory();

$registerSaveInMemory = new RegisterUser($inMemoryRepository);

$registerSaveInMemory->execute('Lucas', 'bogoslucas@gmail.com', 'Senha@12345678', '123.456.789-00');
$registerSaveInMemory->execute('Rogério', 'rogerio@gmail.com', 'Senha@987654', '123.456.789-00');

/**
 * Obter todos os usuários
 */
$getAllUsersInMemory = new GetAllUsers($inMemoryRepository);

print_r($getAllUsersInMemory->execute());