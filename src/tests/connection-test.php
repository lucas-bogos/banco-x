<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use source\shared\ConnectionDb;

// $sql = 'INSERT INTO user(name, email) VALUES (?, ?)';

// $statement = $instanceDb->prepare($sql);

// $result = $statement->execute([
//   0 => "rogerio",
//   1 => "rogerio@teste.com"
// ]);

// $sql = 'INSERT INTO user(name, email) VALUES(:name, :email)';
// $statement = $instanceDb->prepare($sql);
// $statement->bindValue(":name", "maria");
// $statement->bindValue(":email", "maria@teste.com");
// $result = $statement->execute();

$instanceDb = ConnectionDb::get();

$result = $instanceDb->query('insert into user(name, email, cpf, password) values("lucas", "lucasb@teste.com", "123.456.789-19", "123456789")');

echo "Usuário criado com sucesso!", PHP_EOL;

$users = $instanceDb->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
print_r($users);
