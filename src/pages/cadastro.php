<?php

use source\controllers\RegisterController;

require_once __DIR__ . "/partials/head.php";

useHead("Cadastro no Banco X", "Faça cadastro para acessar");

require_once __DIR__ . "/partials/header.php"; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $payload = [
    "name" => filter_input(INPUT_POST, "name"),
    "email" => filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL),
    "password" => filter_input(INPUT_POST, "password"),
    "cpf" => filter_input(INPUT_POST, "cpf")
  ];
  
  RegisterController::index($payload);
  
}

?>

<div>
  <h1>Cadastro</h1>
</div>

<div>
  <form class="register-form" method="post" action="/cadastro">
    <div>
      <label for="name">Nome</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="email">Email</label><br>
      <input type="email" name="email">
    </div>
    <div>
      <label for="cpf">CPF</label><br>
      <input type="text" name="cpf" placeholder="000.000.000-00">
    </div>
    <div>
      <label for="password">Senha</label><br>
      <input type="password" name="password">
    </div>
    <div>
      <button type="submit">Cadastrar</button>
    </div>
  </form>
</div>

<style>
  .register-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
</style>

<?php require_once __DIR__ . "/partials/footer.php" ?>
