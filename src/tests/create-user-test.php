<?php

require_once __DIR__ . "/../../vendor/autoload.php";

/**
 * Cria usuário (cadastro)
 */
use source\app\RegisterUser;
use source\repositories\user\UserRepositoryInMemory;

$inMemoryRepository = new UserRepositoryInMemory();

$registerInMemory = new RegisterUser($inMemoryRepository);

$registerInMemory->execute('Lucas', 'bogoslucas@gmail.com', 'Senha@12345678', '123.456.789-00');
$registerInMemory->execute('Rogério', 'rogerio@gmail.com', 'Senha@987654', '123.456.789-00');

var_dump($registerInMemory);
