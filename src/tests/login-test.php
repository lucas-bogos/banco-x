<?php

use source\app\Login;
use source\app\RegisterUser;
use source\repositories\user\UserRepositoryInMemory;

require_once __DIR__ . "/../../vendor/autoload.php";

$respository = new UserRepositoryInMemory();

/**
 * Cadastrar usuário
 */
$registerInMemory = new RegisterUser($respository);

$registerInMemory->execute('Lucas', 'bogoslucas@gmail.com', 'Senha@12345678', '123.456.789-00');

/**
 * Testa login
 */
$login = new Login($respository);

$isUserValid = $login->checkCredentials('123.456.789-00', 'Senha@1234567810');

var_dump($isUserValid);